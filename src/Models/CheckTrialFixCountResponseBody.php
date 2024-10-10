<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class CheckTrialFixCountResponseBody extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $canFix;

    /**
     * @example 10
     *
     * @var int
     */
    public $expendCount;

    /**
     * @example 0
     *
     * @var int
     */
    public $remainCount;

    /**
     * @example 10
     *
     * @var int
     */
    public $repairedCount;

    /**
     * @example 24A20733-10A0-4AF6-BE6B-E3322413BB68
     *
     * @var string
     */
    public $requestId;

    /**
     * @example true
     *
     * @var bool
     */
    public $isTrial;
    protected $_name = [
        'canFix'        => 'CanFix',
        'expendCount'   => 'ExpendCount',
        'remainCount'   => 'RemainCount',
        'repairedCount' => 'RepairedCount',
        'requestId'     => 'RequestId',
        'isTrial'       => 'isTrial',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->canFix) {
            $res['CanFix'] = $this->canFix;
        }
        if (null !== $this->expendCount) {
            $res['ExpendCount'] = $this->expendCount;
        }
        if (null !== $this->remainCount) {
            $res['RemainCount'] = $this->remainCount;
        }
        if (null !== $this->repairedCount) {
            $res['RepairedCount'] = $this->repairedCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->isTrial) {
            $res['isTrial'] = $this->isTrial;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckTrialFixCountResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CanFix'])) {
            $model->canFix = $map['CanFix'];
        }
        if (isset($map['ExpendCount'])) {
            $model->expendCount = $map['ExpendCount'];
        }
        if (isset($map['RemainCount'])) {
            $model->remainCount = $map['RemainCount'];
        }
        if (isset($map['RepairedCount'])) {
            $model->repairedCount = $map['RepairedCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['isTrial'])) {
            $model->isTrial = $map['isTrial'];
        }

        return $model;
    }
}