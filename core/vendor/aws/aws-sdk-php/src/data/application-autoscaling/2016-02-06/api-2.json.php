<?php
// This file was auto-generated from sdk-root/src/data/application-autoscaling/2016-02-06/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2016-02-06', 'endpointPrefix' => 'autoscaling', 'jsonVersion' => '1.1', 'protocol' => 'json', 'serviceFullName' => 'Application Auto Scaling', 'signatureVersion' => 'v4', 'signingName' => 'application-autoscaling', 'targetPrefix' => 'AnyScaleFrontendService', 'uid' => 'application-autoscaling-2016-02-06', ], 'operations' => [ 'DeleteScalingPolicy' => [ 'name' => 'DeleteScalingPolicy', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DeleteScalingPolicyRequest', ], 'output' => [ 'shape' => 'DeleteScalingPolicyResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'ObjectNotFoundException', ], [ 'shape' => 'ConcurrentUpdateException', ], [ 'shape' => 'InternalServiceException', ], ], ], 'DeregisterScalableTarget' => [ 'name' => 'DeregisterScalableTarget', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DeregisterScalableTargetRequest', ], 'output' => [ 'shape' => 'DeregisterScalableTargetResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'ObjectNotFoundException', ], [ 'shape' => 'ConcurrentUpdateException', ], [ 'shape' => 'InternalServiceException', ], ], ], 'DescribeScalableTargets' => [ 'name' => 'DescribeScalableTargets', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeScalableTargetsRequest', ], 'output' => [ 'shape' => 'DescribeScalableTargetsResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'InvalidNextTokenException', ], [ 'shape' => 'ConcurrentUpdateException', ], [ 'shape' => 'InternalServiceException', ], ], ], 'DescribeScalingActivities' => [ 'name' => 'DescribeScalingActivities', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeScalingActivitiesRequest', ], 'output' => [ 'shape' => 'DescribeScalingActivitiesResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'InvalidNextTokenException', ], [ 'shape' => 'ConcurrentUpdateException', ], [ 'shape' => 'InternalServiceException', ], ], ], 'DescribeScalingPolicies' => [ 'name' => 'DescribeScalingPolicies', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeScalingPoliciesRequest', ], 'output' => [ 'shape' => 'DescribeScalingPoliciesResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'FailedResourceAccessException', ], [ 'shape' => 'InvalidNextTokenException', ], [ 'shape' => 'ConcurrentUpdateException', ], [ 'shape' => 'InternalServiceException', ], ], ], 'PutScalingPolicy' => [ 'name' => 'PutScalingPolicy', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'PutScalingPolicyRequest', ], 'output' => [ 'shape' => 'PutScalingPolicyResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'ObjectNotFoundException', ], [ 'shape' => 'ConcurrentUpdateException', ], [ 'shape' => 'InternalServiceException', ], ], ], 'RegisterScalableTarget' => [ 'name' => 'RegisterScalableTarget', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'RegisterScalableTargetRequest', ], 'output' => [ 'shape' => 'RegisterScalableTargetResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'ConcurrentUpdateException', ], [ 'shape' => 'InternalServiceException', ], ], ], ], 'shapes' => [ 'AdjustmentType' => [ 'type' => 'string', 'enum' => [ 'ChangeInCapacity', 'PercentChangeInCapacity', 'ExactCapacity', ], ], 'Alarm' => [ 'type' => 'structure', 'required' => [ 'AlarmName', 'AlarmARN', ], 'members' => [ 'AlarmName' => [ 'shape' => 'ResourceId', ], 'AlarmARN' => [ 'shape' => 'ResourceId', ], ], ], 'Alarms' => [ 'type' => 'list', 'member' => [ 'shape' => 'Alarm', ], ], 'ConcurrentUpdateException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'Cooldown' => [ 'type' => 'integer', ], 'DeleteScalingPolicyRequest' => [ 'type' => 'structure', 'required' => [ 'PolicyName', 'ServiceNamespace', 'ResourceId', 'ScalableDimension', ], 'members' => [ 'PolicyName' => [ 'shape' => 'ResourceIdMaxLen1600', ], 'ServiceNamespace' => [ 'shape' => 'ServiceNamespace', ], 'ResourceId' => [ 'shape' => 'ResourceIdMaxLen1600', ], 'ScalableDimension' => [ 'shape' => 'ScalableDimension', ], ], ], 'DeleteScalingPolicyResponse' => [ 'type' => 'structure', 'members' => [], ], 'DeregisterScalableTargetRequest' => [ 'type' => 'structure', 'required' => [ 'ServiceNamespace', 'ResourceId', 'ScalableDimension', ], 'members' => [ 'ServiceNamespace' => [ 'shape' => 'ServiceNamespace', ], 'ResourceId' => [ 'shape' => 'ResourceIdMaxLen1600', ], 'ScalableDimension' => [ 'shape' => 'ScalableDimension', ], ], ], 'DeregisterScalableTargetResponse' => [ 'type' => 'structure', 'members' => [], ], 'DescribeScalableTargetsRequest' => [ 'type' => 'structure', 'required' => [ 'ServiceNamespace', ], 'members' => [ 'ServiceNamespace' => [ 'shape' => 'ServiceNamespace', ], 'ResourceIds' => [ 'shape' => 'ResourceIdsMaxLen1600', ], 'ScalableDimension' => [ 'shape' => 'ScalableDimension', ], 'MaxResults' => [ 'shape' => 'MaxResults', ], 'NextToken' => [ 'shape' => 'XmlString', ], ], ], 'DescribeScalableTargetsResponse' => [ 'type' => 'structure', 'members' => [ 'ScalableTargets' => [ 'shape' => 'ScalableTargets', ], 'NextToken' => [ 'shape' => 'XmlString', ], ], ], 'DescribeScalingActivitiesRequest' => [ 'type' => 'structure', 'required' => [ 'ServiceNamespace', ], 'members' => [ 'ServiceNamespace' => [ 'shape' => 'ServiceNamespace', ], 'ResourceId' => [ 'shape' => 'ResourceIdMaxLen1600', ], 'ScalableDimension' => [ 'shape' => 'ScalableDimension', ], 'MaxResults' => [ 'shape' => 'MaxResults', ], 'NextToken' => [ 'shape' => 'XmlString', ], ], ], 'DescribeScalingActivitiesResponse' => [ 'type' => 'structure', 'members' => [ 'ScalingActivities' => [ 'shape' => 'ScalingActivities', ], 'NextToken' => [ 'shape' => 'XmlString', ], ], ], 'DescribeScalingPoliciesRequest' => [ 'type' => 'structure', 'required' => [ 'ServiceNamespace', ], 'members' => [ 'PolicyNames' => [ 'shape' => 'ResourceIdsMaxLen1600', ], 'ServiceNamespace' => [ 'shape' => 'ServiceNamespace', ], 'ResourceId' => [ 'shape' => 'ResourceIdMaxLen1600', ], 'ScalableDimension' => [ 'shape' => 'ScalableDimension', ], 'MaxResults' => [ 'shape' => 'MaxResults', ], 'NextToken' => [ 'shape' => 'XmlString', ], ], ], 'DescribeScalingPoliciesResponse' => [ 'type' => 'structure', 'members' => [ 'ScalingPolicies' => [ 'shape' => 'ScalingPolicies', ], 'NextToken' => [ 'shape' => 'XmlString', ], ], ], 'ErrorMessage' => [ 'type' => 'string', ], 'FailedResourceAccessException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'InternalServiceException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'InvalidNextTokenException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'LimitExceededException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'MaxResults' => [ 'type' => 'integer', ], 'MetricAggregationType' => [ 'type' => 'string', 'enum' => [ 'Average', 'Minimum', 'Maximum', ], ], 'MetricScale' => [ 'type' => 'double', ], 'MinAdjustmentMagnitude' => [ 'type' => 'integer', ], 'ObjectNotFoundException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'PolicyName' => [ 'type' => 'string', 'max' => 256, 'min' => 1, 'pattern' => '\\p{Print}+', ], 'PolicyType' => [ 'type' => 'string', 'enum' => [ 'StepScaling', ], ], 'PutScalingPolicyRequest' => [ 'type' => 'structure', 'required' => [ 'PolicyName', 'ServiceNamespace', 'ResourceId', 'ScalableDimension', ], 'members' => [ 'PolicyName' => [ 'shape' => 'PolicyName', ], 'ServiceNamespace' => [ 'shape' => 'ServiceNamespace', ], 'ResourceId' => [ 'shape' => 'ResourceIdMaxLen1600', ], 'ScalableDimension' => [ 'shape' => 'ScalableDimension', ], 'PolicyType' => [ 'shape' => 'PolicyType', ], 'StepScalingPolicyConfiguration' => [ 'shape' => 'StepScalingPolicyConfiguration', ], ], ], 'PutScalingPolicyResponse' => [ 'type' => 'structure', 'required' => [ 'PolicyARN', ], 'members' => [ 'PolicyARN' => [ 'shape' => 'ResourceIdMaxLen1600', ], ], ], 'RegisterScalableTargetRequest' => [ 'type' => 'structure', 'required' => [ 'ServiceNamespace', 'ResourceId', 'ScalableDimension', ], 'members' => [ 'ServiceNamespace' => [ 'shape' => 'ServiceNamespace', ], 'ResourceId' => [ 'shape' => 'ResourceIdMaxLen1600', ], 'ScalableDimension' => [ 'shape' => 'ScalableDimension', ], 'MinCapacity' => [ 'shape' => 'ResourceCapacity', ], 'MaxCapacity' => [ 'shape' => 'ResourceCapacity', ], 'RoleARN' => [ 'shape' => 'ResourceIdMaxLen1600', ], ], ], 'RegisterScalableTargetResponse' => [ 'type' => 'structure', 'members' => [], ], 'ResourceCapacity' => [ 'type' => 'integer', ], 'ResourceId' => [ 'type' => 'string', 'pattern' => '[\\u0020-\\uD7FF\\uE000-\\uFFFD\\uD800\\uDC00-\\uDBFF\\uDFFF\\r\\n\\t]*', ], 'ResourceIdMaxLen1600' => [ 'type' => 'string', 'max' => 1600, 'min' => 1, 'pattern' => '[\\u0020-\\uD7FF\\uE000-\\uFFFD\\uD800\\uDC00-\\uDBFF\\uDFFF\\r\\n\\t]*', ], 'ResourceIdsMaxLen1600' => [ 'type' => 'list', 'member' => [ 'shape' => 'ResourceIdMaxLen1600', ], ], 'ScalableDimension' => [ 'type' => 'string', 'enum' => [ 'ecs:service:DesiredCount', 'ec2:spot-fleet-request:TargetCapacity', 'elasticmapreduce:instancegroup:InstanceCount', 'appstream:fleet:DesiredCapacity', ], ], 'ScalableTarget' => [ 'type' => 'structure', 'required' => [ 'ServiceNamespace', 'ResourceId', 'ScalableDimension', 'MinCapacity', 'MaxCapacity', 'RoleARN', 'CreationTime', ], 'members' => [ 'ServiceNamespace' => [ 'shape' => 'ServiceNamespace', ], 'ResourceId' => [ 'shape' => 'ResourceIdMaxLen1600', ], 'ScalableDimension' => [ 'shape' => 'ScalableDimension', ], 'MinCapacity' => [ 'shape' => 'ResourceCapacity', ], 'MaxCapacity' => [ 'shape' => 'ResourceCapacity', ], 'RoleARN' => [ 'shape' => 'ResourceIdMaxLen1600', ], 'CreationTime' => [ 'shape' => 'TimestampType', ], ], ], 'ScalableTargets' => [ 'type' => 'list', 'member' => [ 'shape' => 'ScalableTarget', ], ], 'ScalingActivities' => [ 'type' => 'list', 'member' => [ 'shape' => 'ScalingActivity', ], ], 'ScalingActivity' => [ 'type' => 'structure', 'required' => [ 'ActivityId', 'ServiceNamespace', 'ResourceId', 'ScalableDimension', 'Description', 'Cause', 'StartTime', 'StatusCode', ], 'members' => [ 'ActivityId' => [ 'shape' => 'ResourceId', ], 'ServiceNamespace' => [ 'shape' => 'ServiceNamespace', ], 'ResourceId' => [ 'shape' => 'ResourceIdMaxLen1600', ], 'ScalableDimension' => [ 'shape' => 'ScalableDimension', ], 'Description' => [ 'shape' => 'XmlString', ], 'Cause' => [ 'shape' => 'XmlString', ], 'StartTime' => [ 'shape' => 'TimestampType', ], 'EndTime' => [ 'shape' => 'TimestampType', ], 'StatusCode' => [ 'shape' => 'ScalingActivityStatusCode', ], 'StatusMessage' => [ 'shape' => 'XmlString', ], 'Details' => [ 'shape' => 'XmlString', ], ], ], 'ScalingActivityStatusCode' => [ 'type' => 'string', 'enum' => [ 'Pending', 'InProgress', 'Successful', 'Overridden', 'Unfulfilled', 'Failed', ], ], 'ScalingAdjustment' => [ 'type' => 'integer', ], 'ScalingPolicies' => [ 'type' => 'list', 'member' => [ 'shape' => 'ScalingPolicy', ], ], 'ScalingPolicy' => [ 'type' => 'structure', 'required' => [ 'PolicyARN', 'PolicyName', 'ServiceNamespace', 'ResourceId', 'ScalableDimension', 'PolicyType', 'CreationTime', ], 'members' => [ 'PolicyARN' => [ 'shape' => 'ResourceIdMaxLen1600', ], 'PolicyName' => [ 'shape' => 'PolicyName', ], 'ServiceNamespace' => [ 'shape' => 'ServiceNamespace', ], 'ResourceId' => [ 'shape' => 'ResourceIdMaxLen1600', ], 'ScalableDimension' => [ 'shape' => 'ScalableDimension', ], 'PolicyType' => [ 'shape' => 'PolicyType', ], 'StepScalingPolicyConfiguration' => [ 'shape' => 'StepScalingPolicyConfiguration', ], 'Alarms' => [ 'shape' => 'Alarms', ], 'CreationTime' => [ 'shape' => 'TimestampType', ], ], ], 'ServiceNamespace' => [ 'type' => 'string', 'enum' => [ 'ecs', 'elasticmapreduce', 'ec2', 'appstream', ], ], 'StepAdjustment' => [ 'type' => 'structure', 'required' => [ 'ScalingAdjustment', ], 'members' => [ 'MetricIntervalLowerBound' => [ 'shape' => 'MetricScale', ], 'MetricIntervalUpperBound' => [ 'shape' => 'MetricScale', ], 'ScalingAdjustment' => [ 'shape' => 'ScalingAdjustment', ], ], ], 'StepAdjustments' => [ 'type' => 'list', 'member' => [ 'shape' => 'StepAdjustment', ], ], 'StepScalingPolicyConfiguration' => [ 'type' => 'structure', 'members' => [ 'AdjustmentType' => [ 'shape' => 'AdjustmentType', ], 'StepAdjustments' => [ 'shape' => 'StepAdjustments', ], 'MinAdjustmentMagnitude' => [ 'shape' => 'MinAdjustmentMagnitude', ], 'Cooldown' => [ 'shape' => 'Cooldown', ], 'MetricAggregationType' => [ 'shape' => 'MetricAggregationType', ], ], ], 'TimestampType' => [ 'type' => 'timestamp', ], 'ValidationException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'XmlString' => [ 'type' => 'string', 'pattern' => '[\\u0020-\\uD7FF\\uE000-\\uFFFD\\uD800\\uDC00-\\uDBFF\\uDFFF\\r\\n\\t]*', ], ],];
