<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeWhiteListStrategyStatisticsRequest extends Model
{
    /**
     * @description The page number. Default value: **1**. Pages start from page 1.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The language of the content within the request and response. Default value: **zh**. Valid values:
     *
     *   **zh**: Chinese
     *   **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The number of entries per page. Maximum value: 1000. Default value: 20. If you leave this parameter empty, 20 data entries are returned per page.
     *
     * >  We recommend that you do not leave this parameter empty.
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The source IP address of the request. You do not need to specify this parameter. It is automatically obtained by the system.
     *
     * @example 183.63.XX.XX
     *
     * @var string
     */
    public $sourceIp;

    /**
     * @description The ID of the policy.
     *
     * >  You can call the [DescribeWhiteListStrategyList](~~DescribeWhiteListStrategyList~~) operation to obtain the ID.
     * @example 3645
     *
     * @var string
     */
    public $strategyIds;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'lang'        => 'Lang',
        'pageSize'    => 'PageSize',
        'sourceIp'    => 'SourceIp',
        'strategyIds' => 'StrategyIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->strategyIds) {
            $res['StrategyIds'] = $this->strategyIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeWhiteListStrategyStatisticsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['StrategyIds'])) {
            $model->strategyIds = $map['StrategyIds'];
        }

        return $model;
    }
}