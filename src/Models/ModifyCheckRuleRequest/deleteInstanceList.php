<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ModifyCheckRuleRequest;

use AlibabaCloud\Tea\Model;

class deleteInstanceList extends Model
{
    /**
     * @description The instance ID of the asset.
     *
     * @example i-8vb0e8qdaj0yyxjo****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The region ID of the asset.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'regionId' => 'RegionId',
    ];

    public function validate() {}

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
     * @return deleteInstanceList
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
