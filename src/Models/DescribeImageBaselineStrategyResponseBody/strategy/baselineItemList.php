<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageBaselineStrategyResponseBody\strategy;

use AlibabaCloud\Dara\Model;

class baselineItemList extends Model
{
    /**
     * @var string
     */
    public $classKey;
    /**
     * @var string
     */
    public $itemKey;
    /**
     * @var string
     */
    public $nameKey;
    protected $_name = [
        'classKey' => 'ClassKey',
        'itemKey'  => 'ItemKey',
        'nameKey'  => 'NameKey',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->classKey) {
            $res['ClassKey'] = $this->classKey;
        }

        if (null !== $this->itemKey) {
            $res['ItemKey'] = $this->itemKey;
        }

        if (null !== $this->nameKey) {
            $res['NameKey'] = $this->nameKey;
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
        if (isset($map['ClassKey'])) {
            $model->classKey = $map['ClassKey'];
        }

        if (isset($map['ItemKey'])) {
            $model->itemKey = $map['ItemKey'];
        }

        if (isset($map['NameKey'])) {
            $model->nameKey = $map['NameKey'];
        }

        return $model;
    }
}
