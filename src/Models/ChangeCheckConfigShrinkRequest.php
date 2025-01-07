<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\ChangeCheckConfigShrinkRequest\addedCheck;
use AlibabaCloud\SDK\Sas\V20181203\Models\ChangeCheckConfigShrinkRequest\removedCheck;
use AlibabaCloud\Tea\Model;

class ChangeCheckConfigShrinkRequest extends Model
{
    /**
     * @description The list of check items that you want to add to the policy.
     *
     * >  If the ConfigStandardIds or ConfigRequirementIds parameter is configured, this parameter does not take effect.
     * @var addedCheck[]
     */
    public $addedCheck;

    /**
     * @description The requirement IDs that you want to specify for the check policy.
     *
     * >  You can call the [ListCheckResult](~~ListCheckResult~~) operation to obtain the requirement ID. If the ConfigStandardIds parameter is configured, this parameter does not take effect.
     * @var string
     */
    public $configRequirementIdsShrink;

    /**
     * @description The standard IDs that you want to specify for the check policy.
     *
     * >  You can call the [ListCheckResult](~~ListCheckResult~~) operation to obtain the standard ID.
     * @var string
     */
    public $configStandardIdsShrink;

    /**
     * @description The configuration of the check item. Valid value:
     *
     *   **all**: Add all check items.
     *
     * @example all
     *
     * @var string
     */
    public $configure;

    /**
     * @description The days in a week on which a check is performed.
     *
     * @var int[]
     */
    public $cycleDays;

    /**
     * @description Specifies whether to check the new check items in the selected requirement item. Valid values:
     * - **true**
     * - **false**
     * @example false
     *
     * @var bool
     */
    public $enableAddCheck;

    /**
     * @description Specifies whether to enable the automatic periodical check feature. Valid values:
     *
     * - **true**
     * - **false**
     * @example true
     *
     * @var bool
     */
    public $enableAutoCheck;

    /**
     * @description The end time of the check. The value specifies a point in time in a day. The time period that is specified by the start time and end time must be one of the following time periods:
     *
     *   **00:00 to 06:00:** If you set the StartTime parameter to 0, you must set the EndTime parameter to 6.
     *   **06:00 to 12:00**: If you set the StartTime parameter to 6, you must set the EndTime parameter to 12.
     *   **12:00 to 18:00**: If you set the StartTime parameter to 12, you must set the EndTime parameter to 18.
     *  **18:00 to 24:00:** If you set the StartTime parameter to 18, you must set the EndTime parameter to 24.
     *
     * @example 6
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The region ID of the bastion host to query.
     *
     * >  For more information about the mapping between region IDs and region names, see [Regions and zones](https://help.aliyun.com/document_detail/40654.html).
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The list of the check items that you want to remove from the policy.
     *
     * >  If the ConfigStandardIds or ConfigRequirementIds parameter is configured, this parameter does not take effect.
     * @var removedCheck[]
     */
    public $removedCheck;

    /**
     * @description An array that consists of the information about the check item.
     *
     * @var int[]
     */
    public $standardIds;

    /**
     * @description The start time of the check. The value specifies a point in time in a day.
     *
     * @example 0
     *
     * @var int
     */
    public $startTime;

    /**
     * @description Specifies whether to use the configuration automatically generated by the system. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $systemConfig;

    /**
     * @description The cloud service providers.
     *
     * @var string[]
     */
    public $vendors;
    protected $_name = [
        'addedCheck'                 => 'AddedCheck',
        'configRequirementIdsShrink' => 'ConfigRequirementIds',
        'configStandardIdsShrink'    => 'ConfigStandardIds',
        'configure'                  => 'Configure',
        'cycleDays'                  => 'CycleDays',
        'enableAddCheck'             => 'EnableAddCheck',
        'enableAutoCheck'            => 'EnableAutoCheck',
        'endTime'                    => 'EndTime',
        'regionId'                   => 'RegionId',
        'removedCheck'               => 'RemovedCheck',
        'standardIds'                => 'StandardIds',
        'startTime'                  => 'StartTime',
        'systemConfig'               => 'SystemConfig',
        'vendors'                    => 'Vendors',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addedCheck) {
            $res['AddedCheck'] = [];
            if (null !== $this->addedCheck && \is_array($this->addedCheck)) {
                $n = 0;
                foreach ($this->addedCheck as $item) {
                    $res['AddedCheck'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->configRequirementIdsShrink) {
            $res['ConfigRequirementIds'] = $this->configRequirementIdsShrink;
        }
        if (null !== $this->configStandardIdsShrink) {
            $res['ConfigStandardIds'] = $this->configStandardIdsShrink;
        }
        if (null !== $this->configure) {
            $res['Configure'] = $this->configure;
        }
        if (null !== $this->cycleDays) {
            $res['CycleDays'] = $this->cycleDays;
        }
        if (null !== $this->enableAddCheck) {
            $res['EnableAddCheck'] = $this->enableAddCheck;
        }
        if (null !== $this->enableAutoCheck) {
            $res['EnableAutoCheck'] = $this->enableAutoCheck;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->removedCheck) {
            $res['RemovedCheck'] = [];
            if (null !== $this->removedCheck && \is_array($this->removedCheck)) {
                $n = 0;
                foreach ($this->removedCheck as $item) {
                    $res['RemovedCheck'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->standardIds) {
            $res['StandardIds'] = $this->standardIds;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->systemConfig) {
            $res['SystemConfig'] = $this->systemConfig;
        }
        if (null !== $this->vendors) {
            $res['Vendors'] = $this->vendors;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ChangeCheckConfigShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddedCheck'])) {
            if (!empty($map['AddedCheck'])) {
                $model->addedCheck = [];
                $n                 = 0;
                foreach ($map['AddedCheck'] as $item) {
                    $model->addedCheck[$n++] = null !== $item ? addedCheck::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ConfigRequirementIds'])) {
            $model->configRequirementIdsShrink = $map['ConfigRequirementIds'];
        }
        if (isset($map['ConfigStandardIds'])) {
            $model->configStandardIdsShrink = $map['ConfigStandardIds'];
        }
        if (isset($map['Configure'])) {
            $model->configure = $map['Configure'];
        }
        if (isset($map['CycleDays'])) {
            if (!empty($map['CycleDays'])) {
                $model->cycleDays = $map['CycleDays'];
            }
        }
        if (isset($map['EnableAddCheck'])) {
            $model->enableAddCheck = $map['EnableAddCheck'];
        }
        if (isset($map['EnableAutoCheck'])) {
            $model->enableAutoCheck = $map['EnableAutoCheck'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RemovedCheck'])) {
            if (!empty($map['RemovedCheck'])) {
                $model->removedCheck = [];
                $n                   = 0;
                foreach ($map['RemovedCheck'] as $item) {
                    $model->removedCheck[$n++] = null !== $item ? removedCheck::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['StandardIds'])) {
            if (!empty($map['StandardIds'])) {
                $model->standardIds = $map['StandardIds'];
            }
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['SystemConfig'])) {
            $model->systemConfig = $map['SystemConfig'];
        }
        if (isset($map['Vendors'])) {
            if (!empty($map['Vendors'])) {
                $model->vendors = $map['Vendors'];
            }
        }

        return $model;
    }
}
