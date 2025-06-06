<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeCanAccessVpcSaleResponseBody extends Model
{
    /**
     * @description Indicates whether the purchase can be made according to VPC.
     *
     * @example true
     *
     * @var bool
     */
    public $canAccess;

    /**
     * @description The ID of this call request, a unique identifier generated by Alibaba Cloud for this request, which can be used for troubleshooting and problem localization.
     *
     * @example 7BC55C8F-226E-5AF5-9A2C-2EC43864****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'canAccess' => 'CanAccess',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->canAccess) {
            $res['CanAccess'] = $this->canAccess;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCanAccessVpcSaleResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CanAccess'])) {
            $model->canAccess = $map['CanAccess'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
