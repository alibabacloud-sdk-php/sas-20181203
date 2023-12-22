<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetOpaStrategyDetailNewResponseBody\data;

use AlibabaCloud\SDK\Sas\V20181203\Models\GetOpaStrategyDetailNewResponseBody\data\alarmDetail\baseline;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetOpaStrategyDetailNewResponseBody\data\alarmDetail\buildRisk;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetOpaStrategyDetailNewResponseBody\data\alarmDetail\maliciousFile;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetOpaStrategyDetailNewResponseBody\data\alarmDetail\sensitiveFile;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetOpaStrategyDetailNewResponseBody\data\alarmDetail\vul;
use AlibabaCloud\Tea\Model;

class alarmDetail extends Model
{
    /**
     * @description The baseline configuration information.
     *
     * @var baseline
     */
    public $baseline;

    /**
     * @var buildRisk
     */
    public $buildRisk;

    /**
     * @description The configuration information about the malicious sample.
     *
     * @var maliciousFile
     */
    public $maliciousFile;

    /**
     * @var sensitiveFile
     */
    public $sensitiveFile;

    /**
     * @description The vulnerability configuration information.
     *
     * @var vul
     */
    public $vul;
    protected $_name = [
        'baseline'      => 'Baseline',
        'buildRisk'     => 'BuildRisk',
        'maliciousFile' => 'MaliciousFile',
        'sensitiveFile' => 'SensitiveFile',
        'vul'           => 'Vul',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->baseline) {
            $res['Baseline'] = null !== $this->baseline ? $this->baseline->toMap() : null;
        }
        if (null !== $this->buildRisk) {
            $res['BuildRisk'] = null !== $this->buildRisk ? $this->buildRisk->toMap() : null;
        }
        if (null !== $this->maliciousFile) {
            $res['MaliciousFile'] = null !== $this->maliciousFile ? $this->maliciousFile->toMap() : null;
        }
        if (null !== $this->sensitiveFile) {
            $res['SensitiveFile'] = null !== $this->sensitiveFile ? $this->sensitiveFile->toMap() : null;
        }
        if (null !== $this->vul) {
            $res['Vul'] = null !== $this->vul ? $this->vul->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return alarmDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Baseline'])) {
            $model->baseline = baseline::fromMap($map['Baseline']);
        }
        if (isset($map['BuildRisk'])) {
            $model->buildRisk = buildRisk::fromMap($map['BuildRisk']);
        }
        if (isset($map['MaliciousFile'])) {
            $model->maliciousFile = maliciousFile::fromMap($map['MaliciousFile']);
        }
        if (isset($map['SensitiveFile'])) {
            $model->sensitiveFile = sensitiveFile::fromMap($map['SensitiveFile']);
        }
        if (isset($map['Vul'])) {
            $model->vul = vul::fromMap($map['Vul']);
        }

        return $model;
    }
}
