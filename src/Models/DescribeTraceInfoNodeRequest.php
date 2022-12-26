<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeTraceInfoNodeRequest extends Model
{
    /**
     * @example WEBSHELL
     *
     * @var string
     */
    public $eventName;

    /**
     * @example sas
     *
     * @var string
     */
    public $from;

    /**
     * @example 1635978934000
     *
     * @var int
     */
    public $incidentTime;

    /**
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @example 127.0.XX.XX
     *
     * @var string
     */
    public $sourceIp;

    /**
     * @example SAS_ASSET
     *
     * @var string
     */
    public $type;

    /**
     * @example 6f346617-eef9-45e6-b6d1-946xxxxxxxx
     *
     * @var string
     */
    public $uuid;

    /**
     * @example 03da4e2350a3eb50cd25a18cexxxxxxx
     *
     * @var string
     */
    public $vertexId;
    protected $_name = [
        'eventName'    => 'EventName',
        'from'         => 'From',
        'incidentTime' => 'IncidentTime',
        'lang'         => 'Lang',
        'sourceIp'     => 'SourceIp',
        'type'         => 'Type',
        'uuid'         => 'Uuid',
        'vertexId'     => 'VertexId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventName) {
            $res['EventName'] = $this->eventName;
        }
        if (null !== $this->from) {
            $res['From'] = $this->from;
        }
        if (null !== $this->incidentTime) {
            $res['IncidentTime'] = $this->incidentTime;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }
        if (null !== $this->vertexId) {
            $res['VertexId'] = $this->vertexId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeTraceInfoNodeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventName'])) {
            $model->eventName = $map['EventName'];
        }
        if (isset($map['From'])) {
            $model->from = $map['From'];
        }
        if (isset($map['IncidentTime'])) {
            $model->incidentTime = $map['IncidentTime'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }
        if (isset($map['VertexId'])) {
            $model->vertexId = $map['VertexId'];
        }

        return $model;
    }
}
