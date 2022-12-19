<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeStrategyDetailResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeStrategyDetailResponseBody\strategy\riskTypeWhiteListQueryResultList;
use AlibabaCloud\Tea\Model;

class strategy extends Model
{
    /**
     * @description The type of the baseline check policy. Valid values:
     *
     *   **common**: standard baseline check policy
     *   **custom**: custom baseline check policy
     *
     * @example common
     *
     * @var string
     */
    public $customType;

    /**
     * @description The check interval of the policy.
     *
     * @example 3
     *
     * @var int
     */
    public $cycleDays;

    /**
     * @description The time period during which the check starts. Valid values:
     *
     *   **0**: 00:00 to 06:00
     *   **6**: 06:00 to 12:00
     *   **12**: 12:00 to 18:00
     *   **18**: 18:00 to 24:00
     *
     * @example 0
     *
     * @var int
     */
    public $cycleStartTime;

    /**
     * @description The time when the baseline check based on the baseline check policy ends.
     *
     * @example 03:00:00
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The ID of the baseline check policy.
     *
     * @example 123
     *
     * @var int
     */
    public $id;

    /**
     * @description The name of the baseline check policy.
     *
     * @example TestStrategy
     *
     * @var string
     */
    public $name;

    /**
     * @description An array that consists of the whitelist of risk items.
     *
     * @var riskTypeWhiteListQueryResultList[]
     */
    public $riskTypeWhiteListQueryResultList;

    /**
     * @description The time when the baseline check based on the baseline check policy starts.
     *
     * @example 02:00:00
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The condition by which the baseline check policy is applied to the asset. Valid values:
     *
     *   **groupId**: the ID of the asset group
     *   **uuid**: the UUID of the asset
     *
     * @example groupId
     *
     * @var string
     */
    public $targetType;

    /**
     * @description The type of the baseline check policy. Valid values:
     *
     *   **1**: standard baseline check policy
     *   **2**: custom baseline check policy
     *
     * @example 1
     *
     * @var int
     */
    public $type;
    protected $_name = [
        'customType'                       => 'CustomType',
        'cycleDays'                        => 'CycleDays',
        'cycleStartTime'                   => 'CycleStartTime',
        'endTime'                          => 'EndTime',
        'id'                               => 'Id',
        'name'                             => 'Name',
        'riskTypeWhiteListQueryResultList' => 'RiskTypeWhiteListQueryResultList',
        'startTime'                        => 'StartTime',
        'targetType'                       => 'TargetType',
        'type'                             => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customType) {
            $res['CustomType'] = $this->customType;
        }
        if (null !== $this->cycleDays) {
            $res['CycleDays'] = $this->cycleDays;
        }
        if (null !== $this->cycleStartTime) {
            $res['CycleStartTime'] = $this->cycleStartTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->riskTypeWhiteListQueryResultList) {
            $res['RiskTypeWhiteListQueryResultList'] = [];
            if (null !== $this->riskTypeWhiteListQueryResultList && \is_array($this->riskTypeWhiteListQueryResultList)) {
                $n = 0;
                foreach ($this->riskTypeWhiteListQueryResultList as $item) {
                    $res['RiskTypeWhiteListQueryResultList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return strategy
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomType'])) {
            $model->customType = $map['CustomType'];
        }
        if (isset($map['CycleDays'])) {
            $model->cycleDays = $map['CycleDays'];
        }
        if (isset($map['CycleStartTime'])) {
            $model->cycleStartTime = $map['CycleStartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RiskTypeWhiteListQueryResultList'])) {
            if (!empty($map['RiskTypeWhiteListQueryResultList'])) {
                $model->riskTypeWhiteListQueryResultList = [];
                $n                                       = 0;
                foreach ($map['RiskTypeWhiteListQueryResultList'] as $item) {
                    $model->riskTypeWhiteListQueryResultList[$n++] = null !== $item ? riskTypeWhiteListQueryResultList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
