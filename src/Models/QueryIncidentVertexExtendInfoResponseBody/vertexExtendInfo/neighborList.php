<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\QueryIncidentVertexExtendInfoResponseBody\vertexExtendInfo;

use AlibabaCloud\Tea\Model;

class neighborList extends Model
{
    /**
     * @example 2
     *
     * @var int
     */
    public $count;

    /**
     * @example True
     *
     * @var bool
     */
    public $hasMore;

    /**
     * @example alidetect
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'count'   => 'Count',
        'hasMore' => 'HasMore',
        'type'    => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->hasMore) {
            $res['HasMore'] = $this->hasMore;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return neighborList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['HasMore'])) {
            $model->hasMore = $map['HasMore'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
