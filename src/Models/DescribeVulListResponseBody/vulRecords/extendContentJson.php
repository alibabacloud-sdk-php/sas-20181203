<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVulListResponseBody\vulRecords;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVulListResponseBody\vulRecords\extendContentJson\necessity;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVulListResponseBody\vulRecords\extendContentJson\rpmEntityList;
use AlibabaCloud\Tea\Model;

class extendContentJson extends Model
{
    /**
     * @var string
     */
    public $absolutePath;

    /**
     * @var string
     */
    public $aliasName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var int
     */
    public $lastTs;

    /**
     * @var necessity
     */
    public $necessity;

    /**
     * @var string
     */
    public $os;

    /**
     * @var string
     */
    public $osRelease;

    /**
     * @var int
     */
    public $primaryId;

    /**
     * @var rpmEntityList[]
     */
    public $rpmEntityList;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $tag;

    /**
     * @var string[]
     */
    public $cveList;
    protected $_name = [
        'absolutePath'  => 'AbsolutePath',
        'aliasName'     => 'AliasName',
        'description'   => 'Description',
        'ip'            => 'Ip',
        'lastTs'        => 'LastTs',
        'necessity'     => 'Necessity',
        'os'            => 'Os',
        'osRelease'     => 'OsRelease',
        'primaryId'     => 'PrimaryId',
        'rpmEntityList' => 'RpmEntityList',
        'status'        => 'Status',
        'tag'           => 'Tag',
        'cveList'       => 'cveList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->absolutePath) {
            $res['AbsolutePath'] = $this->absolutePath;
        }
        if (null !== $this->aliasName) {
            $res['AliasName'] = $this->aliasName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->lastTs) {
            $res['LastTs'] = $this->lastTs;
        }
        if (null !== $this->necessity) {
            $res['Necessity'] = null !== $this->necessity ? $this->necessity->toMap() : null;
        }
        if (null !== $this->os) {
            $res['Os'] = $this->os;
        }
        if (null !== $this->osRelease) {
            $res['OsRelease'] = $this->osRelease;
        }
        if (null !== $this->primaryId) {
            $res['PrimaryId'] = $this->primaryId;
        }
        if (null !== $this->rpmEntityList) {
            $res['RpmEntityList'] = [];
            if (null !== $this->rpmEntityList && \is_array($this->rpmEntityList)) {
                $n = 0;
                foreach ($this->rpmEntityList as $item) {
                    $res['RpmEntityList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }
        if (null !== $this->cveList) {
            $res['cveList'] = $this->cveList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return extendContentJson
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AbsolutePath'])) {
            $model->absolutePath = $map['AbsolutePath'];
        }
        if (isset($map['AliasName'])) {
            $model->aliasName = $map['AliasName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['LastTs'])) {
            $model->lastTs = $map['LastTs'];
        }
        if (isset($map['Necessity'])) {
            $model->necessity = necessity::fromMap($map['Necessity']);
        }
        if (isset($map['Os'])) {
            $model->os = $map['Os'];
        }
        if (isset($map['OsRelease'])) {
            $model->osRelease = $map['OsRelease'];
        }
        if (isset($map['PrimaryId'])) {
            $model->primaryId = $map['PrimaryId'];
        }
        if (isset($map['RpmEntityList'])) {
            if (!empty($map['RpmEntityList'])) {
                $model->rpmEntityList = [];
                $n                    = 0;
                foreach ($map['RpmEntityList'] as $item) {
                    $model->rpmEntityList[$n++] = null !== $item ? rpmEntityList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }
        if (isset($map['cveList'])) {
            if (!empty($map['cveList'])) {
                $model->cveList = $map['cveList'];
            }
        }

        return $model;
    }
}
