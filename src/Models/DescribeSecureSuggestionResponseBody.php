<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSecureSuggestionResponseBody\suggestions;
use AlibabaCloud\Tea\Model;

class DescribeSecureSuggestionResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var suggestions[]
     */
    public $suggestions;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'requestId'   => 'RequestId',
        'suggestions' => 'Suggestions',
        'totalCount'  => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->suggestions) {
            $res['Suggestions'] = [];
            if (null !== $this->suggestions && \is_array($this->suggestions)) {
                $n = 0;
                foreach ($this->suggestions as $item) {
                    $res['Suggestions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSecureSuggestionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Suggestions'])) {
            if (!empty($map['Suggestions'])) {
                $model->suggestions = [];
                $n                  = 0;
                foreach ($map['Suggestions'] as $item) {
                    $model->suggestions[$n++] = null !== $item ? suggestions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
