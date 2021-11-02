<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeAlarmEventStackInfoRequest extends Model
{
    /**
     * @var string
     */
    public $eventName;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $uniqueInfo;

    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'eventName'  => 'EventName',
        'lang'       => 'Lang',
        'sourceIp'   => 'SourceIp',
        'uniqueInfo' => 'UniqueInfo',
        'uuid'       => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventName) {
            $res['EventName'] = $this->eventName;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->uniqueInfo) {
            $res['UniqueInfo'] = $this->uniqueInfo;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAlarmEventStackInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventName'])) {
            $model->eventName = $map['EventName'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['UniqueInfo'])) {
            $model->uniqueInfo = $map['UniqueInfo'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
