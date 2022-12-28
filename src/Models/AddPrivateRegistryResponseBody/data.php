<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\AddPrivateRegistryResponseBody;

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
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @example 273698***
     *
     * @var int
     */
    public $id;

    /**
     * @example 2
     *
     * @var int
     */
    public $netType;

    /**
     * @example ***********
     *
     * @var string
     */
    public $password;

    /**
     * @example 2
     *
     * @var int
     */
    public $protocolType;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example 114.55.**.**
     *
     * @var string
     */
    public $registryHostIp;

    /**
     * @example harbor
     *
     * @var string
     */
    public $registryType;

    /**
     * @example V2
     *
     * @var string
     */
    public $registryVersion;

    /**
     * @example 3c3c602c-fa1f-4bc0-992f-b4b2cac7****
     *
     * @var string
     */
    public $token;

    /**
     * @example 10
     *
     * @var int
     */
    public $transPerHour;

    /**
     * @example ******
     *
     * @var string
     */
    public $userName;

    /**
     * @example vpc-2vchkxmf2j9yjt3x2****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'aliUid'          => 'AliUid',
        'domainName'      => 'DomainName',
        'id'              => 'Id',
        'netType'         => 'NetType',
        'password'        => 'Password',
        'protocolType'    => 'ProtocolType',
        'regionId'        => 'RegionId',
        'registryHostIp'  => 'RegistryHostIp',
        'registryType'    => 'RegistryType',
        'registryVersion' => 'RegistryVersion',
        'token'           => 'Token',
        'transPerHour'    => 'TransPerHour',
        'userName'        => 'UserName',
        'vpcId'           => 'VpcId',
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
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->netType) {
            $res['NetType'] = $this->netType;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->protocolType) {
            $res['ProtocolType'] = $this->protocolType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->registryHostIp) {
            $res['RegistryHostIp'] = $this->registryHostIp;
        }
        if (null !== $this->registryType) {
            $res['RegistryType'] = $this->registryType;
        }
        if (null !== $this->registryVersion) {
            $res['RegistryVersion'] = $this->registryVersion;
        }
        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }
        if (null !== $this->transPerHour) {
            $res['TransPerHour'] = $this->transPerHour;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
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
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['NetType'])) {
            $model->netType = $map['NetType'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['ProtocolType'])) {
            $model->protocolType = $map['ProtocolType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RegistryHostIp'])) {
            $model->registryHostIp = $map['RegistryHostIp'];
        }
        if (isset($map['RegistryType'])) {
            $model->registryType = $map['RegistryType'];
        }
        if (isset($map['RegistryVersion'])) {
            $model->registryVersion = $map['RegistryVersion'];
        }
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }
        if (isset($map['TransPerHour'])) {
            $model->transPerHour = $map['TransPerHour'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
