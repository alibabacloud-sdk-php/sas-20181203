<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAttestorsResponseBody;

use AlibabaCloud\Tea\Model;

class attestors extends Model
{
    /**
     * @description The ID of the KMS key.
     *
     * @example 2e81355b-f8e7-4090-8082-a8f8124a****
     *
     * @var string
     */
    public $keyId;

    /**
     * @description The region ID of the KMS key.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $keyRegionId;

    /**
     * @description The version ID of the Key Management Service (KMS) key.
     *
     * @example 8d7c9c91-57ce-4cf4-a959-1e700e13****
     *
     * @var string
     */
    public $keyVersionId;

    /**
     * @description The name of the witness.
     *
     * @example attestor-123
     *
     * @var string
     */
    public $name;

    /**
     * @description The description.
     *
     * @example attestor
     *
     * @var string
     */
    public $remark;
    protected $_name = [
        'keyId'        => 'KeyId',
        'keyRegionId'  => 'KeyRegionId',
        'keyVersionId' => 'KeyVersionId',
        'name'         => 'Name',
        'remark'       => 'Remark',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->keyId) {
            $res['KeyId'] = $this->keyId;
        }
        if (null !== $this->keyRegionId) {
            $res['KeyRegionId'] = $this->keyRegionId;
        }
        if (null !== $this->keyVersionId) {
            $res['KeyVersionId'] = $this->keyVersionId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return attestors
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KeyId'])) {
            $model->keyId = $map['KeyId'];
        }
        if (isset($map['KeyRegionId'])) {
            $model->keyRegionId = $map['KeyRegionId'];
        }
        if (isset($map['KeyVersionId'])) {
            $model->keyVersionId = $map['KeyVersionId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        return $model;
    }
}