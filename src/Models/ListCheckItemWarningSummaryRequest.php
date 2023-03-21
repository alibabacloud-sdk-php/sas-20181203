<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ListCheckItemWarningSummaryRequest extends Model
{
    /**
     * @var string
     */
    public $checkItemFuzzy;

    /**
     * @var string
     */
    public $checkLevel;

    /**
     * @var string
     */
    public $checkType;

    /**
     * @var int
     */
    public $checkWarningStatus;

    /**
     * @var string
     */
    public $containerFieldName;

    /**
     * @var string
     */
    public $containerFieldValue;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var int
     */
    public $groupId;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $riskType;
    protected $_name = [
        'checkItemFuzzy'      => 'CheckItemFuzzy',
        'checkLevel'          => 'CheckLevel',
        'checkType'           => 'CheckType',
        'checkWarningStatus'  => 'CheckWarningStatus',
        'containerFieldName'  => 'ContainerFieldName',
        'containerFieldValue' => 'ContainerFieldValue',
        'currentPage'         => 'CurrentPage',
        'groupId'             => 'GroupId',
        'lang'                => 'Lang',
        'pageSize'            => 'PageSize',
        'riskType'            => 'RiskType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkItemFuzzy) {
            $res['CheckItemFuzzy'] = $this->checkItemFuzzy;
        }
        if (null !== $this->checkLevel) {
            $res['CheckLevel'] = $this->checkLevel;
        }
        if (null !== $this->checkType) {
            $res['CheckType'] = $this->checkType;
        }
        if (null !== $this->checkWarningStatus) {
            $res['CheckWarningStatus'] = $this->checkWarningStatus;
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
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->riskType) {
            $res['RiskType'] = $this->riskType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCheckItemWarningSummaryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckItemFuzzy'])) {
            $model->checkItemFuzzy = $map['CheckItemFuzzy'];
        }
        if (isset($map['CheckLevel'])) {
            $model->checkLevel = $map['CheckLevel'];
        }
        if (isset($map['CheckType'])) {
            $model->checkType = $map['CheckType'];
        }
        if (isset($map['CheckWarningStatus'])) {
            $model->checkWarningStatus = $map['CheckWarningStatus'];
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
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RiskType'])) {
            $model->riskType = $map['RiskType'];
        }

        return $model;
    }
}
