<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class UpdatePublishBatchRequest extends Model
{
    /**
     * @example 52370
     *
     * @var int
     */
    public $batchId;

    /**
     * @var string
     */
    public $batchName;

    /**
     * @example 60
     *
     * @var int
     */
    public $interval;

    /**
     * @example 0
     *
     * @var int
     */
    public $operationBase;
    protected $_name = [
        'batchId'       => 'BatchId',
        'batchName'     => 'BatchName',
        'interval'      => 'Interval',
        'operationBase' => 'OperationBase',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->batchId) {
            $res['BatchId'] = $this->batchId;
        }
        if (null !== $this->batchName) {
            $res['BatchName'] = $this->batchName;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->operationBase) {
            $res['OperationBase'] = $this->operationBase;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdatePublishBatchRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BatchId'])) {
            $model->batchId = $map['BatchId'];
        }
        if (isset($map['BatchName'])) {
            $model->batchName = $map['BatchName'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['OperationBase'])) {
            $model->operationBase = $map['OperationBase'];
        }

        return $model;
    }
}