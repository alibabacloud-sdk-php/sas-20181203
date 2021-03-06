<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeExposedInstanceListResponseBody;

use AlibabaCloud\Tea\Model;

class exposedInstances extends Model
{
    /**
     * @var string
     */
    public $exposureIp;

    /**
     * @var int
     */
    public $totalVulCount;

    /**
     * @var string
     */
    public $internetIp;

    /**
     * @var int
     */
    public $nntfVulCount;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $exposureType;

    /**
     * @var string
     */
    public $intranetIp;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $exposureTypeId;

    /**
     * @var int
     */
    public $asapVulCount;

    /**
     * @var string
     */
    public $exposurePort;

    /**
     * @var string
     */
    public $uuid;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var int
     */
    public $groupId;

    /**
     * @var int
     */
    public $exploitHealthCount;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $exposureComponent;

    /**
     * @var int
     */
    public $laterVulCount;
    protected $_name = [
        'exposureIp'         => 'ExposureIp',
        'totalVulCount'      => 'TotalVulCount',
        'internetIp'         => 'InternetIp',
        'nntfVulCount'       => 'NntfVulCount',
        'instanceId'         => 'InstanceId',
        'exposureType'       => 'ExposureType',
        'intranetIp'         => 'IntranetIp',
        'regionId'           => 'RegionId',
        'exposureTypeId'     => 'ExposureTypeId',
        'asapVulCount'       => 'AsapVulCount',
        'exposurePort'       => 'ExposurePort',
        'uuid'               => 'Uuid',
        'groupName'          => 'GroupName',
        'groupId'            => 'GroupId',
        'exploitHealthCount' => 'ExploitHealthCount',
        'instanceName'       => 'InstanceName',
        'exposureComponent'  => 'ExposureComponent',
        'laterVulCount'      => 'LaterVulCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->exposureIp) {
            $res['ExposureIp'] = $this->exposureIp;
        }
        if (null !== $this->totalVulCount) {
            $res['TotalVulCount'] = $this->totalVulCount;
        }
        if (null !== $this->internetIp) {
            $res['InternetIp'] = $this->internetIp;
        }
        if (null !== $this->nntfVulCount) {
            $res['NntfVulCount'] = $this->nntfVulCount;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->exposureType) {
            $res['ExposureType'] = $this->exposureType;
        }
        if (null !== $this->intranetIp) {
            $res['IntranetIp'] = $this->intranetIp;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->exposureTypeId) {
            $res['ExposureTypeId'] = $this->exposureTypeId;
        }
        if (null !== $this->asapVulCount) {
            $res['AsapVulCount'] = $this->asapVulCount;
        }
        if (null !== $this->exposurePort) {
            $res['ExposurePort'] = $this->exposurePort;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->exploitHealthCount) {
            $res['ExploitHealthCount'] = $this->exploitHealthCount;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->exposureComponent) {
            $res['ExposureComponent'] = $this->exposureComponent;
        }
        if (null !== $this->laterVulCount) {
            $res['LaterVulCount'] = $this->laterVulCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return exposedInstances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExposureIp'])) {
            $model->exposureIp = $map['ExposureIp'];
        }
        if (isset($map['TotalVulCount'])) {
            $model->totalVulCount = $map['TotalVulCount'];
        }
        if (isset($map['InternetIp'])) {
            $model->internetIp = $map['InternetIp'];
        }
        if (isset($map['NntfVulCount'])) {
            $model->nntfVulCount = $map['NntfVulCount'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ExposureType'])) {
            $model->exposureType = $map['ExposureType'];
        }
        if (isset($map['IntranetIp'])) {
            $model->intranetIp = $map['IntranetIp'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ExposureTypeId'])) {
            $model->exposureTypeId = $map['ExposureTypeId'];
        }
        if (isset($map['AsapVulCount'])) {
            $model->asapVulCount = $map['AsapVulCount'];
        }
        if (isset($map['ExposurePort'])) {
            $model->exposurePort = $map['ExposurePort'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['ExploitHealthCount'])) {
            $model->exploitHealthCount = $map['ExploitHealthCount'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['ExposureComponent'])) {
            $model->exposureComponent = $map['ExposureComponent'];
        }
        if (isset($map['LaterVulCount'])) {
            $model->laterVulCount = $map['LaterVulCount'];
        }

        return $model;
    }
}
