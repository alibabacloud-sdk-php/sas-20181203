<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyServerlessAuthToMachineResponseBody\data;
use AlibabaCloud\Tea\Model;

class ModifyServerlessAuthToMachineResponseBody extends Model
{
    /**
     * @description Details of the returned data.
     *
     * @var data
     */
    public $data;

    /**
     * @description 本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。
     *
     * @example A47F77A1***8CD37050E
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'data' => 'Data',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = null !== $this->data ? $this->data->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyServerlessAuthToMachineResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            $model->data = data::fromMap($map['Data']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
