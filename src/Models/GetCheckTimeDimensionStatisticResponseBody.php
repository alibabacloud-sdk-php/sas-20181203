<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckTimeDimensionStatisticResponseBody\timeDimensionStatisticDTO;
use AlibabaCloud\Tea\Model;

class GetCheckTimeDimensionStatisticResponseBody extends Model
{
    /**
     * @description The ID of the current request, a unique identifier generated by Alibaba Cloud for this request, which can be used to troubleshoot and locate issues.
     *
     * @example 028CF634-5268-5660-9575-48C9ED6B****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description List of time trend statistical data results.
     *
     * @var timeDimensionStatisticDTO
     */
    public $timeDimensionStatisticDTO;
    protected $_name = [
        'requestId'                 => 'RequestId',
        'timeDimensionStatisticDTO' => 'TimeDimensionStatisticDTO',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->timeDimensionStatisticDTO) {
            $res['TimeDimensionStatisticDTO'] = null !== $this->timeDimensionStatisticDTO ? $this->timeDimensionStatisticDTO->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCheckTimeDimensionStatisticResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TimeDimensionStatisticDTO'])) {
            $model->timeDimensionStatisticDTO = timeDimensionStatisticDTO::fromMap($map['TimeDimensionStatisticDTO']);
        }

        return $model;
    }
}
