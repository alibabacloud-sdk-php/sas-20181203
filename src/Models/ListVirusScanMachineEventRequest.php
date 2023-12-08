<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ListVirusScanMachineEventRequest extends Model
{
    /**
     * @description The page number.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The task ID that is generated by the handling operation.
     *
     * >  You can call the [OperateVirusEvents](~~OperateVirusEvents~~) operation to handle alerts. You can obtain the task ID from the response parameters.
     * @example 233886xx
     *
     * @var string
     */
    public $operateTaskId;

    /**
     * @description The number of entries per page.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The UUID of the server.
     *
     * @example a6931624-c43e-4323-9128-a6be6ffdxxxx
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'currentPage'   => 'CurrentPage',
        'operateTaskId' => 'OperateTaskId',
        'pageSize'      => 'PageSize',
        'uuid'          => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->operateTaskId) {
            $res['OperateTaskId'] = $this->operateTaskId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListVirusScanMachineEventRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['OperateTaskId'])) {
            $model->operateTaskId = $map['OperateTaskId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
