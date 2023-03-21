<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\ListPodRiskResponseBody\pageInfo;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListPodRiskResponseBody\podRiskList;
use AlibabaCloud\Tea\Model;

class ListPodRiskResponseBody extends Model
{
    /**
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @var podRiskList[]
     */
    public $podRiskList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'pageInfo'    => 'PageInfo',
        'podRiskList' => 'PodRiskList',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toMap() : null;
        }
        if (null !== $this->podRiskList) {
            $res['PodRiskList'] = [];
            if (null !== $this->podRiskList && \is_array($this->podRiskList)) {
                $n = 0;
                foreach ($this->podRiskList as $item) {
                    $res['PodRiskList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPodRiskResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageInfo'])) {
            $model->pageInfo = pageInfo::fromMap($map['PageInfo']);
        }
        if (isset($map['PodRiskList'])) {
            if (!empty($map['PodRiskList'])) {
                $model->podRiskList = [];
                $n                  = 0;
                foreach ($map['PodRiskList'] as $item) {
                    $model->podRiskList[$n++] = null !== $item ? podRiskList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}