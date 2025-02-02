<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class ListBaselineCheckWhiteRecordRequest extends Model
{
    /**
     * @var int[]
     */
    public $checkIds;
    /**
     * @var string
     */
    public $checkItemFuzzy;
    /**
     * @var int
     */
    public $currentPage;
    /**
     * @var string
     */
    public $lang;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var int[]
     */
    public $recordIds;
    /**
     * @var string
     */
    public $source;
    protected $_name = [
        'checkIds'       => 'CheckIds',
        'checkItemFuzzy' => 'CheckItemFuzzy',
        'currentPage'    => 'CurrentPage',
        'lang'           => 'Lang',
        'pageSize'       => 'PageSize',
        'recordIds'      => 'RecordIds',
        'source'         => 'Source',
    ];

    public function validate()
    {
        if (\is_array($this->checkIds)) {
            Model::validateArray($this->checkIds);
        }
        if (\is_array($this->recordIds)) {
            Model::validateArray($this->recordIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkIds) {
            if (\is_array($this->checkIds)) {
                $res['CheckIds'] = [];
                $n1              = 0;
                foreach ($this->checkIds as $item1) {
                    $res['CheckIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->checkItemFuzzy) {
            $res['CheckItemFuzzy'] = $this->checkItemFuzzy;
        }

        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->recordIds) {
            if (\is_array($this->recordIds)) {
                $res['RecordIds'] = [];
                $n1               = 0;
                foreach ($this->recordIds as $item1) {
                    $res['RecordIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->source) {
            $res['Source'] = $this->source;
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
        if (isset($map['CheckIds'])) {
            if (!empty($map['CheckIds'])) {
                $model->checkIds = [];
                $n1              = 0;
                foreach ($map['CheckIds'] as $item1) {
                    $model->checkIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['CheckItemFuzzy'])) {
            $model->checkItemFuzzy = $map['CheckItemFuzzy'];
        }

        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RecordIds'])) {
            if (!empty($map['RecordIds'])) {
                $model->recordIds = [];
                $n1               = 0;
                foreach ($map['RecordIds'] as $item1) {
                    $model->recordIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        return $model;
    }
}
