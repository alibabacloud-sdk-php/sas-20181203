<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCommonOverallConfigResponseBody\overallConfig;

class DescribeCommonOverallConfigResponseBody extends Model
{
    /**
     * @var overallConfig
     */
    public $overallConfig;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'overallConfig' => 'OverallConfig',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->overallConfig) {
            $this->overallConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->overallConfig) {
            $res['OverallConfig'] = null !== $this->overallConfig ? $this->overallConfig->toArray($noStream) : $this->overallConfig;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OverallConfig'])) {
            $model->overallConfig = overallConfig::fromMap($map['OverallConfig']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
