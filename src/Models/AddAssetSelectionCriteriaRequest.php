<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\AddAssetSelectionCriteriaRequest\targetOperationList;
use AlibabaCloud\Tea\Model;

class AddAssetSelectionCriteriaRequest extends Model
{
    /**
     * @example {"LogicalExp":"AND","Criteria":"[{\"name\":\"osType\",\"value\":\"linux\",\"logicalExp\":\"AND\"},{\"name\":\"alarmStatus\",\"value\":\"YES\",\"logicalExp\":\"AND\"}]"}
     *
     * @var string
     */
    public $criteria;

    /**
     * @example add
     *
     * @var string
     */
    public $criteriaOperation;

    /**
     * @example 5196d280-5bfa-496a-ba70-8a3935e3****
     *
     * @var string
     */
    public $selectionKey;

    /**
     * @var targetOperationList[]
     */
    public $targetOperationList;
    protected $_name = [
        'criteria'            => 'Criteria',
        'criteriaOperation'   => 'CriteriaOperation',
        'selectionKey'        => 'SelectionKey',
        'targetOperationList' => 'TargetOperationList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->criteria) {
            $res['Criteria'] = $this->criteria;
        }
        if (null !== $this->criteriaOperation) {
            $res['CriteriaOperation'] = $this->criteriaOperation;
        }
        if (null !== $this->selectionKey) {
            $res['SelectionKey'] = $this->selectionKey;
        }
        if (null !== $this->targetOperationList) {
            $res['TargetOperationList'] = [];
            if (null !== $this->targetOperationList && \is_array($this->targetOperationList)) {
                $n = 0;
                foreach ($this->targetOperationList as $item) {
                    $res['TargetOperationList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddAssetSelectionCriteriaRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Criteria'])) {
            $model->criteria = $map['Criteria'];
        }
        if (isset($map['CriteriaOperation'])) {
            $model->criteriaOperation = $map['CriteriaOperation'];
        }
        if (isset($map['SelectionKey'])) {
            $model->selectionKey = $map['SelectionKey'];
        }
        if (isset($map['TargetOperationList'])) {
            if (!empty($map['TargetOperationList'])) {
                $model->targetOperationList = [];
                $n                          = 0;
                foreach ($map['TargetOperationList'] as $item) {
                    $model->targetOperationList[$n++] = null !== $item ? targetOperationList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
