/*
 * Copyright 2007-2017 Charles du Jeu - Abstrium SAS <team (at) pyd.io>
 * This file is part of Pydio.
 *
 * Pydio is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Pydio is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with Pydio.  If not, see <http://www.gnu.org/licenses/>.
 *
 * The latest code can be found at <https://pydio.com>.
 */

'use strict';

Object.defineProperty(exports, '__esModule', {
    value: true
});

var _utilMessagesMixin = require('../util/MessagesMixin');

exports['default'] = React.createClass({
    displayName: 'UserRolesPicker',

    mixins: [_utilMessagesMixin.RoleMessagesConsumerMixin],

    propTypes: {
        availableRoles: React.PropTypes.array,
        rolesDetails: React.PropTypes.object,
        currentRoles: React.PropTypes.array,
        controller: React.PropTypes.object
    },

    onChange: function onChange(e, selectedIndex, menuItem) {
        var newRole = menuItem.payload;
        if (newRole == -1) return;
        var newRoles = this.props.currentRoles.slice();
        newRoles.push(newRole);
        this.props.controller.updateUserRoles(newRoles);
    },

    remove: function remove(roleId) {
        var newRoles = LangUtils.arrayWithout(this.props.currentRoles, this.props.currentRoles.indexOf(roleId));
        this.props.controller.updateUserRoles(newRoles);
    },

    orderUpdated: function orderUpdated(oldId, newId, currentValues) {
        var ordered = currentValues.map(function (o) {
            return o.payload;
        });
        this.props.controller.orderUserRoles(ordered);
    },

    render: function render() {

        var groups = [],
            manual = [],
            users = [];
        var currentRoles = this.props.currentRoles;
        var details = this.props.rolesDetails;
        currentRoles.map((function (r) {
            if (r.startsWith('AJXP_GRP_/')) {
                if (r == 'AJXP_GRP_/') {
                    groups.push('/ ' + this.context.getMessage('user.25', 'ajxp_admin'));
                } else {
                    groups.push(this.context.getMessage('user.26', 'ajxp_admin').replace('%s', r.substr('AJXP_GRP_'.length)));
                }
            } else if (r.startsWith('AJXP_USR_/')) {
                users.push(this.context.getMessage('user.27', 'ajxp_admin'));
            } else {
                if (!details[r]) {
                    return;
                }
                var label = details[r].label;
                if (details[r].sticky) label += ' [' + this.context.getMessage('19') + ']'; // always overrides
                manual.push({ payload: r, text: label });
            }
        }).bind(this));

        var addableRoles = [{ text: this.context.getMessage('20'), payload: -1 }];
        this.props.availableRoles.map(function (r) {
            if (currentRoles.indexOf(r) == -1) addableRoles.push({ text: details[r].label, payload: r });
        });

        return React.createElement(
            'div',
            { className: 'user-roles-picker' },
            React.createElement(
                'h1',
                null,
                'Manage roles ',
                this.props.loadingMessage ? ' (' + this.context.getMessage('21') + ')' : '',
                React.createElement(
                    'div',
                    { className: 'roles-picker-menu' },
                    React.createElement(ReactMUI.DropDownMenu, { menuItems: addableRoles, onChange: this.onChange, selectedIndex: 0 })
                )
            ),
            React.createElement(
                'div',
                { className: 'roles-list' },
                groups.map(function (g) {
                    return React.createElement(
                        ReactMUI.Paper,
                        { zDepth: 0, key: "group-" + g },
                        React.createElement(
                            'div',
                            { className: 'role-item role-item-group' },
                            g
                        )
                    );
                }),
                React.createElement(PydioComponents.SortableList, {
                    key: 'sortable',
                    values: manual,
                    removable: true,
                    onRemove: this.remove,
                    onOrderUpdated: this.orderUpdated,
                    itemClassName: 'role-item role-item-sortable'
                }),
                users.map(function (u) {
                    return React.createElement(
                        ReactMUI.Paper,
                        { zDepth: 0, key: "user-" + u },
                        React.createElement(
                            'div',
                            { className: 'role-item role-item-user' },
                            u
                        )
                    );
                })
            )
        );
    }

});
module.exports = exports['default'];
