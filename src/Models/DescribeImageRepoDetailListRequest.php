<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeImageRepoDetailListRequest extends Model
{
    /**
     * @description The number of the page to return. Default value: **1**.
     *
     * @example [{"name":"vulStatus","value":"YES","logicalExp":"AND"}]
     *
     * @var string
     */
    public $criteria;

    /**
     * @description The pagination information.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The data returned.
     *
     * @example OR
     *
     * @var string
     */
    public $logicalExp;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'criteria'    => 'Criteria',
        'currentPage' => 'CurrentPage',
        'logicalExp'  => 'LogicalExp',
        'pageSize'    => 'PageSize',
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
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->logicalExp) {
            $res['LogicalExp'] = $this->logicalExp;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeImageRepoDetailListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Criteria'])) {
            $model->criteria = $map['Criteria'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['LogicalExp'])) {
            $model->logicalExp = $map['LogicalExp'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
