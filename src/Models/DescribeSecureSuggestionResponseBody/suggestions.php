<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSecureSuggestionResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSecureSuggestionResponseBody\suggestions\detail;
use AlibabaCloud\Tea\Model;

class suggestions extends Model
{
    /**
     * @var detail[]
     */
    public $detail;

    /**
     * @description DescribeSecureSuggestion
     *
     * @example 40
     *
     * @var int
     */
    public $points;

    /**
     * @example SS_ALARM
     *
     * @var string
     */
    public $suggestType;
    protected $_name = [
        'detail'      => 'Detail',
        'points'      => 'Points',
        'suggestType' => 'SuggestType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->detail) {
            $res['Detail'] = [];
            if (null !== $this->detail && \is_array($this->detail)) {
                $n = 0;
                foreach ($this->detail as $item) {
                    $res['Detail'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->points) {
            $res['Points'] = $this->points;
        }
        if (null !== $this->suggestType) {
            $res['SuggestType'] = $this->suggestType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return suggestions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Detail'])) {
            if (!empty($map['Detail'])) {
                $model->detail = [];
                $n             = 0;
                foreach ($map['Detail'] as $item) {
                    $model->detail[$n++] = null !== $item ? detail::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Points'])) {
            $model->points = $map['Points'];
        }
        if (isset($map['SuggestType'])) {
            $model->suggestType = $map['SuggestType'];
        }

        return $model;
    }
}
