<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class UpdateClientAlertModeRequest extends Model
{
    /**
     * @var string
     */
    public $mode;
    /**
     * @var string[]
     */
    public $uuids;
    protected $_name = [
        'mode'  => 'Mode',
        'uuids' => 'Uuids',
    ];

    public function validate()
    {
        if (\is_array($this->uuids)) {
            Model::validateArray($this->uuids);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }

        if (null !== $this->uuids) {
            if (\is_array($this->uuids)) {
                $res['Uuids'] = [];
                $n1           = 0;
                foreach ($this->uuids as $item1) {
                    $res['Uuids'][$n1++] = $item1;
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
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }

        if (isset($map['Uuids'])) {
            if (!empty($map['Uuids'])) {
                $model->uuids = [];
                $n1           = 0;
                foreach ($map['Uuids'] as $item1) {
                    $model->uuids[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
