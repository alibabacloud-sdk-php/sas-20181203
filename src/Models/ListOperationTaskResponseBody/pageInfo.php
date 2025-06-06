<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListOperationTaskResponseBody;

use AlibabaCloud\Tea\Model;

class pageInfo extends Model
{
    /**
     * @description The number of entries returned on the current page.
     *
     * @example 20
     *
     * @var int
     */
    public $count;

    /**
     * @description The page number of the current page in a paginated query.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The maximum number of items to display per page in a paginated query.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The total number of records in the query result.
     *
     * @example 149
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'count' => 'Count',
        'currentPage' => 'CurrentPage',
        'pageSize' => 'PageSize',
        'totalCount' => 'TotalCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pageInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
