<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class GetHoneypotEventTrendRequest extends Model
{
    /**
     * @example 1687831329169
     *
     * @var int
     */
    public $endTimeStamp;

    /**
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @var string[]
     */
    public $riskLevelList;

    /**
     * @example 10.91.254.***
     *
     * @var string
     */
    public $srcIp;

    /**
     * @example 1683516557757
     *
     * @var int
     */
    public $startTimeStamp;
    protected $_name = [
        'endTimeStamp'   => 'EndTimeStamp',
        'lang'           => 'Lang',
        'riskLevelList'  => 'RiskLevelList',
        'srcIp'          => 'SrcIp',
        'startTimeStamp' => 'StartTimeStamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTimeStamp) {
            $res['EndTimeStamp'] = $this->endTimeStamp;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->riskLevelList) {
            $res['RiskLevelList'] = $this->riskLevelList;
        }
        if (null !== $this->srcIp) {
            $res['SrcIp'] = $this->srcIp;
        }
        if (null !== $this->startTimeStamp) {
            $res['StartTimeStamp'] = $this->startTimeStamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetHoneypotEventTrendRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTimeStamp'])) {
            $model->endTimeStamp = $map['EndTimeStamp'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['RiskLevelList'])) {
            if (!empty($map['RiskLevelList'])) {
                $model->riskLevelList = $map['RiskLevelList'];
            }
        }
        if (isset($map['SrcIp'])) {
            $model->srcIp = $map['SrcIp'];
        }
        if (isset($map['StartTimeStamp'])) {
            $model->startTimeStamp = $map['StartTimeStamp'];
        }

        return $model;
    }
}