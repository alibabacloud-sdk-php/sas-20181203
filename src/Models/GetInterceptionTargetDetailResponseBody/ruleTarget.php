<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetInterceptionTargetDetailResponseBody;

use AlibabaCloud\Tea\Model;

class ruleTarget extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $clusterName;

    /**
     * @var string[]
     */
    public $imageList;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string[]
     */
    public $tagList;

    /**
     * @var int
     */
    public $targetId;

    /**
     * @var string
     */
    public $targetName;

    /**
     * @var string
     */
    public $targetType;
    protected $_name = [
        'appName'     => 'AppName',
        'clusterId'   => 'ClusterId',
        'clusterName' => 'ClusterName',
        'imageList'   => 'ImageList',
        'namespace'   => 'Namespace',
        'tagList'     => 'TagList',
        'targetId'    => 'TargetId',
        'targetName'  => 'TargetName',
        'targetType'  => 'TargetType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->imageList) {
            $res['ImageList'] = $this->imageList;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->tagList) {
            $res['TagList'] = $this->tagList;
        }
        if (null !== $this->targetId) {
            $res['TargetId'] = $this->targetId;
        }
        if (null !== $this->targetName) {
            $res['TargetName'] = $this->targetName;
        }
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ruleTarget
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['ImageList'])) {
            if (!empty($map['ImageList'])) {
                $model->imageList = $map['ImageList'];
            }
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['TagList'])) {
            if (!empty($map['TagList'])) {
                $model->tagList = $map['TagList'];
            }
        }
        if (isset($map['TargetId'])) {
            $model->targetId = $map['TargetId'];
        }
        if (isset($map['TargetName'])) {
            $model->targetName = $map['TargetName'];
        }
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }

        return $model;
    }
}