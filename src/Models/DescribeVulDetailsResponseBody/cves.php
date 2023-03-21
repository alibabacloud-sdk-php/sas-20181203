<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVulDetailsResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVulDetailsResponseBody\cves\classifys;
use AlibabaCloud\Tea\Model;

class cves extends Model
{
    /**
     * @var string
     */
    public $classify;

    /**
     * @var classifys[]
     */
    public $classifys;

    /**
     * @var string
     */
    public $cnvdId;

    /**
     * @var string
     */
    public $complexity;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $cveId;

    /**
     * @var string
     */
    public $cvssScore;

    /**
     * @var string
     */
    public $cvssVector;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $internetIp;

    /**
     * @var string
     */
    public $intranetIp;

    /**
     * @var string
     */
    public $poc;

    /**
     * @var int
     */
    public $pocCreateTime;

    /**
     * @var int
     */
    public $pocDisclosureTime;

    /**
     * @var string
     */
    public $product;

    /**
     * @var string
     */
    public $reference;

    /**
     * @var int
     */
    public $releaseTime;

    /**
     * @var string
     */
    public $solution;

    /**
     * @var string
     */
    public $summary;

    /**
     * @var string
     */
    public $targetId;

    /**
     * @var string
     */
    public $targetName;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $vendor;

    /**
     * @var string
     */
    public $vulLevel;
    protected $_name = [
        'classify'          => 'Classify',
        'classifys'         => 'Classifys',
        'cnvdId'            => 'CnvdId',
        'complexity'        => 'Complexity',
        'content'           => 'Content',
        'cveId'             => 'CveId',
        'cvssScore'         => 'CvssScore',
        'cvssVector'        => 'CvssVector',
        'instanceName'      => 'InstanceName',
        'internetIp'        => 'InternetIp',
        'intranetIp'        => 'IntranetIp',
        'poc'               => 'Poc',
        'pocCreateTime'     => 'PocCreateTime',
        'pocDisclosureTime' => 'PocDisclosureTime',
        'product'           => 'Product',
        'reference'         => 'Reference',
        'releaseTime'       => 'ReleaseTime',
        'solution'          => 'Solution',
        'summary'           => 'Summary',
        'targetId'          => 'TargetId',
        'targetName'        => 'TargetName',
        'title'             => 'Title',
        'vendor'            => 'Vendor',
        'vulLevel'          => 'VulLevel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->classify) {
            $res['Classify'] = $this->classify;
        }
        if (null !== $this->classifys) {
            $res['Classifys'] = [];
            if (null !== $this->classifys && \is_array($this->classifys)) {
                $n = 0;
                foreach ($this->classifys as $item) {
                    $res['Classifys'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->cnvdId) {
            $res['CnvdId'] = $this->cnvdId;
        }
        if (null !== $this->complexity) {
            $res['Complexity'] = $this->complexity;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->cveId) {
            $res['CveId'] = $this->cveId;
        }
        if (null !== $this->cvssScore) {
            $res['CvssScore'] = $this->cvssScore;
        }
        if (null !== $this->cvssVector) {
            $res['CvssVector'] = $this->cvssVector;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->internetIp) {
            $res['InternetIp'] = $this->internetIp;
        }
        if (null !== $this->intranetIp) {
            $res['IntranetIp'] = $this->intranetIp;
        }
        if (null !== $this->poc) {
            $res['Poc'] = $this->poc;
        }
        if (null !== $this->pocCreateTime) {
            $res['PocCreateTime'] = $this->pocCreateTime;
        }
        if (null !== $this->pocDisclosureTime) {
            $res['PocDisclosureTime'] = $this->pocDisclosureTime;
        }
        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }
        if (null !== $this->reference) {
            $res['Reference'] = $this->reference;
        }
        if (null !== $this->releaseTime) {
            $res['ReleaseTime'] = $this->releaseTime;
        }
        if (null !== $this->solution) {
            $res['Solution'] = $this->solution;
        }
        if (null !== $this->summary) {
            $res['Summary'] = $this->summary;
        }
        if (null !== $this->targetId) {
            $res['TargetId'] = $this->targetId;
        }
        if (null !== $this->targetName) {
            $res['TargetName'] = $this->targetName;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
        }
        if (null !== $this->vulLevel) {
            $res['VulLevel'] = $this->vulLevel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cves
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Classify'])) {
            $model->classify = $map['Classify'];
        }
        if (isset($map['Classifys'])) {
            if (!empty($map['Classifys'])) {
                $model->classifys = [];
                $n                = 0;
                foreach ($map['Classifys'] as $item) {
                    $model->classifys[$n++] = null !== $item ? classifys::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CnvdId'])) {
            $model->cnvdId = $map['CnvdId'];
        }
        if (isset($map['Complexity'])) {
            $model->complexity = $map['Complexity'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['CveId'])) {
            $model->cveId = $map['CveId'];
        }
        if (isset($map['CvssScore'])) {
            $model->cvssScore = $map['CvssScore'];
        }
        if (isset($map['CvssVector'])) {
            $model->cvssVector = $map['CvssVector'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InternetIp'])) {
            $model->internetIp = $map['InternetIp'];
        }
        if (isset($map['IntranetIp'])) {
            $model->intranetIp = $map['IntranetIp'];
        }
        if (isset($map['Poc'])) {
            $model->poc = $map['Poc'];
        }
        if (isset($map['PocCreateTime'])) {
            $model->pocCreateTime = $map['PocCreateTime'];
        }
        if (isset($map['PocDisclosureTime'])) {
            $model->pocDisclosureTime = $map['PocDisclosureTime'];
        }
        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }
        if (isset($map['Reference'])) {
            $model->reference = $map['Reference'];
        }
        if (isset($map['ReleaseTime'])) {
            $model->releaseTime = $map['ReleaseTime'];
        }
        if (isset($map['Solution'])) {
            $model->solution = $map['Solution'];
        }
        if (isset($map['Summary'])) {
            $model->summary = $map['Summary'];
        }
        if (isset($map['TargetId'])) {
            $model->targetId = $map['TargetId'];
        }
        if (isset($map['TargetName'])) {
            $model->targetName = $map['TargetName'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }
        if (isset($map['VulLevel'])) {
            $model->vulLevel = $map['VulLevel'];
        }

        return $model;
    }
}
