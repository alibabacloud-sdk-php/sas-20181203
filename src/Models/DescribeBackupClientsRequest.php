<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class DescribeBackupClientsRequest extends Model
{
    /**
     * @var string
     */
    public $supportRegionId;
    protected $_name = [
        'supportRegionId' => 'SupportRegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->supportRegionId) {
            $res['SupportRegionId'] = $this->supportRegionId;
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
        if (isset($map['SupportRegionId'])) {
            $model->supportRegionId = $map['SupportRegionId'];
        }

        return $model;
    }
}
