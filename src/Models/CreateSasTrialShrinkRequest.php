<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class CreateSasTrialShrinkRequest extends Model
{
    /**
     * @var bool
     */
    public $fromEcs;
    /**
     * @var string
     */
    public $lang;
    /**
     * @var string
     */
    public $requestFormShrink;
    /**
     * @var int
     */
    public $tryType;
    /**
     * @var int
     */
    public $tryVersion;
    protected $_name = [
        'fromEcs'           => 'FromEcs',
        'lang'              => 'Lang',
        'requestFormShrink' => 'RequestForm',
        'tryType'           => 'TryType',
        'tryVersion'        => 'TryVersion',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fromEcs) {
            $res['FromEcs'] = $this->fromEcs;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->requestFormShrink) {
            $res['RequestForm'] = $this->requestFormShrink;
        }

        if (null !== $this->tryType) {
            $res['TryType'] = $this->tryType;
        }

        if (null !== $this->tryVersion) {
            $res['TryVersion'] = $this->tryVersion;
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
        if (isset($map['FromEcs'])) {
            $model->fromEcs = $map['FromEcs'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['RequestForm'])) {
            $model->requestFormShrink = $map['RequestForm'];
        }

        if (isset($map['TryType'])) {
            $model->tryType = $map['TryType'];
        }

        if (isset($map['TryVersion'])) {
            $model->tryVersion = $map['TryVersion'];
        }

        return $model;
    }
}
