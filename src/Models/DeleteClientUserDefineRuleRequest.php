<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class DeleteClientUserDefineRuleRequest extends Model
{
    /**
     * @var int[]
     */
    public $idList;
    protected $_name = [
        'idList' => 'IdList',
    ];

    public function validate()
    {
        if (\is_array($this->idList)) {
            Model::validateArray($this->idList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->idList) {
            if (\is_array($this->idList)) {
                $res['IdList'] = [];
                $n1            = 0;
                foreach ($this->idList as $item1) {
                    $res['IdList'][$n1++] = $item1;
                }
            }
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
        if (isset($map['IdList'])) {
            if (!empty($map['IdList'])) {
                $model->idList = [];
                $n1            = 0;
                foreach ($map['IdList'] as $item1) {
                    $model->idList[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
