<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\AddCheckInstanceResultWhiteListRequest;

use AlibabaCloud\Tea\Model;

class instanceList extends Model
{
    /**
     * @description The instance ID of the asset.
     *
     * >  You can call the [ListCheckInstanceResult](~~ListCheckInstanceResult~~) operation to query the instance IDs of assets.
     * @example i-wz9fdluqx20mp2x7****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The region ID of the asset.
     *
     * >  You can call the [ListCheckInstanceResult](~~ListCheckInstanceResult~~) operation to query the region ID of the asset.
     * @example cn-hongkong
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'regionId'   => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
