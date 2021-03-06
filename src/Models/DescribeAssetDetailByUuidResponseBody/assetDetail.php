<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAssetDetailByUuidResponseBody;

use AlibabaCloud\Tea\Model;

class assetDetail extends Model
{
    /**
     * @var string
     */
    public $cpuInfo;

    /**
     * @var string
     */
    public $internetIp;

    /**
     * @var string
     */
    public $osDetail;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $kernel;

    /**
     * @var bool
     */
    public $bind;

    /**
     * @var string
     */
    public $osName;

    /**
     * @var string
     */
    public $tag;

    /**
     * @var string
     */
    public $clientStatus;

    /**
     * @var int
     */
    public $mem;

    /**
     * @var string
     */
    public $vpcInstanceId;

    /**
     * @var int
     */
    public $authVersion;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $groupTrace;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var string
     */
    public $hostName;

    /**
     * @var string
     */
    public $os;

    /**
     * @var int
     */
    public $authModifyTime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $intranetIp;

    /**
     * @var string
     */
    public $assetType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $sysInfo;

    /**
     * @var string
     */
    public $uuid;

    /**
     * @var int
     */
    public $cpu;

    /**
     * @var string
     */
    public $regionName;

    /**
     * @var string[]
     */
    public $ipList;

    /**
     * @var string[]
     */
    public $macList;

    /**
     * @var string[]
     */
    public $diskInfoList;
    protected $_name = [
        'cpuInfo'        => 'CpuInfo',
        'internetIp'     => 'InternetIp',
        'osDetail'       => 'OsDetail',
        'createTime'     => 'CreateTime',
        'kernel'         => 'Kernel',
        'bind'           => 'Bind',
        'osName'         => 'OsName',
        'tag'            => 'Tag',
        'clientStatus'   => 'ClientStatus',
        'mem'            => 'Mem',
        'vpcInstanceId'  => 'VpcInstanceId',
        'authVersion'    => 'AuthVersion',
        'instanceName'   => 'InstanceName',
        'region'         => 'Region',
        'groupTrace'     => 'GroupTrace',
        'ip'             => 'Ip',
        'hostName'       => 'HostName',
        'os'             => 'Os',
        'authModifyTime' => 'AuthModifyTime',
        'instanceId'     => 'InstanceId',
        'intranetIp'     => 'IntranetIp',
        'assetType'      => 'AssetType',
        'regionId'       => 'RegionId',
        'sysInfo'        => 'SysInfo',
        'uuid'           => 'Uuid',
        'cpu'            => 'Cpu',
        'regionName'     => 'RegionName',
        'ipList'         => 'IpList',
        'macList'        => 'MacList',
        'diskInfoList'   => 'DiskInfoList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cpuInfo) {
            $res['CpuInfo'] = $this->cpuInfo;
        }
        if (null !== $this->internetIp) {
            $res['InternetIp'] = $this->internetIp;
        }
        if (null !== $this->osDetail) {
            $res['OsDetail'] = $this->osDetail;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->kernel) {
            $res['Kernel'] = $this->kernel;
        }
        if (null !== $this->bind) {
            $res['Bind'] = $this->bind;
        }
        if (null !== $this->osName) {
            $res['OsName'] = $this->osName;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }
        if (null !== $this->clientStatus) {
            $res['ClientStatus'] = $this->clientStatus;
        }
        if (null !== $this->mem) {
            $res['Mem'] = $this->mem;
        }
        if (null !== $this->vpcInstanceId) {
            $res['VpcInstanceId'] = $this->vpcInstanceId;
        }
        if (null !== $this->authVersion) {
            $res['AuthVersion'] = $this->authVersion;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->groupTrace) {
            $res['GroupTrace'] = $this->groupTrace;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->os) {
            $res['Os'] = $this->os;
        }
        if (null !== $this->authModifyTime) {
            $res['AuthModifyTime'] = $this->authModifyTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->intranetIp) {
            $res['IntranetIp'] = $this->intranetIp;
        }
        if (null !== $this->assetType) {
            $res['AssetType'] = $this->assetType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->sysInfo) {
            $res['SysInfo'] = $this->sysInfo;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->regionName) {
            $res['RegionName'] = $this->regionName;
        }
        if (null !== $this->ipList) {
            $res['IpList'] = $this->ipList;
        }
        if (null !== $this->macList) {
            $res['MacList'] = $this->macList;
        }
        if (null !== $this->diskInfoList) {
            $res['DiskInfoList'] = $this->diskInfoList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return assetDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CpuInfo'])) {
            $model->cpuInfo = $map['CpuInfo'];
        }
        if (isset($map['InternetIp'])) {
            $model->internetIp = $map['InternetIp'];
        }
        if (isset($map['OsDetail'])) {
            $model->osDetail = $map['OsDetail'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Kernel'])) {
            $model->kernel = $map['Kernel'];
        }
        if (isset($map['Bind'])) {
            $model->bind = $map['Bind'];
        }
        if (isset($map['OsName'])) {
            $model->osName = $map['OsName'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }
        if (isset($map['ClientStatus'])) {
            $model->clientStatus = $map['ClientStatus'];
        }
        if (isset($map['Mem'])) {
            $model->mem = $map['Mem'];
        }
        if (isset($map['VpcInstanceId'])) {
            $model->vpcInstanceId = $map['VpcInstanceId'];
        }
        if (isset($map['AuthVersion'])) {
            $model->authVersion = $map['AuthVersion'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['GroupTrace'])) {
            $model->groupTrace = $map['GroupTrace'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['Os'])) {
            $model->os = $map['Os'];
        }
        if (isset($map['AuthModifyTime'])) {
            $model->authModifyTime = $map['AuthModifyTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['IntranetIp'])) {
            $model->intranetIp = $map['IntranetIp'];
        }
        if (isset($map['AssetType'])) {
            $model->assetType = $map['AssetType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SysInfo'])) {
            $model->sysInfo = $map['SysInfo'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['RegionName'])) {
            $model->regionName = $map['RegionName'];
        }
        if (isset($map['IpList'])) {
            if (!empty($map['IpList'])) {
                $model->ipList = $map['IpList'];
            }
        }
        if (isset($map['MacList'])) {
            if (!empty($map['MacList'])) {
                $model->macList = $map['MacList'];
            }
        }
        if (isset($map['DiskInfoList'])) {
            if (!empty($map['DiskInfoList'])) {
                $model->diskInfoList = $map['DiskInfoList'];
            }
        }

        return $model;
    }
}
