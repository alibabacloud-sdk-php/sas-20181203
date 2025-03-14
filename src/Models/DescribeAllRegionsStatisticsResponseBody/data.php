<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAllRegionsStatisticsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The number of logons to the asset.
     *
     * @example 0
     *
     * @var int
     */
    public $account;

    /**
     * @description The total number of unfixed baseline risks.
     *
     * @example 2
     *
     * @var int
     */
    public $health;

    /**
     * @description The number of alerts that are generated by Server Guard or Security Center.
     *
     * >
     *
     *   If **From** is set to **sas**, this parameter indicates the number of alerts that are generated by Security Center.
     *
     *   If **From** is set to **aqs**, this parameter indicates the number of alerts that are generated by Server Guard.
     *
     * @example 0
     *
     * @var int
     */
    public $newSuspicious;

    /**
     * @description The number of alerts that are generated by Server Guard.
     *
     * @example 2
     *
     * @var int
     */
    public $suspicious;

    /**
     * @description The number of webshell alerts.
     *
     * @example 1
     *
     * @var int
     */
    public $trojan;

    /**
     * @description The number of unfixed vulnerabilities.
     *
     * @example 17
     *
     * @var int
     */
    public $vul;
    protected $_name = [
        'account' => 'Account',
        'health' => 'Health',
        'newSuspicious' => 'NewSuspicious',
        'suspicious' => 'Suspicious',
        'trojan' => 'Trojan',
        'vul' => 'Vul',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->account) {
            $res['Account'] = $this->account;
        }
        if (null !== $this->health) {
            $res['Health'] = $this->health;
        }
        if (null !== $this->newSuspicious) {
            $res['NewSuspicious'] = $this->newSuspicious;
        }
        if (null !== $this->suspicious) {
            $res['Suspicious'] = $this->suspicious;
        }
        if (null !== $this->trojan) {
            $res['Trojan'] = $this->trojan;
        }
        if (null !== $this->vul) {
            $res['Vul'] = $this->vul;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Account'])) {
            $model->account = $map['Account'];
        }
        if (isset($map['Health'])) {
            $model->health = $map['Health'];
        }
        if (isset($map['NewSuspicious'])) {
            $model->newSuspicious = $map['NewSuspicious'];
        }
        if (isset($map['Suspicious'])) {
            $model->suspicious = $map['Suspicious'];
        }
        if (isset($map['Trojan'])) {
            $model->trojan = $map['Trojan'];
        }
        if (isset($map['Vul'])) {
            $model->vul = $map['Vul'];
        }

        return $model;
    }
}
