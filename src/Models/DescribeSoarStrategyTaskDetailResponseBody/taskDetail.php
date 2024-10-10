<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSoarStrategyTaskDetailResponseBody;

use AlibabaCloud\Tea\Model;

class taskDetail extends Model
{
    /**
     * @description The operational log information of the task.
     *
     * @example {
     * }
     * @var string
     */
    public $logInfo;

    /**
     * @description The parameters of the task.
     *
     * @example [
     * "regionId": "cn-hangzhou",
     * "instanceId": "i-bp10i3dtyq7x4****5e",
     * "vulTag": "oval",
     * "vulUuid": "3c5eb76a-df89-****-85ef-67562cdc2344",
     * ]
     * @var string
     */
    public $params;

    /**
     * @description The process information of the task.
     *
     * @example {
     * "actionId": "Action_014s73k",
     * "iconUrl": "https://img.alicdn.com/tfs/TB1T*****jSZLeXXb9kVXa-12-14.svg",
     * }
     * @var string
     */
    public $processInfo;

    /**
     * @description The name of the task.
     *
     * @example task-1
     *
     * @var string
     */
    public $taskName;
    protected $_name = [
        'logInfo'     => 'LogInfo',
        'params'      => 'Params',
        'processInfo' => 'ProcessInfo',
        'taskName'    => 'TaskName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logInfo) {
            $res['LogInfo'] = $this->logInfo;
        }
        if (null !== $this->params) {
            $res['Params'] = $this->params;
        }
        if (null !== $this->processInfo) {
            $res['ProcessInfo'] = $this->processInfo;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return taskDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LogInfo'])) {
            $model->logInfo = $map['LogInfo'];
        }
        if (isset($map['Params'])) {
            $model->params = $map['Params'];
        }
        if (isset($map['ProcessInfo'])) {
            $model->processInfo = $map['ProcessInfo'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        return $model;
    }
}