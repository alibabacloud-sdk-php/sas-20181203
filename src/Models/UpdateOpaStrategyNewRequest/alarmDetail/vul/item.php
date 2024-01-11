<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\UpdateOpaStrategyNewRequest\alarmDetail\vul;

use AlibabaCloud\Tea\Model;

class item extends Model
{
    /**
     * @description The vulnerability ID.
     *
     * >  You can call the [DescribeVulListPage](~~471928~~) operation to query the vulnerability ID.
     * @example CVE-2023-36034
     *
     * @var string
     */
    public $id;

    /**
     * @description The vulnerability name.
     *
     * >  You can call the [DescribeVulListPage](~~471928~~) operation to query the vulnerability name.
     * @example oval:com.redhat.rhsa:def:20227002
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'id'   => 'Id',
        'name' => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return item
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
