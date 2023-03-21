<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\GetInterceptionRuleDetailResponseBody\interceptionRuleDetail;
use AlibabaCloud\Tea\Model;

class GetInterceptionRuleDetailResponseBody extends Model
{
    /**
     * @var interceptionRuleDetail
     */
    public $interceptionRuleDetail;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'interceptionRuleDetail' => 'InterceptionRuleDetail',
        'requestId'              => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->interceptionRuleDetail) {
            $res['InterceptionRuleDetail'] = null !== $this->interceptionRuleDetail ? $this->interceptionRuleDetail->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetInterceptionRuleDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InterceptionRuleDetail'])) {
            $model->interceptionRuleDetail = interceptionRuleDetail::fromMap($map['InterceptionRuleDetail']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
