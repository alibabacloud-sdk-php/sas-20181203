<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeDomainSecureSuggestsResponseBody extends Model
{
    /**
     * @description The ID of this call request, a unique identifier generated by Alibaba Cloud for this request, which can be used to troubleshoot and locate issues.
     *
     * @example 7BC55C8F-226E-5AF5-9A2C-2EC43864****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Overall suggestions for security reinforcement.
     *
     * @example Use the security center, such as security alerts, vulnerability scanning, and vulnerability fixes, to resolve security risks as soon as possible.
     *
     * @var string
     */
    public $riskSuggest;

    /**
     * @description Total number of security recommendations.
     *
     * @example 4
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description Suggestions for vulnerability repair.
     *
     * @example If your business cannot promptly fix vulnerabilities in high-risk applications, we recommend that you enable the cloud firewall IPS feature to intercept malicious attacks on the network side.
     *
     * @var int
     */
    public $vulSuggest;

    /**
     * @description Suggestions for website tamper prevention.
     *
     * @example The website tamper-proofing feature is recommended to prevent the website from being maliciously injected into external links, and being tampered with as malicious information, causing serious negative social impact to the enterprise.
     *
     * @var string
     */
    public $webLockSuggest;
    protected $_name = [
        'requestId'      => 'RequestId',
        'riskSuggest'    => 'RiskSuggest',
        'totalCount'     => 'TotalCount',
        'vulSuggest'     => 'VulSuggest',
        'webLockSuggest' => 'WebLockSuggest',
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
        if (null !== $this->riskSuggest) {
            $res['RiskSuggest'] = $this->riskSuggest;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->vulSuggest) {
            $res['VulSuggest'] = $this->vulSuggest;
        }
        if (null !== $this->webLockSuggest) {
            $res['WebLockSuggest'] = $this->webLockSuggest;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDomainSecureSuggestsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RiskSuggest'])) {
            $model->riskSuggest = $map['RiskSuggest'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['VulSuggest'])) {
            $model->vulSuggest = $map['VulSuggest'];
        }
        if (isset($map['WebLockSuggest'])) {
            $model->webLockSuggest = $map['WebLockSuggest'];
        }

        return $model;
    }
}
