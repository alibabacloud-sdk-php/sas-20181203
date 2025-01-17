<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class DescribeGroupedMaliciousFilesRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;
    /**
     * @var int
     */
    public $currentPage;
    /**
     * @var string
     */
    public $fuzzyMaliciousName;
    /**
     * @var string
     */
    public $imageDigest;
    /**
     * @var string
     */
    public $imageLayer;
    /**
     * @var string
     */
    public $imageTag;
    /**
     * @var string
     */
    public $lang;
    /**
     * @var string
     */
    public $levels;
    /**
     * @var string
     */
    public $maliciousMd5;
    /**
     * @var string
     */
    public $pageSize;
    /**
     * @var string
     */
    public $repoId;
    /**
     * @var string
     */
    public $repoInstanceId;
    /**
     * @var string
     */
    public $repoName;
    /**
     * @var string
     */
    public $repoNamespace;
    /**
     * @var string
     */
    public $repoRegionId;
    /**
     * @var string[]
     */
    public $scanRange;
    protected $_name = [
        'clusterId'          => 'ClusterId',
        'currentPage'        => 'CurrentPage',
        'fuzzyMaliciousName' => 'FuzzyMaliciousName',
        'imageDigest'        => 'ImageDigest',
        'imageLayer'         => 'ImageLayer',
        'imageTag'           => 'ImageTag',
        'lang'               => 'Lang',
        'levels'             => 'Levels',
        'maliciousMd5'       => 'MaliciousMd5',
        'pageSize'           => 'PageSize',
        'repoId'             => 'RepoId',
        'repoInstanceId'     => 'RepoInstanceId',
        'repoName'           => 'RepoName',
        'repoNamespace'      => 'RepoNamespace',
        'repoRegionId'       => 'RepoRegionId',
        'scanRange'          => 'ScanRange',
    ];

    public function validate()
    {
        if (\is_array($this->scanRange)) {
            Model::validateArray($this->scanRange);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->fuzzyMaliciousName) {
            $res['FuzzyMaliciousName'] = $this->fuzzyMaliciousName;
        }

        if (null !== $this->imageDigest) {
            $res['ImageDigest'] = $this->imageDigest;
        }

        if (null !== $this->imageLayer) {
            $res['ImageLayer'] = $this->imageLayer;
        }

        if (null !== $this->imageTag) {
            $res['ImageTag'] = $this->imageTag;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->levels) {
            $res['Levels'] = $this->levels;
        }

        if (null !== $this->maliciousMd5) {
            $res['MaliciousMd5'] = $this->maliciousMd5;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->repoId) {
            $res['RepoId'] = $this->repoId;
        }

        if (null !== $this->repoInstanceId) {
            $res['RepoInstanceId'] = $this->repoInstanceId;
        }

        if (null !== $this->repoName) {
            $res['RepoName'] = $this->repoName;
        }

        if (null !== $this->repoNamespace) {
            $res['RepoNamespace'] = $this->repoNamespace;
        }

        if (null !== $this->repoRegionId) {
            $res['RepoRegionId'] = $this->repoRegionId;
        }

        if (null !== $this->scanRange) {
            if (\is_array($this->scanRange)) {
                $res['ScanRange'] = [];
                $n1               = 0;
                foreach ($this->scanRange as $item1) {
                    $res['ScanRange'][$n1++] = $item1;
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
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['FuzzyMaliciousName'])) {
            $model->fuzzyMaliciousName = $map['FuzzyMaliciousName'];
        }

        if (isset($map['ImageDigest'])) {
            $model->imageDigest = $map['ImageDigest'];
        }

        if (isset($map['ImageLayer'])) {
            $model->imageLayer = $map['ImageLayer'];
        }

        if (isset($map['ImageTag'])) {
            $model->imageTag = $map['ImageTag'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['Levels'])) {
            $model->levels = $map['Levels'];
        }

        if (isset($map['MaliciousMd5'])) {
            $model->maliciousMd5 = $map['MaliciousMd5'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RepoId'])) {
            $model->repoId = $map['RepoId'];
        }

        if (isset($map['RepoInstanceId'])) {
            $model->repoInstanceId = $map['RepoInstanceId'];
        }

        if (isset($map['RepoName'])) {
            $model->repoName = $map['RepoName'];
        }

        if (isset($map['RepoNamespace'])) {
            $model->repoNamespace = $map['RepoNamespace'];
        }

        if (isset($map['RepoRegionId'])) {
            $model->repoRegionId = $map['RepoRegionId'];
        }

        if (isset($map['ScanRange'])) {
            if (!empty($map['ScanRange'])) {
                $model->scanRange = [];
                $n1               = 0;
                foreach ($map['ScanRange'] as $item1) {
                    $model->scanRange[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
