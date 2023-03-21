<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckDetailResponseBody\assistInfo;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckDetailResponseBody\customConfigs;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckDetailResponseBody\description;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckDetailResponseBody\solution;
use AlibabaCloud\Tea\Model;

class GetCheckDetailResponseBody extends Model
{
    /**
     * @var assistInfo
     */
    public $assistInfo;

    /**
     * @var customConfigs[]
     */
    public $customConfigs;

    /**
     * @var description
     */
    public $description;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var solution
     */
    public $solution;
    protected $_name = [
        'assistInfo'    => 'AssistInfo',
        'customConfigs' => 'CustomConfigs',
        'description'   => 'Description',
        'requestId'     => 'RequestId',
        'solution'      => 'Solution',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->assistInfo) {
            $res['AssistInfo'] = null !== $this->assistInfo ? $this->assistInfo->toMap() : null;
        }
        if (null !== $this->customConfigs) {
            $res['CustomConfigs'] = [];
            if (null !== $this->customConfigs && \is_array($this->customConfigs)) {
                $n = 0;
                foreach ($this->customConfigs as $item) {
                    $res['CustomConfigs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->description) {
            $res['Description'] = null !== $this->description ? $this->description->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->solution) {
            $res['Solution'] = null !== $this->solution ? $this->solution->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCheckDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssistInfo'])) {
            $model->assistInfo = assistInfo::fromMap($map['AssistInfo']);
        }
        if (isset($map['CustomConfigs'])) {
            if (!empty($map['CustomConfigs'])) {
                $model->customConfigs = [];
                $n                    = 0;
                foreach ($map['CustomConfigs'] as $item) {
                    $model->customConfigs[$n++] = null !== $item ? customConfigs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Description'])) {
            $model->description = description::fromMap($map['Description']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Solution'])) {
            $model->solution = solution::fromMap($map['Solution']);
        }

        return $model;
    }
}
