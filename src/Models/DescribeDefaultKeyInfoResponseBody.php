<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class DescribeDefaultKeyInfoResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $domainList;
    /**
     * @var string
     */
    public $names;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'domainList' => 'DomainList',
        'names'      => 'Names',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->domainList)) {
            Model::validateArray($this->domainList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainList) {
            if (\is_array($this->domainList)) {
                $res['DomainList'] = [];
                $n1                = 0;
                foreach ($this->domainList as $item1) {
                    $res['DomainList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->names) {
            $res['Names'] = $this->names;
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
        if (isset($map['DomainList'])) {
            if (!empty($map['DomainList'])) {
                $model->domainList = [];
                $n1                = 0;
                foreach ($map['DomainList'] as $item1) {
                    $model->domainList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Names'])) {
            $model->names = $map['Names'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
