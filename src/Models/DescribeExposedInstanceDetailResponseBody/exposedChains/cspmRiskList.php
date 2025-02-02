<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeExposedInstanceDetailResponseBody\exposedChains;

use AlibabaCloud\Dara\Model;

class cspmRiskList extends Model
{
    /**
     * @var int
     */
    public $assetSubType;
    /**
     * @var string
     */
    public $assetSubTypeName;
    /**
     * @var int
     */
    public $assetType;
    /**
     * @var string
     */
    public $assetTypeName;
    /**
     * @var string
     */
    public $checkName;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $riskLevel;
    /**
     * @var int
     */
    public $vendor;
    protected $_name = [
        'assetSubType'     => 'AssetSubType',
        'assetSubTypeName' => 'AssetSubTypeName',
        'assetType'        => 'AssetType',
        'assetTypeName'    => 'AssetTypeName',
        'checkName'        => 'CheckName',
        'instanceId'       => 'InstanceId',
        'regionId'         => 'RegionId',
        'riskLevel'        => 'RiskLevel',
        'vendor'           => 'Vendor',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assetSubType) {
            $res['AssetSubType'] = $this->assetSubType;
        }

        if (null !== $this->assetSubTypeName) {
            $res['AssetSubTypeName'] = $this->assetSubTypeName;
        }

        if (null !== $this->assetType) {
            $res['AssetType'] = $this->assetType;
        }

        if (null !== $this->assetTypeName) {
            $res['AssetTypeName'] = $this->assetTypeName;
        }

        if (null !== $this->checkName) {
            $res['CheckName'] = $this->checkName;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }

        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
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
        if (isset($map['AssetSubType'])) {
            $model->assetSubType = $map['AssetSubType'];
        }

        if (isset($map['AssetSubTypeName'])) {
            $model->assetSubTypeName = $map['AssetSubTypeName'];
        }

        if (isset($map['AssetType'])) {
            $model->assetType = $map['AssetType'];
        }

        if (isset($map['AssetTypeName'])) {
            $model->assetTypeName = $map['AssetTypeName'];
        }

        if (isset($map['CheckName'])) {
            $model->checkName = $map['CheckName'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }

        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }

        return $model;
    }
}
