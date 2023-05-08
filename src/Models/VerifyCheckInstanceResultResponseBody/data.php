<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\VerifyCheckInstanceResultResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string[]
     */
    public $failInstances;

    /**
     * @example ActionTrialUnauthorized
     *
     * @var string
     */
    public $operateCode;
    protected $_name = [
        'failInstances' => 'FailInstances',
        'operateCode'   => 'OperateCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->failInstances) {
            $res['FailInstances'] = $this->failInstances;
        }
        if (null !== $this->operateCode) {
            $res['OperateCode'] = $this->operateCode;
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
        if (isset($map['FailInstances'])) {
            if (!empty($map['FailInstances'])) {
                $model->failInstances = $map['FailInstances'];
            }
        }
        if (isset($map['OperateCode'])) {
            $model->operateCode = $map['OperateCode'];
        }

        return $model;
    }
}
