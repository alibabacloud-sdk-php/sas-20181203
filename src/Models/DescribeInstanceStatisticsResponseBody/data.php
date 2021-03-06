<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeInstanceStatisticsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $account;

    /**
     * @var int
     */
    public $appNum;

    /**
     * @var int
     */
    public $scaNum;

    /**
     * @var int
     */
    public $trojan;

    /**
     * @var int
     */
    public $cveNum;

    /**
     * @var int
     */
    public $emgNum;

    /**
     * @var int
     */
    public $suspicious;

    /**
     * @var int
     */
    public $cmsNum;

    /**
     * @var string
     */
    public $uuid;

    /**
     * @var int
     */
    public $vul;

    /**
     * @var int
     */
    public $health;

    /**
     * @var int
     */
    public $sysNum;
    protected $_name = [
        'account'    => 'Account',
        'appNum'     => 'AppNum',
        'scaNum'     => 'ScaNum',
        'trojan'     => 'Trojan',
        'cveNum'     => 'CveNum',
        'emgNum'     => 'EmgNum',
        'suspicious' => 'Suspicious',
        'cmsNum'     => 'CmsNum',
        'uuid'       => 'Uuid',
        'vul'        => 'Vul',
        'health'     => 'Health',
        'sysNum'     => 'SysNum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->account) {
            $res['Account'] = $this->account;
        }
        if (null !== $this->appNum) {
            $res['AppNum'] = $this->appNum;
        }
        if (null !== $this->scaNum) {
            $res['ScaNum'] = $this->scaNum;
        }
        if (null !== $this->trojan) {
            $res['Trojan'] = $this->trojan;
        }
        if (null !== $this->cveNum) {
            $res['CveNum'] = $this->cveNum;
        }
        if (null !== $this->emgNum) {
            $res['EmgNum'] = $this->emgNum;
        }
        if (null !== $this->suspicious) {
            $res['Suspicious'] = $this->suspicious;
        }
        if (null !== $this->cmsNum) {
            $res['CmsNum'] = $this->cmsNum;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }
        if (null !== $this->vul) {
            $res['Vul'] = $this->vul;
        }
        if (null !== $this->health) {
            $res['Health'] = $this->health;
        }
        if (null !== $this->sysNum) {
            $res['SysNum'] = $this->sysNum;
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
        if (isset($map['AppNum'])) {
            $model->appNum = $map['AppNum'];
        }
        if (isset($map['ScaNum'])) {
            $model->scaNum = $map['ScaNum'];
        }
        if (isset($map['Trojan'])) {
            $model->trojan = $map['Trojan'];
        }
        if (isset($map['CveNum'])) {
            $model->cveNum = $map['CveNum'];
        }
        if (isset($map['EmgNum'])) {
            $model->emgNum = $map['EmgNum'];
        }
        if (isset($map['Suspicious'])) {
            $model->suspicious = $map['Suspicious'];
        }
        if (isset($map['CmsNum'])) {
            $model->cmsNum = $map['CmsNum'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }
        if (isset($map['Vul'])) {
            $model->vul = $map['Vul'];
        }
        if (isset($map['Health'])) {
            $model->health = $map['Health'];
        }
        if (isset($map['SysNum'])) {
            $model->sysNum = $map['SysNum'];
        }

        return $model;
    }
}
