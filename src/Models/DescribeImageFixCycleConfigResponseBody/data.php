<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageFixCycleConfigResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 7
     *
     * @var int
     */
    public $imageFixCycle;

    /**
     * @example on
     *
     * @var string
     */
    public $imageFixSwitch;

    /**
     * @example {\"type\":\"repo\",\"target\":[\"qa-dac/yyuan9\",\"cdp-uat/zentao\",\"cafdms-qa/xxl-job-admin\",\"cafdms-qa/utils/jdk\",\"cafmfbi/ui\",\"cdp-uat/tradingdesk-webapp\"]}
     *
     * @var string
     */
    public $imageFixTarget;

    /**
     * @example 30
     *
     * @var int
     */
    public $imageTimeRange;
    protected $_name = [
        'imageFixCycle'  => 'ImageFixCycle',
        'imageFixSwitch' => 'ImageFixSwitch',
        'imageFixTarget' => 'ImageFixTarget',
        'imageTimeRange' => 'ImageTimeRange',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageFixCycle) {
            $res['ImageFixCycle'] = $this->imageFixCycle;
        }
        if (null !== $this->imageFixSwitch) {
            $res['ImageFixSwitch'] = $this->imageFixSwitch;
        }
        if (null !== $this->imageFixTarget) {
            $res['ImageFixTarget'] = $this->imageFixTarget;
        }
        if (null !== $this->imageTimeRange) {
            $res['ImageTimeRange'] = $this->imageTimeRange;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageFixCycle'])) {
            $model->imageFixCycle = $map['ImageFixCycle'];
        }
        if (isset($map['ImageFixSwitch'])) {
            $model->imageFixSwitch = $map['ImageFixSwitch'];
        }
        if (isset($map['ImageFixTarget'])) {
            $model->imageFixTarget = $map['ImageFixTarget'];
        }
        if (isset($map['ImageTimeRange'])) {
            $model->imageTimeRange = $map['ImageTimeRange'];
        }

        return $model;
    }
}
