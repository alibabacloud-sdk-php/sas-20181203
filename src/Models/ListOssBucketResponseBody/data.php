<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListOssBucketResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $bucketName;
    /**
     * @var string
     */
    public $message;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $storageClass;
    /**
     * @var bool
     */
    public $support;
    /**
     * @var string
     */
    public $supportConfig;
    protected $_name = [
        'bucketName'    => 'BucketName',
        'message'       => 'Message',
        'regionId'      => 'RegionId',
        'storageClass'  => 'StorageClass',
        'support'       => 'Support',
        'supportConfig' => 'SupportConfig',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bucketName) {
            $res['BucketName'] = $this->bucketName;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->storageClass) {
            $res['StorageClass'] = $this->storageClass;
        }

        if (null !== $this->support) {
            $res['Support'] = $this->support;
        }

        if (null !== $this->supportConfig) {
            $res['SupportConfig'] = $this->supportConfig;
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
        if (isset($map['BucketName'])) {
            $model->bucketName = $map['BucketName'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['StorageClass'])) {
            $model->storageClass = $map['StorageClass'];
        }

        if (isset($map['Support'])) {
            $model->support = $map['Support'];
        }

        if (isset($map['SupportConfig'])) {
            $model->supportConfig = $map['SupportConfig'];
        }

        return $model;
    }
}
