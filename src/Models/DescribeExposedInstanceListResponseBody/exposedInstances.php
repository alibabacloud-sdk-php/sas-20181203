<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeExposedInstanceListResponseBody;

use AlibabaCloud\Tea\Model;

class exposedInstances extends Model
{
    /**
     * @description An array that consists of the details about the exposed asset.
     *
     * @example 0
     *
     * @var int
     */
    public $asapVulCount;

    /**
     * @example 0
     *
     * @var int
     */
    public $exploitHealthCount;

    /**
     * @example openssl,openssh
     *
     * @var string
     */
    public $exposureComponent;

    /**
     * @description The number of entries returned on the current page.
     *
     * @example 116.12.XX.XX
     *
     * @var string
     */
    public $exposureIp;

    /**
     * @description Queries the information about the servers that are exposed on the Internet.
     *
     * @example 22
     *
     * @var string
     */
    public $exposurePort;

    /**
     * @description Specifies whether the server has vulnerabilities. Valid values:
     *
     *   **true**: The server has vulnerabilities.
     *   **false**: The server does not have vulnerabilities.
     *
     * @example INTERNET_IP
     *
     * @var string
     */
    public $exposureType;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example i-ew11313a****
     *
     * @var string
     */
    public $exposureTypeId;

    /**
     * @example 9469268
     *
     * @var int
     */
    public $groupId;

    /**
     * @example testGroup
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The ID of the server.
     *
     * @example i-bp1g6wxdwps7s9dz****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example abc_centos7.2_005
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The pagination information.
     *
     * @example 116.12.XX.XX
     *
     * @var string
     */
    public $internetIp;

    /**
     * @description The number of entries returned per page.
     *
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $intranetIp;

    /**
     * @example 0
     *
     * @var int
     */
    public $laterVulCount;

    /**
     * @description The private IP address of the server.
     *
     * @example 0
     *
     * @var int
     */
    public $nntfVulCount;

    /**
     * @description The ID of the server.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the instance to which the resource belongs. The valid values of this parameter vary based on the ExposureType parameter.
     *
     *   If the value of the ExposureType parameter is **INTERNET_IP**, this parameter is empty.
     *   If the value of the ExposureType parameter is **SLB**, the value of this parameter is the ID of the SLB instance.
     *   If the value of the ExposureType parameter is **EIP**, the value of this parameter is the ID of the EIP.
     *   If the value of the ExposureType parameter is **DNAT**, the value of this parameter is the ID of the NAT gateway.
     *
     * @example 0
     *
     * @var int
     */
    public $totalVulCount;

    /**
     * @description DescribeExposedInstanceList
     *
     * @example dd803d9e-a337-4add-9c5b-7d503e08****
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'asapVulCount'       => 'AsapVulCount',
        'exploitHealthCount' => 'ExploitHealthCount',
        'exposureComponent'  => 'ExposureComponent',
        'exposureIp'         => 'ExposureIp',
        'exposurePort'       => 'ExposurePort',
        'exposureType'       => 'ExposureType',
        'exposureTypeId'     => 'ExposureTypeId',
        'groupId'            => 'GroupId',
        'groupName'          => 'GroupName',
        'instanceId'         => 'InstanceId',
        'instanceName'       => 'InstanceName',
        'internetIp'         => 'InternetIp',
        'intranetIp'         => 'IntranetIp',
        'laterVulCount'      => 'LaterVulCount',
        'nntfVulCount'       => 'NntfVulCount',
        'regionId'           => 'RegionId',
        'totalVulCount'      => 'TotalVulCount',
        'uuid'               => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->asapVulCount) {
            $res['AsapVulCount'] = $this->asapVulCount;
        }
        if (null !== $this->exploitHealthCount) {
            $res['ExploitHealthCount'] = $this->exploitHealthCount;
        }
        if (null !== $this->exposureComponent) {
            $res['ExposureComponent'] = $this->exposureComponent;
        }
        if (null !== $this->exposureIp) {
            $res['ExposureIp'] = $this->exposureIp;
        }
        if (null !== $this->exposurePort) {
            $res['ExposurePort'] = $this->exposurePort;
        }
        if (null !== $this->exposureType) {
            $res['ExposureType'] = $this->exposureType;
        }
        if (null !== $this->exposureTypeId) {
            $res['ExposureTypeId'] = $this->exposureTypeId;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->internetIp) {
            $res['InternetIp'] = $this->internetIp;
        }
        if (null !== $this->intranetIp) {
            $res['IntranetIp'] = $this->intranetIp;
        }
        if (null !== $this->laterVulCount) {
            $res['LaterVulCount'] = $this->laterVulCount;
        }
        if (null !== $this->nntfVulCount) {
            $res['NntfVulCount'] = $this->nntfVulCount;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->totalVulCount) {
            $res['TotalVulCount'] = $this->totalVulCount;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
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
        if (isset($map['AsapVulCount'])) {
            $model->asapVulCount = $map['AsapVulCount'];
        }
        if (isset($map['ExploitHealthCount'])) {
            $model->exploitHealthCount = $map['ExploitHealthCount'];
        }
        if (isset($map['ExposureComponent'])) {
            $model->exposureComponent = $map['ExposureComponent'];
        }
        if (isset($map['ExposureIp'])) {
            $model->exposureIp = $map['ExposureIp'];
        }
        if (isset($map['ExposurePort'])) {
            $model->exposurePort = $map['ExposurePort'];
        }
        if (isset($map['ExposureType'])) {
            $model->exposureType = $map['ExposureType'];
        }
        if (isset($map['ExposureTypeId'])) {
            $model->exposureTypeId = $map['ExposureTypeId'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InternetIp'])) {
            $model->internetIp = $map['InternetIp'];
        }
        if (isset($map['IntranetIp'])) {
            $model->intranetIp = $map['IntranetIp'];
        }
        if (isset($map['LaterVulCount'])) {
            $model->laterVulCount = $map['LaterVulCount'];
        }
        if (isset($map['NntfVulCount'])) {
            $model->nntfVulCount = $map['NntfVulCount'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['TotalVulCount'])) {
            $model->totalVulCount = $map['TotalVulCount'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
