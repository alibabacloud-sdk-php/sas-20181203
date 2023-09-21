<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeAttachRecordsRequest extends Model
{
    /**
     * @description The application group ID.
     *
     * @example 64b8b994563c306b4fed****
     *
     * @var string
     */
    public $applicationId;

    /**
     * @description The UUIDs of ECS instances to be queried.
     *
     * @var string[]
     */
    public $ecsUUIDList;
    protected $_name = [
        'applicationId' => 'ApplicationId',
        'ecsUUIDList'   => 'EcsUUIDList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }
        if (null !== $this->ecsUUIDList) {
            $res['EcsUUIDList'] = $this->ecsUUIDList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAttachRecordsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }
        if (isset($map['EcsUUIDList'])) {
            if (!empty($map['EcsUUIDList'])) {
                $model->ecsUUIDList = $map['EcsUUIDList'];
            }
        }

        return $model;
    }
}
