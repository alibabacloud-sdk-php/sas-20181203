<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\GetServerlessAuthSummaryResponseBody\data;
use AlibabaCloud\Tea\Model;

class GetServerlessAuthSummaryResponseBody extends Model
{
    /**
     * @description Returned data details.
     *
     * @var data
     */
    public $data;

    /**
     * @description The ID of this request, which is a unique identifier generated by Alibaba Cloud for this request. It can be used to troubleshoot and locate issues.
     *
     * @example F8B6F758-BCD4-597A-8A2C-DA5A552C****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the API call was successful. Values:
     * - **true**: Success
     * - **false**: Failure
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'data' => 'Data',
        'requestId' => 'RequestId',
        'success' => 'Success',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = null !== $this->data ? $this->data->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetServerlessAuthSummaryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            $model->data = data::fromMap($map['Data']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
