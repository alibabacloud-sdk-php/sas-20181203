<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeSuspEventDetailRequest extends Model
{
    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $suspiciousEventId;

    /**
     * @var string
     */
    public $from;
    protected $_name = [
        'sourceIp'          => 'SourceIp',
        'lang'              => 'Lang',
        'suspiciousEventId' => 'SuspiciousEventId',
        'from'              => 'From',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->suspiciousEventId) {
            $res['SuspiciousEventId'] = $this->suspiciousEventId;
        }
        if (null !== $this->from) {
            $res['From'] = $this->from;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSuspEventDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['SuspiciousEventId'])) {
            $model->suspiciousEventId = $map['SuspiciousEventId'];
        }
        if (isset($map['From'])) {
            $model->from = $map['From'];
        }

        return $model;
    }
}
