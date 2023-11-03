<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListContainerDefenseRuleRequest;

use AlibabaCloud\Tea\Model;

class conditions extends Model
{
    /**
     * @description The type of the condition. Valid values:
     *
     *   **ruleName: the name of the rule**
     *
     * @example ruleName
     *
     * @var string
     */
    public $type;

    /**
     * @description The value of the condition.
     *
     * @example auto-test-rule-**
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'type'  => 'Type',
        'value' => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return conditions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
