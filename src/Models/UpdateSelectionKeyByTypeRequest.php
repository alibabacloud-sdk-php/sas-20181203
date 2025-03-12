<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class UpdateSelectionKeyByTypeRequest extends Model
{
    /**
     * @description The business type of the asset selection. Valid value:
     *
     *   **VIRUS_SCAN_CYCLE_CONFIG**: virus detection configuration.
     *   **VIRUS_SCAN_ONCE_TASK**: one-time scan for virus detection.
     *   **AGENTLESS_MALICIOUS_WHITE_LIST_[ID]**: a whitelist rule for alerts that are generated by the agentless detection feature.
     *   **AGENTLESS_VUL_WHITE_LIST_[ID]**: a whitelist rule for vulnerabilities that are detected by the agentless detection feature.
     *   **FILE_PROTECT_RULE_SWITCH_TYPE_[ID]**: key file protection.
     *
     * @example VIRUS_SCAN_CYCLE_CONFIG
     *
     * @var string
     */
    public $businessType;

    /**
     * @description The unique identifier of the asset selection.
     *
     * @example 614d179e-4776-4939-a04a-d842ce64****
     *
     * @var string
     */
    public $selectionKey;
    protected $_name = [
        'businessType' => 'BusinessType',
        'selectionKey' => 'SelectionKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->businessType) {
            $res['BusinessType'] = $this->businessType;
        }
        if (null !== $this->selectionKey) {
            $res['SelectionKey'] = $this->selectionKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateSelectionKeyByTypeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BusinessType'])) {
            $model->businessType = $map['BusinessType'];
        }
        if (isset($map['SelectionKey'])) {
            $model->selectionKey = $map['SelectionKey'];
        }

        return $model;
    }
}
