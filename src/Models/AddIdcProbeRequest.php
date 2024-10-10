<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class AddIdcProbeRequest extends Model
{
    /**
     * @description The name of the data center.
     *
     * This parameter is required.
     * @example test
     *
     * @var string
     */
    public $idcName;

    /**
     * @description The region ID.
     *
     * This parameter is required.
     * @example Hangzhou
     *
     * @var string
     */
    public $idcRegion;

    /**
     * @description The scan interval.
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $intervalPeriod;

    /**
     * @description The settings of the CIDR block.
     *
     * This parameter is required.
     * @example 192.168.XX.XX/24
     *
     * @var string
     */
    public $ipSegments;

    /**
     * @description The Linux port.
     *
     * This parameter is required.
     * @example 40
     *
     * @var string
     */
    public $linuxPort;

    /**
     * @description The unit of the scan interval. Valid values:
     *
     *   **day**
     *   **hour**
     *
     * This parameter is required.
     * @example day
     *
     * @var string
     */
    public $periodUnit;

    /**
     * @description The UUID of the server. Separate multiple UUIDs with commas (,).
     *
     * This parameter is required.
     * @example 076a446d-df7d-424c-bdc5-bb5dc7f1****
     *
     * @var string
     */
    public $uuids;

    /**
     * @description The Windows port.
     *
     * This parameter is required.
     * @example 40
     *
     * @var string
     */
    public $winPort;
    protected $_name = [
        'idcName'        => 'IdcName',
        'idcRegion'      => 'IdcRegion',
        'intervalPeriod' => 'IntervalPeriod',
        'ipSegments'     => 'IpSegments',
        'linuxPort'      => 'LinuxPort',
        'periodUnit'     => 'PeriodUnit',
        'uuids'          => 'Uuids',
        'winPort'        => 'WinPort',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->idcName) {
            $res['IdcName'] = $this->idcName;
        }
        if (null !== $this->idcRegion) {
            $res['IdcRegion'] = $this->idcRegion;
        }
        if (null !== $this->intervalPeriod) {
            $res['IntervalPeriod'] = $this->intervalPeriod;
        }
        if (null !== $this->ipSegments) {
            $res['IpSegments'] = $this->ipSegments;
        }
        if (null !== $this->linuxPort) {
            $res['LinuxPort'] = $this->linuxPort;
        }
        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }
        if (null !== $this->uuids) {
            $res['Uuids'] = $this->uuids;
        }
        if (null !== $this->winPort) {
            $res['WinPort'] = $this->winPort;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddIdcProbeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IdcName'])) {
            $model->idcName = $map['IdcName'];
        }
        if (isset($map['IdcRegion'])) {
            $model->idcRegion = $map['IdcRegion'];
        }
        if (isset($map['IntervalPeriod'])) {
            $model->intervalPeriod = $map['IntervalPeriod'];
        }
        if (isset($map['IpSegments'])) {
            $model->ipSegments = $map['IpSegments'];
        }
        if (isset($map['LinuxPort'])) {
            $model->linuxPort = $map['LinuxPort'];
        }
        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }
        if (isset($map['Uuids'])) {
            $model->uuids = $map['Uuids'];
        }
        if (isset($map['WinPort'])) {
            $model->winPort = $map['WinPort'];
        }

        return $model;
    }
}