<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSnapshotsResponseBody;

use AlibabaCloud\Tea\Model;

class snapshots extends Model
{
    /**
     * @description The actual data amount of backup snapshots after duplicates are removed. Unit: bytes.
     *
     * @example 686188****
     *
     * @var int
     */
    public $actualBytes;

    /**
     * @description The actual number of backup objects.
     *
     * >  This parameter is available only for file backup.
     *
     * @example 123
     *
     * @var int
     */
    public $actualItems;

    /**
     * @description The actual amount of data that is generated by incremental backup. Unit: bytes.
     *
     * @example 800
     *
     * @var int
     */
    public $bytesDone;

    /**
     * @description The total data amount of the data source. Unit: bytes.
     *
     * @example 3484541815****
     *
     * @var int
     */
    public $bytesTotal;

    /**
     * @description This parameter is returned only if the value of the **SourceType** parameter is **ECS_FILE**. This parameter indicates the ID of the Hybrid Backup Recovery (HBR) agent.
     *
     * @example c-000dbefaw9f7gnbw****
     *
     * @var string
     */
    public $clientId;

    /**
     * @description The version of the anti-ransomware agent.
     *
     * @example 2.10.0
     *
     * @var string
     */
    public $clientVersion;

    /**
     * @description The time when the backup snapshot was created. The value is a UNIX timestamp. Unit: seconds.
     *
     * @example 1646793988
     *
     * @var int
     */
    public $createdTime;

    /**
     * @description The file that records the information about backup failures, including the information about partially completed backup tasks.
     *
     * @example s-0008ndhgrflh55i5****.csv
     *
     * @var string
     */
    public $errorFile;

    /**
     * @description The ID of the ECS instance.
     *
     * @example i-2ze78zfakirgh1yl****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The number of backup objects.
     *
     * >  This parameter is available only for file backup.
     *
     * @example 6
     *
     * @var int
     */
    public $itemsDone;

    /**
     * @description The total number of objects in the data source.
     *
     * >  This parameter is available only for file backup.
     *
     * @example 7
     *
     * @var int
     */
    public $itemsTotal;

    /**
     * @description The ID of the backup task.
     *
     * @example job-000a2q5vg6awgo01****
     *
     * @var string
     */
    public $jobId;

    /**
     * @description The hash value of the parent backup snapshot.
     *
     * @example a0181606689c9562f092b3190bddb8a62bb5a24784424ba2102bc7fe92ae****
     *
     * @var string
     */
    public $parentSnapshotHash;

    /**
     * @description This parameter is returned only if the value of the **SourceType** parameter is **ECS_FILE**. This parameter indicates the path to the backup files.
     *
     * @example ["/home"]
     *
     * @var string
     */
    public $path;

    /**
     * @description This parameter is returned only if the value of the **SourceType** parameter is **NAS**. This parameter indicates the path to the backup files.
     *
     * @var string[]
     */
    public $paths;

    /**
     * @description The ID of the backup plan.
     *
     * @example plan-000ee8gh2ljelsnb****
     *
     * @var string
     */
    public $planId;

    /**
     * @description The ID of the region in which backup snapshot is stored.
     *
     * @example us-east-1
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The retention period of the backup snapshot.
     *
     * @example 7
     *
     * @var int
     */
    public $retention;

    /**
     * @description The hash value of the backup snapshot.
     *
     * @example 9ee47cf12351e4ddecce8c12f4957d3946cd96fbe24cd4ab264c7200839d****
     *
     * @var string
     */
    public $snapshotHash;

    /**
     * @description The ID of the backup snapshot.
     *
     * @example s-0003ahfuqpjdztsg****
     *
     * @var string
     */
    public $snapshotId;

    /**
     * @description The type of the data source. Valid values:
     *
     *   **ECS_FILE**: ECS files
     *   **OSS**: Object Storage Service (OSS) buckets
     *   **NAS**: File Storage NAS file systems
     *   **OTS_TABLE**: Tablestore instances
     *
     * @example ECS_FILE
     *
     * @var string
     */
    public $sourceType;

    /**
     * @description The status of backup tasks. Valid values:
     *
     *   **COMPLETE**: complete
     *   **PARTIAL_COMPLETE**: partial complete
     *   **FAILED**: failed
     *
     * @example COMPLETE
     *
     * @var string
     */
    public $status;

    /**
     * @description The UUID of the server.
     *
     * @example d332af48-1269-4a55-a6db-8543a80f****
     *
     * @var string
     */
    public $uuid;

    /**
     * @description The ID of the backup vault that stores the backup snapshot.
     *
     * @example v-000ccok3zmw7fbzz****
     *
     * @var string
     */
    public $vaultId;
    protected $_name = [
        'actualBytes' => 'ActualBytes',
        'actualItems' => 'ActualItems',
        'bytesDone' => 'BytesDone',
        'bytesTotal' => 'BytesTotal',
        'clientId' => 'ClientId',
        'clientVersion' => 'ClientVersion',
        'createdTime' => 'CreatedTime',
        'errorFile' => 'ErrorFile',
        'instanceId' => 'InstanceId',
        'itemsDone' => 'ItemsDone',
        'itemsTotal' => 'ItemsTotal',
        'jobId' => 'JobId',
        'parentSnapshotHash' => 'ParentSnapshotHash',
        'path' => 'Path',
        'paths' => 'Paths',
        'planId' => 'PlanId',
        'regionId' => 'RegionId',
        'retention' => 'Retention',
        'snapshotHash' => 'SnapshotHash',
        'snapshotId' => 'SnapshotId',
        'sourceType' => 'SourceType',
        'status' => 'Status',
        'uuid' => 'Uuid',
        'vaultId' => 'VaultId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->actualBytes) {
            $res['ActualBytes'] = $this->actualBytes;
        }
        if (null !== $this->actualItems) {
            $res['ActualItems'] = $this->actualItems;
        }
        if (null !== $this->bytesDone) {
            $res['BytesDone'] = $this->bytesDone;
        }
        if (null !== $this->bytesTotal) {
            $res['BytesTotal'] = $this->bytesTotal;
        }
        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }
        if (null !== $this->clientVersion) {
            $res['ClientVersion'] = $this->clientVersion;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->errorFile) {
            $res['ErrorFile'] = $this->errorFile;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->itemsDone) {
            $res['ItemsDone'] = $this->itemsDone;
        }
        if (null !== $this->itemsTotal) {
            $res['ItemsTotal'] = $this->itemsTotal;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->parentSnapshotHash) {
            $res['ParentSnapshotHash'] = $this->parentSnapshotHash;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->paths) {
            $res['Paths'] = $this->paths;
        }
        if (null !== $this->planId) {
            $res['PlanId'] = $this->planId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->retention) {
            $res['Retention'] = $this->retention;
        }
        if (null !== $this->snapshotHash) {
            $res['SnapshotHash'] = $this->snapshotHash;
        }
        if (null !== $this->snapshotId) {
            $res['SnapshotId'] = $this->snapshotId;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }
        if (null !== $this->vaultId) {
            $res['VaultId'] = $this->vaultId;
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
        if (isset($map['ActualBytes'])) {
            $model->actualBytes = $map['ActualBytes'];
        }
        if (isset($map['ActualItems'])) {
            $model->actualItems = $map['ActualItems'];
        }
        if (isset($map['BytesDone'])) {
            $model->bytesDone = $map['BytesDone'];
        }
        if (isset($map['BytesTotal'])) {
            $model->bytesTotal = $map['BytesTotal'];
        }
        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }
        if (isset($map['ClientVersion'])) {
            $model->clientVersion = $map['ClientVersion'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['ErrorFile'])) {
            $model->errorFile = $map['ErrorFile'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ItemsDone'])) {
            $model->itemsDone = $map['ItemsDone'];
        }
        if (isset($map['ItemsTotal'])) {
            $model->itemsTotal = $map['ItemsTotal'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['ParentSnapshotHash'])) {
            $model->parentSnapshotHash = $map['ParentSnapshotHash'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['Paths'])) {
            if (!empty($map['Paths'])) {
                $model->paths = $map['Paths'];
            }
        }
        if (isset($map['PlanId'])) {
            $model->planId = $map['PlanId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Retention'])) {
            $model->retention = $map['Retention'];
        }
        if (isset($map['SnapshotHash'])) {
            $model->snapshotHash = $map['SnapshotHash'];
        }
        if (isset($map['SnapshotId'])) {
            $model->snapshotId = $map['SnapshotId'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }
        if (isset($map['VaultId'])) {
            $model->vaultId = $map['VaultId'];
        }

        return $model;
    }
}
