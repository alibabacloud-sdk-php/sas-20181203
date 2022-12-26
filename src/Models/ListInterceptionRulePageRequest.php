<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ListInterceptionRulePageRequest extends Model
{
    /**
     * @example cc41de13ab5474210bc0ce772a009****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example 80
     *
     * @var string
     */
    public $criteria;

    /**
     * @example DST_PORT
     *
     * @var string
     */
    public $criteriaType;

    /**
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @example 50
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'clusterId'    => 'ClusterId',
        'criteria'     => 'Criteria',
        'criteriaType' => 'CriteriaType',
        'currentPage'  => 'CurrentPage',
        'pageSize'     => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->criteria) {
            $res['Criteria'] = $this->criteria;
        }
        if (null !== $this->criteriaType) {
            $res['CriteriaType'] = $this->criteriaType;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListInterceptionRulePageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Criteria'])) {
            $model->criteria = $map['Criteria'];
        }
        if (isset($map['CriteriaType'])) {
            $model->criteriaType = $map['CriteriaType'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
