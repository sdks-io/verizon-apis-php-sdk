<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models;

use stdClass;

/**
 * The notification details of the trigger.
 */
class TriggerNotification implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $notificationType;

    /**
     * @var bool|null
     */
    private $callback;

    /**
     * @var bool|null
     */
    private $emailNotification;

    /**
     * @var string|null
     */
    private $notificationGroupName;

    /**
     * @var int|null
     */
    private $notificationFrequencyFactor;

    /**
     * @var string|null
     */
    private $notificationFrequencyInterval;

    /**
     * @var string|null
     */
    private $externalEmailRecipients;

    /**
     * @var bool|null
     */
    private $smsNotification;

    /**
     * @var SMSNumber[]|null
     */
    private $smsNumbers;

    /**
     * @var bool|null
     */
    private $reminder;

    /**
     * @var string|null
     */
    private $severity;

    /**
     * Returns Notification Type.
     * The type of notification, i.e. 'DailySummary'.
     */
    public function getNotificationType(): ?string
    {
        return $this->notificationType;
    }

    /**
     * Sets Notification Type.
     * The type of notification, i.e. 'DailySummary'.
     *
     * @maps notificationType
     */
    public function setNotificationType(?string $notificationType): void
    {
        $this->notificationType = $notificationType;
    }

    /**
     * Returns Callback.
     * Whether or not the notification should be sent via callback.<br />true<br />false.
     */
    public function getCallback(): ?bool
    {
        return $this->callback;
    }

    /**
     * Sets Callback.
     * Whether or not the notification should be sent via callback.<br />true<br />false.
     *
     * @maps callback
     */
    public function setCallback(?bool $callback): void
    {
        $this->callback = $callback;
    }

    /**
     * Returns Email Notification.
     * Whether or not the notification should be sent via e-mail.<br />true<br />false.
     */
    public function getEmailNotification(): ?bool
    {
        return $this->emailNotification;
    }

    /**
     * Sets Email Notification.
     * Whether or not the notification should be sent via e-mail.<br />true<br />false.
     *
     * @maps emailNotification
     */
    public function setEmailNotification(?bool $emailNotification): void
    {
        $this->emailNotification = $emailNotification;
    }

    /**
     * Returns Notification Group Name.
     * Name for the notification group.
     */
    public function getNotificationGroupName(): ?string
    {
        return $this->notificationGroupName;
    }

    /**
     * Sets Notification Group Name.
     * Name for the notification group.
     *
     * @maps notificationGroupName
     */
    public function setNotificationGroupName(?string $notificationGroupName): void
    {
        $this->notificationGroupName = $notificationGroupName;
    }

    /**
     * Returns Notification Frequency Factor.
     * Frequency factor for notification.
     */
    public function getNotificationFrequencyFactor(): ?int
    {
        return $this->notificationFrequencyFactor;
    }

    /**
     * Sets Notification Frequency Factor.
     * Frequency factor for notification.
     *
     * @maps notificationFrequencyFactor
     */
    public function setNotificationFrequencyFactor(?int $notificationFrequencyFactor): void
    {
        $this->notificationFrequencyFactor = $notificationFrequencyFactor;
    }

    /**
     * Returns Notification Frequency Interval.
     * Frequency interval for notification.
     */
    public function getNotificationFrequencyInterval(): ?string
    {
        return $this->notificationFrequencyInterval;
    }

    /**
     * Sets Notification Frequency Interval.
     * Frequency interval for notification.
     *
     * @maps notificationFrequencyInterval
     */
    public function setNotificationFrequencyInterval(?string $notificationFrequencyInterval): void
    {
        $this->notificationFrequencyInterval = $notificationFrequencyInterval;
    }

    /**
     * Returns External Email Recipients.
     * E-mail address(es) where the notification should be delivered.
     */
    public function getExternalEmailRecipients(): ?string
    {
        return $this->externalEmailRecipients;
    }

    /**
     * Sets External Email Recipients.
     * E-mail address(es) where the notification should be delivered.
     *
     * @maps externalEmailRecipients
     */
    public function setExternalEmailRecipients(?string $externalEmailRecipients): void
    {
        $this->externalEmailRecipients = $externalEmailRecipients;
    }

    /**
     * Returns Sms Notification.
     * SMS notification.
     */
    public function getSmsNotification(): ?bool
    {
        return $this->smsNotification;
    }

    /**
     * Sets Sms Notification.
     * SMS notification.
     *
     * @maps smsNotification
     */
    public function setSmsNotification(?bool $smsNotification): void
    {
        $this->smsNotification = $smsNotification;
    }

    /**
     * Returns Sms Numbers.
     * List of SMS numbers.
     *
     * @return SMSNumber[]|null
     */
    public function getSmsNumbers(): ?array
    {
        return $this->smsNumbers;
    }

    /**
     * Sets Sms Numbers.
     * List of SMS numbers.
     *
     * @maps smsNumbers
     *
     * @param SMSNumber[]|null $smsNumbers
     */
    public function setSmsNumbers(?array $smsNumbers): void
    {
        $this->smsNumbers = $smsNumbers;
    }

    /**
     * Returns Reminder.
     */
    public function getReminder(): ?bool
    {
        return $this->reminder;
    }

    /**
     * Sets Reminder.
     *
     * @maps reminder
     */
    public function setReminder(?bool $reminder): void
    {
        $this->reminder = $reminder;
    }

    /**
     * Returns Severity.
     * Severity level associated with the notification. Examples would be:<br />Major<br />Minor<br
     * />Critical<br />NotApplicable.
     */
    public function getSeverity(): ?string
    {
        return $this->severity;
    }

    /**
     * Sets Severity.
     * Severity level associated with the notification. Examples would be:<br />Major<br />Minor<br
     * />Critical<br />NotApplicable.
     *
     * @maps severity
     */
    public function setSeverity(?string $severity): void
    {
        $this->severity = $severity;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        if (isset($this->notificationType)) {
            $json['notificationType']              = $this->notificationType;
        }
        if (isset($this->callback)) {
            $json['callback']                      = $this->callback;
        }
        if (isset($this->emailNotification)) {
            $json['emailNotification']             = $this->emailNotification;
        }
        if (isset($this->notificationGroupName)) {
            $json['notificationGroupName']         = $this->notificationGroupName;
        }
        if (isset($this->notificationFrequencyFactor)) {
            $json['notificationFrequencyFactor']   = $this->notificationFrequencyFactor;
        }
        if (isset($this->notificationFrequencyInterval)) {
            $json['notificationFrequencyInterval'] = $this->notificationFrequencyInterval;
        }
        if (isset($this->externalEmailRecipients)) {
            $json['externalEmailRecipients']       = $this->externalEmailRecipients;
        }
        if (isset($this->smsNotification)) {
            $json['smsNotification']               = $this->smsNotification;
        }
        if (isset($this->smsNumbers)) {
            $json['smsNumbers']                    = $this->smsNumbers;
        }
        if (isset($this->reminder)) {
            $json['reminder']                      = $this->reminder;
        }
        if (isset($this->severity)) {
            $json['severity']                      = $this->severity;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
