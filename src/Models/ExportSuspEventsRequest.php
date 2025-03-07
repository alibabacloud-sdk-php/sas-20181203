<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class ExportSuspEventsRequest extends Model
{
    /**
     * @var string[]
     */
    public $assetsTypeList;
    /**
     * @var string
     */
    public $clusterId;
    /**
     * @var string
     */
    public $containerFieldName;
    /**
     * @var string
     */
    public $containerFieldValue;
    /**
     * @var string
     */
    public $currentPage;
    /**
     * @var string
     */
    public $dealed;
    /**
     * @var string
     */
    public $from;
    /**
     * @var int
     */
    public $groupId;
    /**
     * @var int
     */
    public $id;
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
    public $name;
    /**
     * @var string[]
     */
    public $operateErrorCodeList;
    /**
     * @var string
     */
    public $pageSize;
    /**
     * @var string
     */
    public $parentEventTypes;
    /**
     * @var string
     */
    public $remark;
    /**
     * @var string
     */
    public $sourceIp;
    /**
     * @var string
     */
    public $status;
    /**
     * @var string
     */
    public $targetType;
    /**
     * @var string
     */
    public $timeEnd;
    /**
     * @var string
     */
    public $timeStart;
    /**
     * @var string
     */
    public $uniqueInfo;
    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'assetsTypeList'       => 'AssetsTypeList',
        'clusterId'            => 'ClusterId',
        'containerFieldName'   => 'ContainerFieldName',
        'containerFieldValue'  => 'ContainerFieldValue',
        'currentPage'          => 'CurrentPage',
        'dealed'               => 'Dealed',
        'from'                 => 'From',
        'groupId'              => 'GroupId',
        'id'                   => 'Id',
        'lang'                 => 'Lang',
        'levels'               => 'Levels',
        'name'                 => 'Name',
        'operateErrorCodeList' => 'OperateErrorCodeList',
        'pageSize'             => 'PageSize',
        'parentEventTypes'     => 'ParentEventTypes',
        'remark'               => 'Remark',
        'sourceIp'             => 'SourceIp',
        'status'               => 'Status',
        'targetType'           => 'TargetType',
        'timeEnd'              => 'TimeEnd',
        'timeStart'            => 'TimeStart',
        'uniqueInfo'           => 'UniqueInfo',
        'uuid'                 => 'Uuid',
    ];

    public function validate()
    {
        if (\is_array($this->assetsTypeList)) {
            Model::validateArray($this->assetsTypeList);
        }
        if (\is_array($this->operateErrorCodeList)) {
            Model::validateArray($this->operateErrorCodeList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assetsTypeList) {
            if (\is_array($this->assetsTypeList)) {
                $res['AssetsTypeList'] = [];
                $n1                    = 0;
                foreach ($this->assetsTypeList as $item1) {
                    $res['AssetsTypeList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->containerFieldName) {
            $res['ContainerFieldName'] = $this->containerFieldName;
        }

        if (null !== $this->containerFieldValue) {
            $res['ContainerFieldValue'] = $this->containerFieldValue;
        }

        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->dealed) {
            $res['Dealed'] = $this->dealed;
        }

        if (null !== $this->from) {
            $res['From'] = $this->from;
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->levels) {
            $res['Levels'] = $this->levels;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->operateErrorCodeList) {
            if (\is_array($this->operateErrorCodeList)) {
                $res['OperateErrorCodeList'] = [];
                $n1                          = 0;
                foreach ($this->operateErrorCodeList as $item1) {
                    $res['OperateErrorCodeList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->parentEventTypes) {
            $res['ParentEventTypes'] = $this->parentEventTypes;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }

        if (null !== $this->timeEnd) {
            $res['TimeEnd'] = $this->timeEnd;
        }

        if (null !== $this->timeStart) {
            $res['TimeStart'] = $this->timeStart;
        }

        if (null !== $this->uniqueInfo) {
            $res['UniqueInfo'] = $this->uniqueInfo;
        }

        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
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
        if (isset($map['AssetsTypeList'])) {
            if (!empty($map['AssetsTypeList'])) {
                $model->assetsTypeList = [];
                $n1                    = 0;
                foreach ($map['AssetsTypeList'] as $item1) {
                    $model->assetsTypeList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['ContainerFieldName'])) {
            $model->containerFieldName = $map['ContainerFieldName'];
        }

        if (isset($map['ContainerFieldValue'])) {
            $model->containerFieldValue = $map['ContainerFieldValue'];
        }

        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['Dealed'])) {
            $model->dealed = $map['Dealed'];
        }

        if (isset($map['From'])) {
            $model->from = $map['From'];
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['Levels'])) {
            $model->levels = $map['Levels'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['OperateErrorCodeList'])) {
            if (!empty($map['OperateErrorCodeList'])) {
                $model->operateErrorCodeList = [];
                $n1                          = 0;
                foreach ($map['OperateErrorCodeList'] as $item1) {
                    $model->operateErrorCodeList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['ParentEventTypes'])) {
            $model->parentEventTypes = $map['ParentEventTypes'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }

        if (isset($map['TimeEnd'])) {
            $model->timeEnd = $map['TimeEnd'];
        }

        if (isset($map['TimeStart'])) {
            $model->timeStart = $map['TimeStart'];
        }

        if (isset($map['UniqueInfo'])) {
            $model->uniqueInfo = $map['UniqueInfo'];
        }

        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
