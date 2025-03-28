<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\GetRegistryScanDayNumResponseBody\scanDayNumConfig;
use AlibabaCloud\Tea\Model;

class GetRegistryScanDayNumResponseBody extends Model
{
    /**
     * @description The ID of this request, a unique identifier generated by Alibaba Cloud for the request, which can be used to troubleshoot and locate issues.
     *
     * @example 09969D2C-4FAD-429E-BFBF-9A60DEF8****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Configuration of scan days.
     *
     * @var scanDayNumConfig
     */
    public $scanDayNumConfig;
    protected $_name = [
        'requestId' => 'RequestId',
        'scanDayNumConfig' => 'ScanDayNumConfig',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->scanDayNumConfig) {
            $res['ScanDayNumConfig'] = null !== $this->scanDayNumConfig ? $this->scanDayNumConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetRegistryScanDayNumResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ScanDayNumConfig'])) {
            $model->scanDayNumConfig = scanDayNumConfig::fromMap($map['ScanDayNumConfig']);
        }

        return $model;
    }
}
