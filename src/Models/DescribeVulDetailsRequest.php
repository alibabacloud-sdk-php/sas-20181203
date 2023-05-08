<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeVulDetailsRequest extends Model
{
    /**
     * @example RHSA-2019:3197-Important: sudo security update
     *
     * @var string
     */
    public $aliasName;

    /**
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @example SCA:ACSV-2020-052801
     *
     * @var string
     */
    public $name;

    /**
     * @example sca
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'aliasName' => 'AliasName',
        'lang'      => 'Lang',
        'name'      => 'Name',
        'type'      => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliasName) {
            $res['AliasName'] = $this->aliasName;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVulDetailsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliasName'])) {
            $model->aliasName = $map['AliasName'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
