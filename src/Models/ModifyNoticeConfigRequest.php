<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ModifyNoticeConfigRequest extends Model
{
    /**
     * @description The identifier of the notification item. Valid values:
     *
     *   **yundun_security_Weekreport**: notification for vulnerabilities
     *   **yundun_sas_antiransomware_task**: notification for results of restoration tasks
     *   **sas_healthcheck**: notification for baseline checks
     *   **sas_suspicious**: notification for alerts generated by Security Center
     *   **yundun_aegis_AV_true**: notification for precision defense
     *   **yundun_sas_ak_leakage**: notification for AccessKey pair leaks
     *   **yundun_sas_config_alert**: notification for configuration assessment
     *   **yundun_sas_vul_Emergency**: notification for urgent vulnerabilities
     *   **yundun_webguard_event**: notification for web tamper proofing
     *   **yundun_sas_cloud_native_firewall**: notification for alerts generated by the container firewall feature
     *   **yundun_sas_cloud_native_firewall_Defense**: notification for proactive defense implemented by the container firewall feature
     *   **yundun_IP_Blocking**: notification for blocked brute-force attacks initiated from malicious IP addresses
     *   **yundun_sas_anti_virus_config**: notification for virus scan
     *   **yundun_sas_log**: notification for excess logs
     *   **yundun_honeypot_alarm**: notification for alerts generated by the honeypot feature
     *   **aliyun_rasp_alarm**: notification for alerts generated by the application security feature
     *   **virusScheduleTask**: notification for completion of scheduled virus scans
     *   **yundun_anti_Virus**: notification that no security checks are performed
     *   **sas_vulnerability**: notification for vulnerabilities
     *   **weeklyreport**: notification for weekly reports
     *   **agent**: notification that the Security Center agent is offline
     *   **bruteforcesuccess**: notification for protection against brute-force attacks
     *   **webshell**: notification for webshells
     *   **suspicious**: notification for alerts generated by Server Guard
     *   **patch**: deprecated
     *   **remotelogin**: notification for remote logons
     *   **health**: notification for security checks
     *   **yundun_sas_cloudsiem_log**: notifications of insufficient threat analysis log capacity
     *
     * > If the value is **yundun_security_Weekreport**, weekly reports are sent to notify you of unhandled vulnerabilities.
     *
     * @example yundun_webguard_event
     *
     * @var string
     */
    public $project;

    /**
     * @description The notification method. Valid values:
     *
     *   **1**: text message
     *   **2**: email
     *   **4**: internal message
     *   **3**: text message and email
     *   **5**: text message and internal message
     *   **6**: email and internal message
     *   **7**: text message, email, and internal message
     *
     * @example 4
     *
     * @var int
     */
    public $route;

    /**
     * @description The source IP address of the request.
     *
     * @example 42.178.XX.XX
     *
     * @var string
     */
    public $sourceIp;

    /**
     * @description The time period during which Security Center sends notifications. Valid values:
     *
     *   **0**: any time
     *   **1**: 08:00 to 22:00
     *
     * @example 1
     *
     * @var int
     */
    public $timeLimit;
    protected $_name = [
        'project' => 'Project',
        'route' => 'Route',
        'sourceIp' => 'SourceIp',
        'timeLimit' => 'TimeLimit',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->project) {
            $res['Project'] = $this->project;
        }
        if (null !== $this->route) {
            $res['Route'] = $this->route;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->timeLimit) {
            $res['TimeLimit'] = $this->timeLimit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyNoticeConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Project'])) {
            $model->project = $map['Project'];
        }
        if (isset($map['Route'])) {
            $model->route = $map['Route'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['TimeLimit'])) {
            $model->timeLimit = $map['TimeLimit'];
        }

        return $model;
    }
}
