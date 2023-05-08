<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeWarningMachinesRequest extends Model
{
    /**
     * @description The type of the query condition. Valid values:
     *
     *   **containerId**: the ID of the container
     *   **uuid**: the UUID of the asset
     *
     * @example c7e3c5b420a7947c2933303144688****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The number of the page to return. Default value: **1**.
     *
     * @example containerId
     *
     * @var string
     */
    public $containerFieldName;

    /**
     * @description The language of the content within the request and response. Default value: **zh**. Valid values:
     *
     *   **zh**: Chinese
     *   **en**: English
     *
     * @example c8bb3ef0f5ccf45508f0fd1ffc200****
     *
     * @var string
     */
    public $containerFieldValue;

    /**
     * @description The name of the server.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @example 123
     *
     * @var int
     */
    public $groupId;

    /**
     * @description The number of **low-risk** items on the server.
     *
     * @example 1
     *
     * @var int
     */
    public $haveRisk;

    /**
     * @description The private IP address of the server.
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The source IP address of the request.
     *
     * @example oracle-win-001****
     *
     * @var string
     */
    public $machineName;

    /**
     * @description The number of **medium-risk** items on the server.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The UUID of the server on which the baseline check is performed.
     *
     * @example 196
     *
     * @var int
     */
    public $riskId;

    /**
     * @description The ID of the baseline check policy.
     *
     * @example 1.2.XX.XX
     *
     * @var string
     */
    public $sourceIp;

    /**
     * @description The page number of the returned page.
     *
     * @example 16
     *
     * @var int
     */
    public $strategyId;

    /**
     * @description Specifies whether risks were detected. Valid values:
     *
     *   **1**: yes
     *   **0**: no
     *
     * @example uuid
     *
     * @var string
     */
    public $targetType;

    /**
     * @description The ID of the server.
     *
     * @example 9888955c-0076-49da-bd9c-34f5492b****
     *
     * @var string
     */
    public $uuids;
    protected $_name = [
        'clusterId'           => 'ClusterId',
        'containerFieldName'  => 'ContainerFieldName',
        'containerFieldValue' => 'ContainerFieldValue',
        'currentPage'         => 'CurrentPage',
        'groupId'             => 'GroupId',
        'haveRisk'            => 'HaveRisk',
        'lang'                => 'Lang',
        'machineName'         => 'MachineName',
        'pageSize'            => 'PageSize',
        'riskId'              => 'RiskId',
        'sourceIp'            => 'SourceIp',
        'strategyId'          => 'StrategyId',
        'targetType'          => 'TargetType',
        'uuids'               => 'Uuids',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->haveRisk) {
            $res['HaveRisk'] = $this->haveRisk;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->machineName) {
            $res['MachineName'] = $this->machineName;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->riskId) {
            $res['RiskId'] = $this->riskId;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->strategyId) {
            $res['StrategyId'] = $this->strategyId;
        }
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }
        if (null !== $this->uuids) {
            $res['Uuids'] = $this->uuids;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeWarningMachinesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['HaveRisk'])) {
            $model->haveRisk = $map['HaveRisk'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['MachineName'])) {
            $model->machineName = $map['MachineName'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RiskId'])) {
            $model->riskId = $map['RiskId'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['StrategyId'])) {
            $model->strategyId = $map['StrategyId'];
        }
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }
        if (isset($map['Uuids'])) {
            $model->uuids = $map['Uuids'];
        }

        return $model;
    }
}
