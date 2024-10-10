<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class SetImageBuildRiskStatusRequest extends Model
{
    /**
     * @example f382fccd88b94c5c8c864def681*****,ac32fccd88b94c5c8c864def681*****
     *
     * @var string
     */
    public $imageUuids;

    /**
     * @example risk.type
     *
     * @var string
     */
    public $riskKey;

    /**
     * @example 0
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'imageUuids' => 'ImageUuids',
        'riskKey'    => 'RiskKey',
        'status'     => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageUuids) {
            $res['ImageUuids'] = $this->imageUuids;
        }
        if (null !== $this->riskKey) {
            $res['RiskKey'] = $this->riskKey;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetImageBuildRiskStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageUuids'])) {
            $model->imageUuids = $map['ImageUuids'];
        }
        if (isset($map['RiskKey'])) {
            $model->riskKey = $map['RiskKey'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}