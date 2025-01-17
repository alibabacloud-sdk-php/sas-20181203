<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeChartDataResponseBody\coordinateData;

use AlibabaCloud\Dara\Model;

class YAxisList extends Model
{
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $subType;
    /**
     * @var string
     */
    public $type;
    /**
     * @var string[]
     */
    public $value;
    protected $_name = [
        'name'    => 'Name',
        'subType' => 'SubType',
        'type'    => 'Type',
        'value'   => 'Value',
    ];

    public function validate()
    {
        if (\is_array($this->value)) {
            Model::validateArray($this->value);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->subType) {
            $res['SubType'] = $this->subType;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->value) {
            if (\is_array($this->value)) {
                $res['Value'] = [];
                $n1           = 0;
                foreach ($this->value as $item1) {
                    $res['Value'][$n1++] = $item1;
                }
            }
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['SubType'])) {
            $model->subType = $map['SubType'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['Value'])) {
            if (!empty($map['Value'])) {
                $model->value = [];
                $n1           = 0;
                foreach ($map['Value'] as $item1) {
                    $model->value[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
