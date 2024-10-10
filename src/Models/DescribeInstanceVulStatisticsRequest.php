<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeInstanceVulStatisticsRequest extends Model
{
    /**
     * @example sca,app
     *
     * @var string
     */
    public $types;

    /**
     * @description This parameter is required.
     *
     * @example 5b268326-273e-44fc-a0e3-9482435c****
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'types' => 'Types',
        'uuid'  => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->types) {
            $res['Types'] = $this->types;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstanceVulStatisticsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Types'])) {
            $model->types = $map['Types'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}