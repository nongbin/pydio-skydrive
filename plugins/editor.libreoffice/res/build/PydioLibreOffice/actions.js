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

var _createClass = (function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ('value' in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; })();

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError('Cannot call a class as a function'); } }

var Callbacks = (function () {
    function Callbacks() {
        _classCallCheck(this, Callbacks);
    }

    _createClass(Callbacks, null, [{
        key: 'dynamicBuilder',
        value: function dynamicBuilder(controller) {
            var _this = this;

            var pydio = window.pydio;
            var MessageHash = pydio.MessageHash;
            var exts = {
                doc: 'file-word',
                docx: 'file-word',
                odt: 'file-word',
                odg: 'file-chart',
                odp: 'file-powerpoint',
                ods: 'file-excel',
                pot: 'file-powerpoint',
                pptx: 'file-powerpoint',
                rtf: 'file-word',
                xls: 'file-excel',
                xlsx: 'file-excel'
            };

            var dir = pydio.getContextHolder().getContextNode().getPath();

            var builderMenuItems = [];

            Object.keys(exts).forEach(function (k) {

                if (!MessageHash['libreoffice.ext.' + k]) return;

                builderMenuItems.push({
                    name: MessageHash['libreoffice.ext.' + k],
                    alt: MessageHash['libreoffice.ext.' + k],
                    icon_class: 'mdi mdi-' + exts[k],
                    callback: (function (e) {
                        PydioApi.getClient().request({
                            get_action: 'libreoffice_mkempty_file',
                            dir: dir,
                            format: k
                        });
                    }).bind(_this)
                });
            });

            return builderMenuItems;
        }
    }]);

    return Callbacks;
})();

window.PydioLibreOfficeActions = { Callbacks: Callbacks };
