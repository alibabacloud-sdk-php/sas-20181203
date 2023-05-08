<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeExposedCheckWarningResponseBody;

use AlibabaCloud\Tea\Model;

class warningList extends Model
{
    /**
     * @example 107
     *
     * @var int
     */
    public $riskId;

    /**
     * @example Weak password-Redis DB login weak password baseline
     *
     * @var string
     */
    public $riskName;

    /**
     * @example Redis DB login weak password baseline
     *
     * @var string
     */
    public $subTypeAlias;

    /**
     * @example Weak password
     *
     * @var string
     */
    public $typeAlias;

    /**
     * @example 1d35b031-ee4e-4e53-8b53-465ab712****
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'riskId'       => 'RiskId',
        'riskName'     => 'RiskName',
        'subTypeAlias' => 'SubTypeAlias',
        'typeAlias'    => 'TypeAlias',
        'uuid'         => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->riskId) {
            $res['RiskId'] = $this->riskId;
        }
        if (null !== $this->riskName) {
            $res['RiskName'] = $this->riskName;
        }
        if (null !== $this->subTypeAlias) {
            $res['SubTypeAlias'] = $this->subTypeAlias;
        }
        if (null !== $this->typeAlias) {
            $res['TypeAlias'] = $this->typeAlias;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return warningList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RiskId'])) {
            $model->riskId = $map['RiskId'];
        }
        if (isset($map['RiskName'])) {
            $model->riskName = $map['RiskName'];
        }
        if (isset($map['SubTypeAlias'])) {
            $model->subTypeAlias = $map['SubTypeAlias'];
        }
        if (isset($map['TypeAlias'])) {
            $model->typeAlias = $map['TypeAlias'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
