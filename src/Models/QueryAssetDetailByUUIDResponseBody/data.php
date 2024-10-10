<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\QueryAssetDetailByUUIDResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 1766185894104***
     *
     * @var int
     */
    public $aliUid;

    /**
     * @example 3
     *
     * @var int
     */
    public $authVersion;

    /**
     * @example 26842
     *
     * @var string
     */
    public $bid;

    /**
     * @example true
     *
     * @var bool
     */
    public $bind;

    /**
     * @example online
     *
     * @var string
     */
    public $clientStatus;

    /**
     * @example c8ca91e0907d94efaba7fb0827eb9****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example 116.162.131.225
     *
     * @var string
     */
    public $eip;

    /**
     * @example 0
     *
     * @var int
     */
    public $flag;

    /**
     * @example 2022-10-16 18:17:16
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 2022-11-21 10:40:01
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example 12208928
     *
     * @var int
     */
    public $groupId;

    /**
     * @example 443496
     *
     * @var int
     */
    public $id;

    /**
     * @example 172.16.XX.XX
     *
     * @var string
     */
    public $internetIp;

    /**
     * @example 10.42.XX.XX
     *
     * @var string
     */
    public $intranetIp;

    /**
     * @example c8ca91e0907d94efaba7fb0827eb9
     *
     * @var string
     */
    public $machineInstanceId;

    /**
     * @example 172.16.XX.XX
     *
     * @var string
     */
    public $machineIp;

    /**
     * @example SLB
     *
     * @var string
     */
    public $machineIpType;

    /**
     * @example security
     *
     * @var string
     */
    public $machineName;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $machineRegion;

    /**
     * @example ecs
     *
     * @var string
     */
    public $machineType;

    /**
     * @example true
     *
     * @var bool
     */
    public $online;

    /**
     * @example linux
     *
     * @var string
     */
    public $os;

    /**
     * @var string
     */
    public $osName;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example Running
     *
     * @var string
     */
    public $status;

    /**
     * @example 6690a46c-0edb-4663-a641-3629d1a9****
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'aliUid'            => 'AliUid',
        'authVersion'       => 'AuthVersion',
        'bid'               => 'Bid',
        'bind'              => 'Bind',
        'clientStatus'      => 'ClientStatus',
        'clusterId'         => 'ClusterId',
        'eip'               => 'Eip',
        'flag'              => 'Flag',
        'gmtCreate'         => 'GmtCreate',
        'gmtModified'       => 'GmtModified',
        'groupId'           => 'GroupId',
        'id'                => 'Id',
        'internetIp'        => 'InternetIp',
        'intranetIp'        => 'IntranetIp',
        'machineInstanceId' => 'MachineInstanceId',
        'machineIp'         => 'MachineIp',
        'machineIpType'     => 'MachineIpType',
        'machineName'       => 'MachineName',
        'machineRegion'     => 'MachineRegion',
        'machineType'       => 'MachineType',
        'online'            => 'Online',
        'os'                => 'Os',
        'osName'            => 'OsName',
        'regionId'          => 'RegionId',
        'status'            => 'Status',
        'uuid'              => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }
        if (null !== $this->authVersion) {
            $res['AuthVersion'] = $this->authVersion;
        }
        if (null !== $this->bid) {
            $res['Bid'] = $this->bid;
        }
        if (null !== $this->bind) {
            $res['Bind'] = $this->bind;
        }
        if (null !== $this->clientStatus) {
            $res['ClientStatus'] = $this->clientStatus;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->eip) {
            $res['Eip'] = $this->eip;
        }
        if (null !== $this->flag) {
            $res['Flag'] = $this->flag;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->internetIp) {
            $res['InternetIp'] = $this->internetIp;
        }
        if (null !== $this->intranetIp) {
            $res['IntranetIp'] = $this->intranetIp;
        }
        if (null !== $this->machineInstanceId) {
            $res['MachineInstanceId'] = $this->machineInstanceId;
        }
        if (null !== $this->machineIp) {
            $res['MachineIp'] = $this->machineIp;
        }
        if (null !== $this->machineIpType) {
            $res['MachineIpType'] = $this->machineIpType;
        }
        if (null !== $this->machineName) {
            $res['MachineName'] = $this->machineName;
        }
        if (null !== $this->machineRegion) {
            $res['MachineRegion'] = $this->machineRegion;
        }
        if (null !== $this->machineType) {
            $res['MachineType'] = $this->machineType;
        }
        if (null !== $this->online) {
            $res['Online'] = $this->online;
        }
        if (null !== $this->os) {
            $res['Os'] = $this->os;
        }
        if (null !== $this->osName) {
            $res['OsName'] = $this->osName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
        if (isset($map['AuthVersion'])) {
            $model->authVersion = $map['AuthVersion'];
        }
        if (isset($map['Bid'])) {
            $model->bid = $map['Bid'];
        }
        if (isset($map['Bind'])) {
            $model->bind = $map['Bind'];
        }
        if (isset($map['ClientStatus'])) {
            $model->clientStatus = $map['ClientStatus'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Eip'])) {
            $model->eip = $map['Eip'];
        }
        if (isset($map['Flag'])) {
            $model->flag = $map['Flag'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['InternetIp'])) {
            $model->internetIp = $map['InternetIp'];
        }
        if (isset($map['IntranetIp'])) {
            $model->intranetIp = $map['IntranetIp'];
        }
        if (isset($map['MachineInstanceId'])) {
            $model->machineInstanceId = $map['MachineInstanceId'];
        }
        if (isset($map['MachineIp'])) {
            $model->machineIp = $map['MachineIp'];
        }
        if (isset($map['MachineIpType'])) {
            $model->machineIpType = $map['MachineIpType'];
        }
        if (isset($map['MachineName'])) {
            $model->machineName = $map['MachineName'];
        }
        if (isset($map['MachineRegion'])) {
            $model->machineRegion = $map['MachineRegion'];
        }
        if (isset($map['MachineType'])) {
            $model->machineType = $map['MachineType'];
        }
        if (isset($map['Online'])) {
            $model->online = $map['Online'];
        }
        if (isset($map['Os'])) {
            $model->os = $map['Os'];
        }
        if (isset($map['OsName'])) {
            $model->osName = $map['OsName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}