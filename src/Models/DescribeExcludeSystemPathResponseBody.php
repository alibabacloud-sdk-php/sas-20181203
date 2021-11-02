<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeExcludeSystemPathResponseBody\excludePaths;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeExcludeSystemPathResponseBody\pageInfo;
use AlibabaCloud\Tea\Model;

class DescribeExcludeSystemPathResponseBody extends Model
{
    /**
     * @var excludePaths[]
     */
    public $excludePaths;

    /**
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'excludePaths' => 'ExcludePaths',
        'pageInfo'     => 'PageInfo',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->excludePaths) {
            $res['ExcludePaths'] = [];
            if (null !== $this->excludePaths && \is_array($this->excludePaths)) {
                $n = 0;
                foreach ($this->excludePaths as $item) {
                    $res['ExcludePaths'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeExcludeSystemPathResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExcludePaths'])) {
            if (!empty($map['ExcludePaths'])) {
                $model->excludePaths = [];
                $n                   = 0;
                foreach ($map['ExcludePaths'] as $item) {
                    $model->excludePaths[$n++] = null !== $item ? excludePaths::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageInfo'])) {
            $model->pageInfo = pageInfo::fromMap($map['PageInfo']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
