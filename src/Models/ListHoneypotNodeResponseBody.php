<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\ListHoneypotNodeResponseBody\honeypotNodeList;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListHoneypotNodeResponseBody\pageInfo;
use AlibabaCloud\Tea\Model;

class ListHoneypotNodeResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var honeypotNodeList[]
     */
    public $honeypotNodeList;

    /**
     * @var int
     */
    public $httpStatusCode;

    /**
     * @var string
     */
    public $message;

    /**
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'             => 'Code',
        'honeypotNodeList' => 'HoneypotNodeList',
        'httpStatusCode'   => 'HttpStatusCode',
        'message'          => 'Message',
        'pageInfo'         => 'PageInfo',
        'requestId'        => 'RequestId',
        'success'          => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->honeypotNodeList) {
            $res['HoneypotNodeList'] = [];
            if (null !== $this->honeypotNodeList && \is_array($this->honeypotNodeList)) {
                $n = 0;
                foreach ($this->honeypotNodeList as $item) {
                    $res['HoneypotNodeList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListHoneypotNodeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['HoneypotNodeList'])) {
            if (!empty($map['HoneypotNodeList'])) {
                $model->honeypotNodeList = [];
                $n                       = 0;
                foreach ($map['HoneypotNodeList'] as $item) {
                    $model->honeypotNodeList[$n++] = null !== $item ? honeypotNodeList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['PageInfo'])) {
            $model->pageInfo = pageInfo::fromMap($map['PageInfo']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
