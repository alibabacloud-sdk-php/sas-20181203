<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\SubmitOperationTaskRequest;

use AlibabaCloud\Tea\Model;

class repairTempParam extends Model
{
    /**
     * @description The name of the temporary repair parameter.
     *
     * @example IPPort
     *
     * @var string
     */
    public $name;

    /**
     * @description The value of the temporary repair parameter.
     *
     * @example 192.168.1XX.1XX
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'name' => 'Name',
        'value' => 'Value',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return repairTempParam
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
