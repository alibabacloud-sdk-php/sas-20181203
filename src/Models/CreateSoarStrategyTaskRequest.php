<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class CreateSoarStrategyTaskRequest extends Model
{
    /**
     * @description The ID of the policy.
     *
     * >  You can call the [DescribeSoarSubscribedStrategy](~~DescribeSoarSubscribedStrategy~~) operation to obtain the ID.
     *
     * This parameter is required.
     *
     * @example 13840
     *
     * @var int
     */
    public $strategyId;

    /**
     * @description The name of the policy. Set the value to Automated Batch Vulnerability Fixing Policy for Multiple Servers.
     *
     * This parameter is required.
     *
     * @example Automated Batch Vulnerability Fixing Policy for Multiple Servers
     *
     * @var string
     */
    public $strategyName;

    /**
     * @description The name of.the policy task.
     *
     * This parameter is required.
     *
     * @example task1
     *
     * @var string
     */
    public $strategyTaskName;

    /**
     * @description The parameters of the policy task. The value is a JSON array.
     *
     * Vulnerability-related parameters:
     *
     *   name: vluList
     *   associationProperty: sasAllVul
     *   value: basic vulnerability information
     *
     * Snapshot-related parameters:
     *
     *   name: snapshotConfig
     *   associationProperty: snapshotConfig
     *   value: retention period
     *
     * Notification-related parameters:
     *
     *   name: notifyConfig
     *   associationProperty: notifyConfig
     *   value: email or DingTalk configuration information
     *
     * This parameter is required.
     *
     * @example [
     * {
     * "name": "vulList",
     * "associationProperty": "sasAllVul",
     * "value": [
     * {
     * "regionId": "cn-hangzhou",
     * "instanceId": "i-bp10i******68lo5e",
     * "instanceName": "instance****",
     * "vulId": 3974347681,
     * "vulName": "centos:7:cesa-2024:1249",
     * "vulAliasName": "CESA-2024:1249",
     * "vulTag": "oval",
     * "vulUuid": "3c5eb76a-******-85ef-67562cdc2344",
     * "vulType": "cve",
     * "vulModifyTs": 1721324258000
     * }
     * ]
     * },
     * {
     * "name": "snapshotConfig",
     * "associationProperty": "snapshotConfig",
     * "value": {
     * "ttl": 1
     * }
     * },
     * {
     * "name": "notifyConfig",
     * "associationProperty": "notifyConfig",
     * "value": {
     * "ding": [
     * {
     * "value": 2195,
     * "label": "test"
     * }
     * ]
     * }
     * }
     * ]
     *
     * @var string
     */
    public $strategyTaskParams;

    /**
     * @description The timestamp when the task is scheduled to start. Unit: milliseconds.
     *
     * @example 1586739841000
     *
     * @var int
     */
    public $strategyTaskPlanExeTime;
    protected $_name = [
        'strategyId' => 'StrategyId',
        'strategyName' => 'StrategyName',
        'strategyTaskName' => 'StrategyTaskName',
        'strategyTaskParams' => 'StrategyTaskParams',
        'strategyTaskPlanExeTime' => 'StrategyTaskPlanExeTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->strategyId) {
            $res['StrategyId'] = $this->strategyId;
        }
        if (null !== $this->strategyName) {
            $res['StrategyName'] = $this->strategyName;
        }
        if (null !== $this->strategyTaskName) {
            $res['StrategyTaskName'] = $this->strategyTaskName;
        }
        if (null !== $this->strategyTaskParams) {
            $res['StrategyTaskParams'] = $this->strategyTaskParams;
        }
        if (null !== $this->strategyTaskPlanExeTime) {
            $res['StrategyTaskPlanExeTime'] = $this->strategyTaskPlanExeTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSoarStrategyTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StrategyId'])) {
            $model->strategyId = $map['StrategyId'];
        }
        if (isset($map['StrategyName'])) {
            $model->strategyName = $map['StrategyName'];
        }
        if (isset($map['StrategyTaskName'])) {
            $model->strategyTaskName = $map['StrategyTaskName'];
        }
        if (isset($map['StrategyTaskParams'])) {
            $model->strategyTaskParams = $map['StrategyTaskParams'];
        }
        if (isset($map['StrategyTaskPlanExeTime'])) {
            $model->strategyTaskPlanExeTime = $map['StrategyTaskPlanExeTime'];
        }

        return $model;
    }
}
