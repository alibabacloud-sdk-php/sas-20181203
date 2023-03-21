<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeImageStatisticsResponseBody extends Model
{
    /**
     * @var int
     */
    public $instanceCount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $riskInstanceCount;
    protected $_name = [
        'instanceCount'     => 'InstanceCount',
        'requestId'         => 'RequestId',
        'riskInstanceCount' => 'RiskInstanceCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceCount) {
            $res['InstanceCount'] = $this->instanceCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->riskInstanceCount) {
            $res['RiskInstanceCount'] = $this->riskInstanceCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeImageStatisticsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceCount'])) {
            $model->instanceCount = $map['InstanceCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RiskInstanceCount'])) {
            $model->riskInstanceCount = $map['RiskInstanceCount'];
        }

        return $model;
    }
}
