<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeCriteriaRequest extends Model
{
    /**
     * @var string
     */
    public $machineTypes;

    /**
     * @var bool
     */
    public $supportAutoTag;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'machineTypes'   => 'MachineTypes',
        'supportAutoTag' => 'SupportAutoTag',
        'value'          => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->machineTypes) {
            $res['MachineTypes'] = $this->machineTypes;
        }
        if (null !== $this->supportAutoTag) {
            $res['SupportAutoTag'] = $this->supportAutoTag;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCriteriaRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MachineTypes'])) {
            $model->machineTypes = $map['MachineTypes'];
        }
        if (isset($map['SupportAutoTag'])) {
            $model->supportAutoTag = $map['SupportAutoTag'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
