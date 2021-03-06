<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeWebLockConfigListResponseBody;

use AlibabaCloud\Tea\Model;

class configList extends Model
{
    /**
     * @var string
     */
    public $exclusiveDir;

    /**
     * @var string
     */
    public $uuid;

    /**
     * @var string
     */
    public $inclusiveFileType;

    /**
     * @var string
     */
    public $defenceMode;

    /**
     * @var string
     */
    public $exclusiveFileType;

    /**
     * @var string
     */
    public $inclusiveFile;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var string
     */
    public $dir;

    /**
     * @var string
     */
    public $exclusiveFile;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $localBackupDir;
    protected $_name = [
        'exclusiveDir'      => 'ExclusiveDir',
        'uuid'              => 'Uuid',
        'inclusiveFileType' => 'InclusiveFileType',
        'defenceMode'       => 'DefenceMode',
        'exclusiveFileType' => 'ExclusiveFileType',
        'inclusiveFile'     => 'InclusiveFile',
        'mode'              => 'Mode',
        'dir'               => 'Dir',
        'exclusiveFile'     => 'ExclusiveFile',
        'id'                => 'Id',
        'localBackupDir'    => 'LocalBackupDir',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->exclusiveDir) {
            $res['ExclusiveDir'] = $this->exclusiveDir;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }
        if (null !== $this->inclusiveFileType) {
            $res['InclusiveFileType'] = $this->inclusiveFileType;
        }
        if (null !== $this->defenceMode) {
            $res['DefenceMode'] = $this->defenceMode;
        }
        if (null !== $this->exclusiveFileType) {
            $res['ExclusiveFileType'] = $this->exclusiveFileType;
        }
        if (null !== $this->inclusiveFile) {
            $res['InclusiveFile'] = $this->inclusiveFile;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->dir) {
            $res['Dir'] = $this->dir;
        }
        if (null !== $this->exclusiveFile) {
            $res['ExclusiveFile'] = $this->exclusiveFile;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->localBackupDir) {
            $res['LocalBackupDir'] = $this->localBackupDir;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return configList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExclusiveDir'])) {
            $model->exclusiveDir = $map['ExclusiveDir'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }
        if (isset($map['InclusiveFileType'])) {
            $model->inclusiveFileType = $map['InclusiveFileType'];
        }
        if (isset($map['DefenceMode'])) {
            $model->defenceMode = $map['DefenceMode'];
        }
        if (isset($map['ExclusiveFileType'])) {
            $model->exclusiveFileType = $map['ExclusiveFileType'];
        }
        if (isset($map['InclusiveFile'])) {
            $model->inclusiveFile = $map['InclusiveFile'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['Dir'])) {
            $model->dir = $map['Dir'];
        }
        if (isset($map['ExclusiveFile'])) {
            $model->exclusiveFile = $map['ExclusiveFile'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['LocalBackupDir'])) {
            $model->localBackupDir = $map['LocalBackupDir'];
        }

        return $model;
    }
}
