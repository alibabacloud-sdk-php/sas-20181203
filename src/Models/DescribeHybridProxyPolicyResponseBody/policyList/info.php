<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeHybridProxyPolicyResponseBody\policyList;

use AlibabaCloud\Tea\Model;

class info extends Model
{
    /**
     * @example 10
     *
     * @var string
     */
    public $config;

    /**
     * @example test
     *
     * @var string
     */
    public $fileName;

    /**
     * @example file
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'config'   => 'Config',
        'fileName' => 'FileName',
        'type'     => 'Type',
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
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return info
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}