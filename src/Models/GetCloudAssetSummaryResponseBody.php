<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\GetCloudAssetSummaryResponseBody\groupedFields;
use AlibabaCloud\Tea\Model;

class GetCloudAssetSummaryResponseBody extends Model
{
    /**
     * @var groupedFields
     */
    public $groupedFields;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'groupedFields' => 'GroupedFields',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupedFields) {
            $res['GroupedFields'] = null !== $this->groupedFields ? $this->groupedFields->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCloudAssetSummaryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupedFields'])) {
            $model->groupedFields = groupedFields::fromMap($map['GroupedFields']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
