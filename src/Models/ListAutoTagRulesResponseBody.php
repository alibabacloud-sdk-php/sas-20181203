<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListAutoTagRulesResponseBody\autoTagRuleList;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListAutoTagRulesResponseBody\pageInfo;

class ListAutoTagRulesResponseBody extends Model
{
    /**
     * @var autoTagRuleList[]
     */
    public $autoTagRuleList;
    /**
     * @var pageInfo
     */
    public $pageInfo;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'autoTagRuleList' => 'AutoTagRuleList',
        'pageInfo'        => 'PageInfo',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->autoTagRuleList)) {
            Model::validateArray($this->autoTagRuleList);
        }
        if (null !== $this->pageInfo) {
            $this->pageInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoTagRuleList) {
            if (\is_array($this->autoTagRuleList)) {
                $res['AutoTagRuleList'] = [];
                $n1                     = 0;
                foreach ($this->autoTagRuleList as $item1) {
                    $res['AutoTagRuleList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toArray($noStream) : $this->pageInfo;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoTagRuleList'])) {
            if (!empty($map['AutoTagRuleList'])) {
                $model->autoTagRuleList = [];
                $n1                     = 0;
                foreach ($map['AutoTagRuleList'] as $item1) {
                    $model->autoTagRuleList[$n1++] = autoTagRuleList::fromMap($item1);
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
