<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ModifyVulTargetRequest extends Model
{
    /**
     * @example {\"vulType\":\"sys\"}
     *
     * @var string
     */
    public $config;

    /**
     * @example [{\"target\": \"9cd5c684-7201-4de5-ad2c-cea89a5e****\", \"targetType\": \"uuid\", \"flag\": \"add\"}]
     *
     * @var string
     */
    public $target;
    protected $_name = [
        'config' => 'Config',
        'target' => 'Target',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }
        if (null !== $this->target) {
            $res['Target'] = $this->target;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyVulTargetRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }
        if (isset($map['Target'])) {
            $model->target = $map['Target'];
        }

        return $model;
    }
}
