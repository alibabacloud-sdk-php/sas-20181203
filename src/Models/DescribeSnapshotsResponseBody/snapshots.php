<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSnapshotsResponseBody;

use AlibabaCloud\Tea\Model;

class snapshots extends Model
{
    /**
     * @var string
     */
    public $containerSnapshotId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $snapshotHash;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var int
     */
    public $actualItems;

    /**
     * @var string
     */
    public $vaultId;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $backupType;

    /**
     * @var int
     */
    public $actualBytes;

    /**
     * @var string
     */
    public $prefix;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var string
     */
    public $extra;

    /**
     * @var string
     */
    public $serverId;

    /**
     * @var string
     */
    public $exitCode;

    /**
     * @var string
     */
    public $clientId;

    /**
     * @var int
     */
    public $itemsDone;

    /**
     * @var int
     */
    public $bytesTotal;

    /**
     * @var int
     */
    public $completeTime;

    /**
     * @var int
     */
    public $retention;

    /**
     * @var string
     */
    public $errorType;

    /**
     * @var int
     */
    public $createdTime;

    /**
     * @var string
     */
    public $bucket;

    /**
     * @var string
     */
    public $parentSnapshotHash;

    /**
     * @var string
     */
    public $machineInfoJson;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $planId;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $fileSystemId;

    /**
     * @var string
     */
    public $parentHash;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $uuid;

    /**
     * @var string
     */
    public $errorFile;

    /**
     * @var string
     */
    public $snapshotType;

    /**
     * @var string
     */
    public $snapshotName;

    /**
     * @var string
     */
    public $snapshotOption;

    /**
     * @var int
     */
    public $updatedTime;

    /**
     * @var string
     */
    public $snapshotId;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $path;

    /**
     * @var int
     */
    public $errorCount;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var int
     */
    public $itemsTotal;

    /**
     * @var int
     */
    public $bytesDone;

    /**
     * @var string[]
     */
    public $paths;
    protected $_name = [
        'containerSnapshotId' => 'ContainerSnapshotId',
        'status'              => 'Status',
        'snapshotHash'        => 'SnapshotHash',
        'errorMessage'        => 'ErrorMessage',
        'actualItems'         => 'ActualItems',
        'vaultId'             => 'VaultId',
        'createTime'          => 'CreateTime',
        'backupType'          => 'BackupType',
        'actualBytes'         => 'ActualBytes',
        'prefix'              => 'Prefix',
        'sourceType'          => 'SourceType',
        'extra'               => 'Extra',
        'serverId'            => 'ServerId',
        'exitCode'            => 'ExitCode',
        'clientId'            => 'ClientId',
        'itemsDone'           => 'ItemsDone',
        'bytesTotal'          => 'BytesTotal',
        'completeTime'        => 'CompleteTime',
        'retention'           => 'Retention',
        'errorType'           => 'ErrorType',
        'createdTime'         => 'CreatedTime',
        'bucket'              => 'Bucket',
        'parentSnapshotHash'  => 'ParentSnapshotHash',
        'machineInfoJson'     => 'MachineInfoJson',
        'instanceId'          => 'InstanceId',
        'planId'              => 'PlanId',
        'source'              => 'Source',
        'regionId'            => 'RegionId',
        'fileSystemId'        => 'FileSystemId',
        'parentHash'          => 'ParentHash',
        'startTime'           => 'StartTime',
        'uuid'                => 'Uuid',
        'errorFile'           => 'ErrorFile',
        'snapshotType'        => 'SnapshotType',
        'snapshotName'        => 'SnapshotName',
        'snapshotOption'      => 'SnapshotOption',
        'updatedTime'         => 'UpdatedTime',
        'snapshotId'          => 'SnapshotId',
        'jobId'               => 'JobId',
        'size'                => 'Size',
        'path'                => 'Path',
        'errorCount'          => 'ErrorCount',
        'duration'            => 'Duration',
        'itemsTotal'          => 'ItemsTotal',
        'bytesDone'           => 'BytesDone',
        'paths'               => 'Paths',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->containerSnapshotId) {
            $res['ContainerSnapshotId'] = $this->containerSnapshotId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->snapshotHash) {
            $res['SnapshotHash'] = $this->snapshotHash;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->actualItems) {
            $res['ActualItems'] = $this->actualItems;
        }
        if (null !== $this->vaultId) {
            $res['VaultId'] = $this->vaultId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->backupType) {
            $res['BackupType'] = $this->backupType;
        }
        if (null !== $this->actualBytes) {
            $res['ActualBytes'] = $this->actualBytes;
        }
        if (null !== $this->prefix) {
            $res['Prefix'] = $this->prefix;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }
        if (null !== $this->extra) {
            $res['Extra'] = $this->extra;
        }
        if (null !== $this->serverId) {
            $res['ServerId'] = $this->serverId;
        }
        if (null !== $this->exitCode) {
            $res['ExitCode'] = $this->exitCode;
        }
        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }
        if (null !== $this->itemsDone) {
            $res['ItemsDone'] = $this->itemsDone;
        }
        if (null !== $this->bytesTotal) {
            $res['BytesTotal'] = $this->bytesTotal;
        }
        if (null !== $this->completeTime) {
            $res['CompleteTime'] = $this->completeTime;
        }
        if (null !== $this->retention) {
            $res['Retention'] = $this->retention;
        }
        if (null !== $this->errorType) {
            $res['ErrorType'] = $this->errorType;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->bucket) {
            $res['Bucket'] = $this->bucket;
        }
        if (null !== $this->parentSnapshotHash) {
            $res['ParentSnapshotHash'] = $this->parentSnapshotHash;
        }
        if (null !== $this->machineInfoJson) {
            $res['MachineInfoJson'] = $this->machineInfoJson;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->planId) {
            $res['PlanId'] = $this->planId;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }
        if (null !== $this->parentHash) {
            $res['ParentHash'] = $this->parentHash;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }
        if (null !== $this->errorFile) {
            $res['ErrorFile'] = $this->errorFile;
        }
        if (null !== $this->snapshotType) {
            $res['SnapshotType'] = $this->snapshotType;
        }
        if (null !== $this->snapshotName) {
            $res['SnapshotName'] = $this->snapshotName;
        }
        if (null !== $this->snapshotOption) {
            $res['SnapshotOption'] = $this->snapshotOption;
        }
        if (null !== $this->updatedTime) {
            $res['UpdatedTime'] = $this->updatedTime;
        }
        if (null !== $this->snapshotId) {
            $res['SnapshotId'] = $this->snapshotId;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->errorCount) {
            $res['ErrorCount'] = $this->errorCount;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->itemsTotal) {
            $res['ItemsTotal'] = $this->itemsTotal;
        }
        if (null !== $this->bytesDone) {
            $res['BytesDone'] = $this->bytesDone;
        }
        if (null !== $this->paths) {
            $res['Paths'] = $this->paths;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return snapshots
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContainerSnapshotId'])) {
            $model->containerSnapshotId = $map['ContainerSnapshotId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SnapshotHash'])) {
            $model->snapshotHash = $map['SnapshotHash'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['ActualItems'])) {
            $model->actualItems = $map['ActualItems'];
        }
        if (isset($map['VaultId'])) {
            $model->vaultId = $map['VaultId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['BackupType'])) {
            $model->backupType = $map['BackupType'];
        }
        if (isset($map['ActualBytes'])) {
            $model->actualBytes = $map['ActualBytes'];
        }
        if (isset($map['Prefix'])) {
            $model->prefix = $map['Prefix'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }
        if (isset($map['Extra'])) {
            $model->extra = $map['Extra'];
        }
        if (isset($map['ServerId'])) {
            $model->serverId = $map['ServerId'];
        }
        if (isset($map['ExitCode'])) {
            $model->exitCode = $map['ExitCode'];
        }
        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }
        if (isset($map['ItemsDone'])) {
            $model->itemsDone = $map['ItemsDone'];
        }
        if (isset($map['BytesTotal'])) {
            $model->bytesTotal = $map['BytesTotal'];
        }
        if (isset($map['CompleteTime'])) {
            $model->completeTime = $map['CompleteTime'];
        }
        if (isset($map['Retention'])) {
            $model->retention = $map['Retention'];
        }
        if (isset($map['ErrorType'])) {
            $model->errorType = $map['ErrorType'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['Bucket'])) {
            $model->bucket = $map['Bucket'];
        }
        if (isset($map['ParentSnapshotHash'])) {
            $model->parentSnapshotHash = $map['ParentSnapshotHash'];
        }
        if (isset($map['MachineInfoJson'])) {
            $model->machineInfoJson = $map['MachineInfoJson'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PlanId'])) {
            $model->planId = $map['PlanId'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }
        if (isset($map['ParentHash'])) {
            $model->parentHash = $map['ParentHash'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }
        if (isset($map['ErrorFile'])) {
            $model->errorFile = $map['ErrorFile'];
        }
        if (isset($map['SnapshotType'])) {
            $model->snapshotType = $map['SnapshotType'];
        }
        if (isset($map['SnapshotName'])) {
            $model->snapshotName = $map['SnapshotName'];
        }
        if (isset($map['SnapshotOption'])) {
            $model->snapshotOption = $map['SnapshotOption'];
        }
        if (isset($map['UpdatedTime'])) {
            $model->updatedTime = $map['UpdatedTime'];
        }
        if (isset($map['SnapshotId'])) {
            $model->snapshotId = $map['SnapshotId'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['ErrorCount'])) {
            $model->errorCount = $map['ErrorCount'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['ItemsTotal'])) {
            $model->itemsTotal = $map['ItemsTotal'];
        }
        if (isset($map['BytesDone'])) {
            $model->bytesDone = $map['BytesDone'];
        }
        if (isset($map['Paths'])) {
            if (!empty($map['Paths'])) {
                $model->paths = $map['Paths'];
            }
        }

        return $model;
    }
}
