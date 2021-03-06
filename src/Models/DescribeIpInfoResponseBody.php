<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeIpInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $gmtLastC2;

    /**
     * @var string
     */
    public $natDayTrace;

    /**
     * @var string
     */
    public $isProxy1d;

    /**
     * @var string
     */
    public $gmtFirstMiningPool;

    /**
     * @var string
     */
    public $province;

    /**
     * @var string
     */
    public $isMaliciousLogin7d;

    /**
     * @var string
     */
    public $totalDayCntTor;

    /**
     * @var string
     */
    public $totalDayCntWebAttack;

    /**
     * @var string
     */
    public $gmtLastProxy;

    /**
     * @var string
     */
    public $isNat7d;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $isp;

    /**
     * @var string
     */
    public $tags;

    /**
     * @var string
     */
    public $proxyDayTrace;

    /**
     * @var string
     */
    public $dayCnt7dWebAttack;

    /**
     * @var string
     */
    public $gmtLastTor;

    /**
     * @var string
     */
    public $webAttackDayTrace;

    /**
     * @var string
     */
    public $gmtLastMaliciousLogin;

    /**
     * @var string
     */
    public $gmtLastWebAttack;

    /**
     * @var string
     */
    public $isWebAttack1d;

    /**
     * @var string
     */
    public $dayCnt7dTor;

    /**
     * @var string
     */
    public $isTor;

    /**
     * @var string
     */
    public $isProxy7d;

    /**
     * @var string
     */
    public $gmtLastMaliciousSource;

    /**
     * @var string
     */
    public $rdns;

    /**
     * @var string
     */
    public $isC21d;

    /**
     * @var string
     */
    public $isWebAttack7d;

    /**
     * @var string
     */
    public $isMaliciousSource1d;

    /**
     * @var string
     */
    public $geo;

    /**
     * @var string
     */
    public $isTor1d;

    /**
     * @var string
     */
    public $isMaliciousLogin;

    /**
     * @var string
     */
    public $gmtFirstC2;

    /**
     * @var string
     */
    public $c2DayTrace;

    /**
     * @var string
     */
    public $dayCnt30dWebAttack;

    /**
     * @var string
     */
    public $maliciousSourceDayTrace;

    /**
     * @var string
     */
    public $isMiningPool;

    /**
     * @var string
     */
    public $isMaliciousSource7d;

    /**
     * @var string
     */
    public $miningPoolDayTrace;

    /**
     * @var string
     */
    public $isIdc;

    /**
     * @var string
     */
    public $gmtLastMiningPool;

    /**
     * @var string
     */
    public $isWebAttack30d;

    /**
     * @var string
     */
    public $isTor7d;

    /**
     * @var string
     */
    public $isNat;

    /**
     * @var string
     */
    public $isNat1d;

    /**
     * @var string
     */
    public $isMaliciousSource;

    /**
     * @var string
     */
    public $torDayTrace;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var string
     */
    public $isWebAttack;

    /**
     * @var string
     */
    public $city;

    /**
     * @var string
     */
    public $isC2;

    /**
     * @var string
     */
    public $isMiningPool7d;

    /**
     * @var string
     */
    public $maliciousScore;

    /**
     * @var string
     */
    public $isMaliciousSource30d;

    /**
     * @var string
     */
    public $gmtLastNat;

    /**
     * @var string
     */
    public $idcName;

    /**
     * @var string
     */
    public $isMiningPool1d;

    /**
     * @var string
     */
    public $isMaliciousLogin1d;

    /**
     * @var string
     */
    public $country;

    /**
     * @var string
     */
    public $dayCnt30dTor;

    /**
     * @var string
     */
    public $isProxy;

    /**
     * @var string
     */
    public $maliciousLoginDayTrace;

    /**
     * @var string
     */
    public $isC27d;
    protected $_name = [
        'gmtLastC2'               => 'gmt_last_c2',
        'natDayTrace'             => 'nat_day_trace',
        'isProxy1d'               => 'is_proxy_1d',
        'gmtFirstMiningPool'      => 'gmt_first_mining_pool',
        'province'                => 'province',
        'isMaliciousLogin7d'      => 'is_malicious_login_7d',
        'totalDayCntTor'          => 'total_day_cnt_tor',
        'totalDayCntWebAttack'    => 'total_day_cnt_web_attack',
        'gmtLastProxy'            => 'gmt_last_proxy',
        'isNat7d'                 => 'is_nat_7d',
        'requestId'               => 'RequestId',
        'isp'                     => 'isp',
        'tags'                    => 'tags',
        'proxyDayTrace'           => 'proxy_day_trace',
        'dayCnt7dWebAttack'       => 'day_cnt_7d_web_attack',
        'gmtLastTor'              => 'gmt_last_tor',
        'webAttackDayTrace'       => 'web_attack_day_trace',
        'gmtLastMaliciousLogin'   => 'gmt_last_malicious_login',
        'gmtLastWebAttack'        => 'gmt_last_web_attack',
        'isWebAttack1d'           => 'is_web_attack_1d',
        'dayCnt7dTor'             => 'day_cnt_7d_tor',
        'isTor'                   => 'is_tor',
        'isProxy7d'               => 'is_proxy_7d',
        'gmtLastMaliciousSource'  => 'gmt_last_malicious_source',
        'rdns'                    => 'rdns',
        'isC21d'                  => 'is_c2_1d',
        'isWebAttack7d'           => 'is_web_attack_7d',
        'isMaliciousSource1d'     => 'is_malicious_source_1d',
        'geo'                     => 'geo',
        'isTor1d'                 => 'is_tor_1d',
        'isMaliciousLogin'        => 'is_malicious_login',
        'gmtFirstC2'              => 'gmt_first_c2',
        'c2DayTrace'              => 'c2_day_trace',
        'dayCnt30dWebAttack'      => 'day_cnt_30d_web_attack',
        'maliciousSourceDayTrace' => 'malicious_source_day_trace',
        'isMiningPool'            => 'is_mining_pool',
        'isMaliciousSource7d'     => 'is_malicious_source_7d',
        'miningPoolDayTrace'      => 'mining_pool_day_trace',
        'isIdc'                   => 'is_idc',
        'gmtLastMiningPool'       => 'gmt_last_mining_pool',
        'isWebAttack30d'          => 'is_web_attack_30d',
        'isTor7d'                 => 'is_tor_7d',
        'isNat'                   => 'is_nat',
        'isNat1d'                 => 'is_nat_1d',
        'isMaliciousSource'       => 'is_malicious_source',
        'torDayTrace'             => 'tor_day_trace',
        'ip'                      => 'ip',
        'isWebAttack'             => 'is_web_attack',
        'city'                    => 'city',
        'isC2'                    => 'is_c2',
        'isMiningPool7d'          => 'is_mining_pool_7d',
        'maliciousScore'          => 'malicious_score',
        'isMaliciousSource30d'    => 'is_malicious_source_30d',
        'gmtLastNat'              => 'gmt_last_nat',
        'idcName'                 => 'idc_name',
        'isMiningPool1d'          => 'is_mining_pool_1d',
        'isMaliciousLogin1d'      => 'is_malicious_login_1d',
        'country'                 => 'country',
        'dayCnt30dTor'            => 'day_cnt_30d_tor',
        'isProxy'                 => 'is_proxy',
        'maliciousLoginDayTrace'  => 'malicious_login_day_trace',
        'isC27d'                  => 'is_c2_7d',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gmtLastC2) {
            $res['gmt_last_c2'] = $this->gmtLastC2;
        }
        if (null !== $this->natDayTrace) {
            $res['nat_day_trace'] = $this->natDayTrace;
        }
        if (null !== $this->isProxy1d) {
            $res['is_proxy_1d'] = $this->isProxy1d;
        }
        if (null !== $this->gmtFirstMiningPool) {
            $res['gmt_first_mining_pool'] = $this->gmtFirstMiningPool;
        }
        if (null !== $this->province) {
            $res['province'] = $this->province;
        }
        if (null !== $this->isMaliciousLogin7d) {
            $res['is_malicious_login_7d'] = $this->isMaliciousLogin7d;
        }
        if (null !== $this->totalDayCntTor) {
            $res['total_day_cnt_tor'] = $this->totalDayCntTor;
        }
        if (null !== $this->totalDayCntWebAttack) {
            $res['total_day_cnt_web_attack'] = $this->totalDayCntWebAttack;
        }
        if (null !== $this->gmtLastProxy) {
            $res['gmt_last_proxy'] = $this->gmtLastProxy;
        }
        if (null !== $this->isNat7d) {
            $res['is_nat_7d'] = $this->isNat7d;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->isp) {
            $res['isp'] = $this->isp;
        }
        if (null !== $this->tags) {
            $res['tags'] = $this->tags;
        }
        if (null !== $this->proxyDayTrace) {
            $res['proxy_day_trace'] = $this->proxyDayTrace;
        }
        if (null !== $this->dayCnt7dWebAttack) {
            $res['day_cnt_7d_web_attack'] = $this->dayCnt7dWebAttack;
        }
        if (null !== $this->gmtLastTor) {
            $res['gmt_last_tor'] = $this->gmtLastTor;
        }
        if (null !== $this->webAttackDayTrace) {
            $res['web_attack_day_trace'] = $this->webAttackDayTrace;
        }
        if (null !== $this->gmtLastMaliciousLogin) {
            $res['gmt_last_malicious_login'] = $this->gmtLastMaliciousLogin;
        }
        if (null !== $this->gmtLastWebAttack) {
            $res['gmt_last_web_attack'] = $this->gmtLastWebAttack;
        }
        if (null !== $this->isWebAttack1d) {
            $res['is_web_attack_1d'] = $this->isWebAttack1d;
        }
        if (null !== $this->dayCnt7dTor) {
            $res['day_cnt_7d_tor'] = $this->dayCnt7dTor;
        }
        if (null !== $this->isTor) {
            $res['is_tor'] = $this->isTor;
        }
        if (null !== $this->isProxy7d) {
            $res['is_proxy_7d'] = $this->isProxy7d;
        }
        if (null !== $this->gmtLastMaliciousSource) {
            $res['gmt_last_malicious_source'] = $this->gmtLastMaliciousSource;
        }
        if (null !== $this->rdns) {
            $res['rdns'] = $this->rdns;
        }
        if (null !== $this->isC21d) {
            $res['is_c2_1d'] = $this->isC21d;
        }
        if (null !== $this->isWebAttack7d) {
            $res['is_web_attack_7d'] = $this->isWebAttack7d;
        }
        if (null !== $this->isMaliciousSource1d) {
            $res['is_malicious_source_1d'] = $this->isMaliciousSource1d;
        }
        if (null !== $this->geo) {
            $res['geo'] = $this->geo;
        }
        if (null !== $this->isTor1d) {
            $res['is_tor_1d'] = $this->isTor1d;
        }
        if (null !== $this->isMaliciousLogin) {
            $res['is_malicious_login'] = $this->isMaliciousLogin;
        }
        if (null !== $this->gmtFirstC2) {
            $res['gmt_first_c2'] = $this->gmtFirstC2;
        }
        if (null !== $this->c2DayTrace) {
            $res['c2_day_trace'] = $this->c2DayTrace;
        }
        if (null !== $this->dayCnt30dWebAttack) {
            $res['day_cnt_30d_web_attack'] = $this->dayCnt30dWebAttack;
        }
        if (null !== $this->maliciousSourceDayTrace) {
            $res['malicious_source_day_trace'] = $this->maliciousSourceDayTrace;
        }
        if (null !== $this->isMiningPool) {
            $res['is_mining_pool'] = $this->isMiningPool;
        }
        if (null !== $this->isMaliciousSource7d) {
            $res['is_malicious_source_7d'] = $this->isMaliciousSource7d;
        }
        if (null !== $this->miningPoolDayTrace) {
            $res['mining_pool_day_trace'] = $this->miningPoolDayTrace;
        }
        if (null !== $this->isIdc) {
            $res['is_idc'] = $this->isIdc;
        }
        if (null !== $this->gmtLastMiningPool) {
            $res['gmt_last_mining_pool'] = $this->gmtLastMiningPool;
        }
        if (null !== $this->isWebAttack30d) {
            $res['is_web_attack_30d'] = $this->isWebAttack30d;
        }
        if (null !== $this->isTor7d) {
            $res['is_tor_7d'] = $this->isTor7d;
        }
        if (null !== $this->isNat) {
            $res['is_nat'] = $this->isNat;
        }
        if (null !== $this->isNat1d) {
            $res['is_nat_1d'] = $this->isNat1d;
        }
        if (null !== $this->isMaliciousSource) {
            $res['is_malicious_source'] = $this->isMaliciousSource;
        }
        if (null !== $this->torDayTrace) {
            $res['tor_day_trace'] = $this->torDayTrace;
        }
        if (null !== $this->ip) {
            $res['ip'] = $this->ip;
        }
        if (null !== $this->isWebAttack) {
            $res['is_web_attack'] = $this->isWebAttack;
        }
        if (null !== $this->city) {
            $res['city'] = $this->city;
        }
        if (null !== $this->isC2) {
            $res['is_c2'] = $this->isC2;
        }
        if (null !== $this->isMiningPool7d) {
            $res['is_mining_pool_7d'] = $this->isMiningPool7d;
        }
        if (null !== $this->maliciousScore) {
            $res['malicious_score'] = $this->maliciousScore;
        }
        if (null !== $this->isMaliciousSource30d) {
            $res['is_malicious_source_30d'] = $this->isMaliciousSource30d;
        }
        if (null !== $this->gmtLastNat) {
            $res['gmt_last_nat'] = $this->gmtLastNat;
        }
        if (null !== $this->idcName) {
            $res['idc_name'] = $this->idcName;
        }
        if (null !== $this->isMiningPool1d) {
            $res['is_mining_pool_1d'] = $this->isMiningPool1d;
        }
        if (null !== $this->isMaliciousLogin1d) {
            $res['is_malicious_login_1d'] = $this->isMaliciousLogin1d;
        }
        if (null !== $this->country) {
            $res['country'] = $this->country;
        }
        if (null !== $this->dayCnt30dTor) {
            $res['day_cnt_30d_tor'] = $this->dayCnt30dTor;
        }
        if (null !== $this->isProxy) {
            $res['is_proxy'] = $this->isProxy;
        }
        if (null !== $this->maliciousLoginDayTrace) {
            $res['malicious_login_day_trace'] = $this->maliciousLoginDayTrace;
        }
        if (null !== $this->isC27d) {
            $res['is_c2_7d'] = $this->isC27d;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeIpInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['gmt_last_c2'])) {
            $model->gmtLastC2 = $map['gmt_last_c2'];
        }
        if (isset($map['nat_day_trace'])) {
            $model->natDayTrace = $map['nat_day_trace'];
        }
        if (isset($map['is_proxy_1d'])) {
            $model->isProxy1d = $map['is_proxy_1d'];
        }
        if (isset($map['gmt_first_mining_pool'])) {
            $model->gmtFirstMiningPool = $map['gmt_first_mining_pool'];
        }
        if (isset($map['province'])) {
            $model->province = $map['province'];
        }
        if (isset($map['is_malicious_login_7d'])) {
            $model->isMaliciousLogin7d = $map['is_malicious_login_7d'];
        }
        if (isset($map['total_day_cnt_tor'])) {
            $model->totalDayCntTor = $map['total_day_cnt_tor'];
        }
        if (isset($map['total_day_cnt_web_attack'])) {
            $model->totalDayCntWebAttack = $map['total_day_cnt_web_attack'];
        }
        if (isset($map['gmt_last_proxy'])) {
            $model->gmtLastProxy = $map['gmt_last_proxy'];
        }
        if (isset($map['is_nat_7d'])) {
            $model->isNat7d = $map['is_nat_7d'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['isp'])) {
            $model->isp = $map['isp'];
        }
        if (isset($map['tags'])) {
            $model->tags = $map['tags'];
        }
        if (isset($map['proxy_day_trace'])) {
            $model->proxyDayTrace = $map['proxy_day_trace'];
        }
        if (isset($map['day_cnt_7d_web_attack'])) {
            $model->dayCnt7dWebAttack = $map['day_cnt_7d_web_attack'];
        }
        if (isset($map['gmt_last_tor'])) {
            $model->gmtLastTor = $map['gmt_last_tor'];
        }
        if (isset($map['web_attack_day_trace'])) {
            $model->webAttackDayTrace = $map['web_attack_day_trace'];
        }
        if (isset($map['gmt_last_malicious_login'])) {
            $model->gmtLastMaliciousLogin = $map['gmt_last_malicious_login'];
        }
        if (isset($map['gmt_last_web_attack'])) {
            $model->gmtLastWebAttack = $map['gmt_last_web_attack'];
        }
        if (isset($map['is_web_attack_1d'])) {
            $model->isWebAttack1d = $map['is_web_attack_1d'];
        }
        if (isset($map['day_cnt_7d_tor'])) {
            $model->dayCnt7dTor = $map['day_cnt_7d_tor'];
        }
        if (isset($map['is_tor'])) {
            $model->isTor = $map['is_tor'];
        }
        if (isset($map['is_proxy_7d'])) {
            $model->isProxy7d = $map['is_proxy_7d'];
        }
        if (isset($map['gmt_last_malicious_source'])) {
            $model->gmtLastMaliciousSource = $map['gmt_last_malicious_source'];
        }
        if (isset($map['rdns'])) {
            $model->rdns = $map['rdns'];
        }
        if (isset($map['is_c2_1d'])) {
            $model->isC21d = $map['is_c2_1d'];
        }
        if (isset($map['is_web_attack_7d'])) {
            $model->isWebAttack7d = $map['is_web_attack_7d'];
        }
        if (isset($map['is_malicious_source_1d'])) {
            $model->isMaliciousSource1d = $map['is_malicious_source_1d'];
        }
        if (isset($map['geo'])) {
            $model->geo = $map['geo'];
        }
        if (isset($map['is_tor_1d'])) {
            $model->isTor1d = $map['is_tor_1d'];
        }
        if (isset($map['is_malicious_login'])) {
            $model->isMaliciousLogin = $map['is_malicious_login'];
        }
        if (isset($map['gmt_first_c2'])) {
            $model->gmtFirstC2 = $map['gmt_first_c2'];
        }
        if (isset($map['c2_day_trace'])) {
            $model->c2DayTrace = $map['c2_day_trace'];
        }
        if (isset($map['day_cnt_30d_web_attack'])) {
            $model->dayCnt30dWebAttack = $map['day_cnt_30d_web_attack'];
        }
        if (isset($map['malicious_source_day_trace'])) {
            $model->maliciousSourceDayTrace = $map['malicious_source_day_trace'];
        }
        if (isset($map['is_mining_pool'])) {
            $model->isMiningPool = $map['is_mining_pool'];
        }
        if (isset($map['is_malicious_source_7d'])) {
            $model->isMaliciousSource7d = $map['is_malicious_source_7d'];
        }
        if (isset($map['mining_pool_day_trace'])) {
            $model->miningPoolDayTrace = $map['mining_pool_day_trace'];
        }
        if (isset($map['is_idc'])) {
            $model->isIdc = $map['is_idc'];
        }
        if (isset($map['gmt_last_mining_pool'])) {
            $model->gmtLastMiningPool = $map['gmt_last_mining_pool'];
        }
        if (isset($map['is_web_attack_30d'])) {
            $model->isWebAttack30d = $map['is_web_attack_30d'];
        }
        if (isset($map['is_tor_7d'])) {
            $model->isTor7d = $map['is_tor_7d'];
        }
        if (isset($map['is_nat'])) {
            $model->isNat = $map['is_nat'];
        }
        if (isset($map['is_nat_1d'])) {
            $model->isNat1d = $map['is_nat_1d'];
        }
        if (isset($map['is_malicious_source'])) {
            $model->isMaliciousSource = $map['is_malicious_source'];
        }
        if (isset($map['tor_day_trace'])) {
            $model->torDayTrace = $map['tor_day_trace'];
        }
        if (isset($map['ip'])) {
            $model->ip = $map['ip'];
        }
        if (isset($map['is_web_attack'])) {
            $model->isWebAttack = $map['is_web_attack'];
        }
        if (isset($map['city'])) {
            $model->city = $map['city'];
        }
        if (isset($map['is_c2'])) {
            $model->isC2 = $map['is_c2'];
        }
        if (isset($map['is_mining_pool_7d'])) {
            $model->isMiningPool7d = $map['is_mining_pool_7d'];
        }
        if (isset($map['malicious_score'])) {
            $model->maliciousScore = $map['malicious_score'];
        }
        if (isset($map['is_malicious_source_30d'])) {
            $model->isMaliciousSource30d = $map['is_malicious_source_30d'];
        }
        if (isset($map['gmt_last_nat'])) {
            $model->gmtLastNat = $map['gmt_last_nat'];
        }
        if (isset($map['idc_name'])) {
            $model->idcName = $map['idc_name'];
        }
        if (isset($map['is_mining_pool_1d'])) {
            $model->isMiningPool1d = $map['is_mining_pool_1d'];
        }
        if (isset($map['is_malicious_login_1d'])) {
            $model->isMaliciousLogin1d = $map['is_malicious_login_1d'];
        }
        if (isset($map['country'])) {
            $model->country = $map['country'];
        }
        if (isset($map['day_cnt_30d_tor'])) {
            $model->dayCnt30dTor = $map['day_cnt_30d_tor'];
        }
        if (isset($map['is_proxy'])) {
            $model->isProxy = $map['is_proxy'];
        }
        if (isset($map['malicious_login_day_trace'])) {
            $model->maliciousLoginDayTrace = $map['malicious_login_day_trace'];
        }
        if (isset($map['is_c2_7d'])) {
            $model->isC27d = $map['is_c2_7d'];
        }

        return $model;
    }
}
