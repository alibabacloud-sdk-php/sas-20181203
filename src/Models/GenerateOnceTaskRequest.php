<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class GenerateOnceTaskRequest extends Model
{
    /**
     * @description The collection time.
     *
     * @example {"mode":1,"problemType":"offline","uuids":"inet-795dcad1-360f-49d2-b01e-b7da7f1c****"}
     *
     * @var string
     */
    public $param;

    /**
     * @description The total number of scan tasks.
     *
     * @example Manual
     *
     * @var string
     */
    public $source;

    /**
     * @description The ID of the last scan task.
     *
     * @example CLIENT_PROBLEM_CHECK
     *
     * @var string
     */
    public $taskName;

    /**
     * @description Indicates whether you can create more scan tasks. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * > By default, a maximum of 10 scan tasks can be running at the same time. If 10 image scan tasks are running, you cannot create a scan task by calling this operation. You must wait for at least one of the 10 existing scan tasks to complete before you can create a scan task.
     * @example CLIENT_PROBLEM_CHECK
     *
     * @var string
     */
    public $taskType;
    protected $_name = [
        'param'    => 'Param',
        'source'   => 'Source',
        'taskName' => 'TaskName',
        'taskType' => 'TaskType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->param) {
            $res['Param'] = $this->param;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenerateOnceTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Param'])) {
            $model->param = $map['Param'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        return $model;
    }
}
