<?php

/**
 * Transfer webhooks
 *
 * The version of the OpenAPI document: 4
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.1
 *
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Adyen\Model\TransferWebhooks;

use \ArrayAccess;
use Adyen\Model\TransferWebhooks\ObjectSerializer;

/**
 * TransferEvent Class Doc Comment
 *
 * @category Class
 * @package  Adyen
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class TransferEvent implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TransferEvent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'amount' => '\Adyen\Model\TransferWebhooks\Amount',
        'amountAdjustments' => '\Adyen\Model\TransferWebhooks\AmountAdjustment[]',
        'arn' => 'string',
        'bookingDate' => '\DateTime',
        'estimatedArrivalTime' => '\DateTime',
        'externalReason' => '\Adyen\Model\TransferWebhooks\ExternalReason',
        'id' => 'string',
        'modification' => '\Adyen\Model\TransferWebhooks\Modification',
        'mutations' => '\Adyen\Model\TransferWebhooks\BalanceMutation[]',
        'originalAmount' => '\Adyen\Model\TransferWebhooks\Amount',
        'reason' => 'string',
        'status' => 'string',
        'trackingData' => '\Adyen\Model\TransferWebhooks\TransferEventTrackingData',
        'transactionId' => 'string',
        'type' => 'string',
        'updateDate' => '\DateTime',
        'valueDate' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'amount' => null,
        'amountAdjustments' => null,
        'arn' => null,
        'bookingDate' => 'date-time',
        'estimatedArrivalTime' => 'date-time',
        'externalReason' => null,
        'id' => null,
        'modification' => null,
        'mutations' => null,
        'originalAmount' => null,
        'reason' => null,
        'status' => null,
        'trackingData' => null,
        'transactionId' => null,
        'type' => null,
        'updateDate' => 'date-time',
        'valueDate' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'amount' => false,
        'amountAdjustments' => false,
        'arn' => false,
        'bookingDate' => false,
        'estimatedArrivalTime' => false,
        'externalReason' => false,
        'id' => false,
        'modification' => false,
        'mutations' => false,
        'originalAmount' => false,
        'reason' => false,
        'status' => false,
        'trackingData' => false,
        'transactionId' => false,
        'type' => false,
        'updateDate' => false,
        'valueDate' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'amount' => 'amount',
        'amountAdjustments' => 'amountAdjustments',
        'arn' => 'arn',
        'bookingDate' => 'bookingDate',
        'estimatedArrivalTime' => 'estimatedArrivalTime',
        'externalReason' => 'externalReason',
        'id' => 'id',
        'modification' => 'modification',
        'mutations' => 'mutations',
        'originalAmount' => 'originalAmount',
        'reason' => 'reason',
        'status' => 'status',
        'trackingData' => 'trackingData',
        'transactionId' => 'transactionId',
        'type' => 'type',
        'updateDate' => 'updateDate',
        'valueDate' => 'valueDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount' => 'setAmount',
        'amountAdjustments' => 'setAmountAdjustments',
        'arn' => 'setArn',
        'bookingDate' => 'setBookingDate',
        'estimatedArrivalTime' => 'setEstimatedArrivalTime',
        'externalReason' => 'setExternalReason',
        'id' => 'setId',
        'modification' => 'setModification',
        'mutations' => 'setMutations',
        'originalAmount' => 'setOriginalAmount',
        'reason' => 'setReason',
        'status' => 'setStatus',
        'trackingData' => 'setTrackingData',
        'transactionId' => 'setTransactionId',
        'type' => 'setType',
        'updateDate' => 'setUpdateDate',
        'valueDate' => 'setValueDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount' => 'getAmount',
        'amountAdjustments' => 'getAmountAdjustments',
        'arn' => 'getArn',
        'bookingDate' => 'getBookingDate',
        'estimatedArrivalTime' => 'getEstimatedArrivalTime',
        'externalReason' => 'getExternalReason',
        'id' => 'getId',
        'modification' => 'getModification',
        'mutations' => 'getMutations',
        'originalAmount' => 'getOriginalAmount',
        'reason' => 'getReason',
        'status' => 'getStatus',
        'trackingData' => 'getTrackingData',
        'transactionId' => 'getTransactionId',
        'type' => 'getType',
        'updateDate' => 'getUpdateDate',
        'valueDate' => 'getValueDate'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    public const REASON_ACCOUNT_HIERARCHY_NOT_ACTIVE = 'accountHierarchyNotActive';
    public const REASON_AMOUNT_LIMIT_EXCEEDED = 'amountLimitExceeded';
    public const REASON_APPROVED = 'approved';
    public const REASON_BALANCE_ACCOUNT_TEMPORARILY_BLOCKED_BY_TRANSACTION_RULE = 'balanceAccountTemporarilyBlockedByTransactionRule';
    public const REASON_COUNTERPARTY_ACCOUNT_BLOCKED = 'counterpartyAccountBlocked';
    public const REASON_COUNTERPARTY_ACCOUNT_CLOSED = 'counterpartyAccountClosed';
    public const REASON_COUNTERPARTY_ACCOUNT_NOT_FOUND = 'counterpartyAccountNotFound';
    public const REASON_COUNTERPARTY_ADDRESS_REQUIRED = 'counterpartyAddressRequired';
    public const REASON_COUNTERPARTY_BANK_TIMED_OUT = 'counterpartyBankTimedOut';
    public const REASON_COUNTERPARTY_BANK_UNAVAILABLE = 'counterpartyBankUnavailable';
    public const REASON_DECLINED = 'declined';
    public const REASON_DECLINED_BY_TRANSACTION_RULE = 'declinedByTransactionRule';
    public const REASON_DIRECT_DEBIT_NOT_SUPPORTED = 'directDebitNotSupported';
    public const REASON_ERROR = 'error';
    public const REASON_NOT_ENOUGH_BALANCE = 'notEnoughBalance';
    public const REASON_PENDING_APPROVAL = 'pendingApproval';
    public const REASON_PENDING_EXECUTION = 'pendingExecution';
    public const REASON_REFUSED_BY_COUNTERPARTY_BANK = 'refusedByCounterpartyBank';
    public const REASON_ROUTE_NOT_FOUND = 'routeNotFound';
    public const REASON_SCA_FAILED = 'scaFailed';
    public const REASON_TRANSFER_INSTRUMENT_DOES_NOT_EXIST = 'transferInstrumentDoesNotExist';
    public const REASON_UNKNOWN = 'unknown';
    public const STATUS_APPROVAL_PENDING = 'approvalPending';
    public const STATUS_ATM_WITHDRAWAL = 'atmWithdrawal';
    public const STATUS_ATM_WITHDRAWAL_REVERSAL_PENDING = 'atmWithdrawalReversalPending';
    public const STATUS_ATM_WITHDRAWAL_REVERSED = 'atmWithdrawalReversed';
    public const STATUS_AUTH_ADJUSTMENT_AUTHORISED = 'authAdjustmentAuthorised';
    public const STATUS_AUTH_ADJUSTMENT_ERROR = 'authAdjustmentError';
    public const STATUS_AUTH_ADJUSTMENT_REFUSED = 'authAdjustmentRefused';
    public const STATUS_AUTHORISED = 'authorised';
    public const STATUS_BANK_TRANSFER = 'bankTransfer';
    public const STATUS_BANK_TRANSFER_PENDING = 'bankTransferPending';
    public const STATUS_BOOKED = 'booked';
    public const STATUS_BOOKING_PENDING = 'bookingPending';
    public const STATUS_CANCELLED = 'cancelled';
    public const STATUS_CAPTURE_PENDING = 'capturePending';
    public const STATUS_CAPTURE_REVERSAL_PENDING = 'captureReversalPending';
    public const STATUS_CAPTURE_REVERSED = 'captureReversed';
    public const STATUS_CAPTURED = 'captured';
    public const STATUS_CAPTURED_EXTERNALLY = 'capturedExternally';
    public const STATUS_CHARGEBACK = 'chargeback';
    public const STATUS_CHARGEBACK_EXTERNALLY = 'chargebackExternally';
    public const STATUS_CHARGEBACK_PENDING = 'chargebackPending';
    public const STATUS_CHARGEBACK_REVERSAL_PENDING = 'chargebackReversalPending';
    public const STATUS_CHARGEBACK_REVERSED = 'chargebackReversed';
    public const STATUS_CREDITED = 'credited';
    public const STATUS_DEPOSIT_CORRECTION = 'depositCorrection';
    public const STATUS_DEPOSIT_CORRECTION_PENDING = 'depositCorrectionPending';
    public const STATUS_DISPUTE = 'dispute';
    public const STATUS_DISPUTE_CLOSED = 'disputeClosed';
    public const STATUS_DISPUTE_EXPIRED = 'disputeExpired';
    public const STATUS_DISPUTE_NEEDS_REVIEW = 'disputeNeedsReview';
    public const STATUS_ERROR = 'error';
    public const STATUS_EXPIRED = 'expired';
    public const STATUS_FAILED = 'failed';
    public const STATUS_FEE = 'fee';
    public const STATUS_FEE_PENDING = 'feePending';
    public const STATUS_INTERNAL_TRANSFER = 'internalTransfer';
    public const STATUS_INTERNAL_TRANSFER_PENDING = 'internalTransferPending';
    public const STATUS_INVOICE_DEDUCTION = 'invoiceDeduction';
    public const STATUS_INVOICE_DEDUCTION_PENDING = 'invoiceDeductionPending';
    public const STATUS_MANUAL_CORRECTION_PENDING = 'manualCorrectionPending';
    public const STATUS_MANUALLY_CORRECTED = 'manuallyCorrected';
    public const STATUS_MATCHED_STATEMENT = 'matchedStatement';
    public const STATUS_MATCHED_STATEMENT_PENDING = 'matchedStatementPending';
    public const STATUS_MERCHANT_PAYIN = 'merchantPayin';
    public const STATUS_MERCHANT_PAYIN_PENDING = 'merchantPayinPending';
    public const STATUS_MERCHANT_PAYIN_REVERSED = 'merchantPayinReversed';
    public const STATUS_MERCHANT_PAYIN_REVERSED_PENDING = 'merchantPayinReversedPending';
    public const STATUS_MISC_COST = 'miscCost';
    public const STATUS_MISC_COST_PENDING = 'miscCostPending';
    public const STATUS_PAYMENT_COST = 'paymentCost';
    public const STATUS_PAYMENT_COST_PENDING = 'paymentCostPending';
    public const STATUS_PENDING_APPROVAL = 'pendingApproval';
    public const STATUS_PENDING_EXECUTION = 'pendingExecution';
    public const STATUS_RECEIVED = 'received';
    public const STATUS_REFUND_PENDING = 'refundPending';
    public const STATUS_REFUND_REVERSAL_PENDING = 'refundReversalPending';
    public const STATUS_REFUND_REVERSED = 'refundReversed';
    public const STATUS_REFUNDED = 'refunded';
    public const STATUS_REFUNDED_EXTERNALLY = 'refundedExternally';
    public const STATUS_REFUSED = 'refused';
    public const STATUS_REJECTED = 'rejected';
    public const STATUS_RESERVE_ADJUSTMENT = 'reserveAdjustment';
    public const STATUS_RESERVE_ADJUSTMENT_PENDING = 'reserveAdjustmentPending';
    public const STATUS_RETURNED = 'returned';
    public const STATUS_SECOND_CHARGEBACK = 'secondChargeback';
    public const STATUS_SECOND_CHARGEBACK_PENDING = 'secondChargebackPending';
    public const STATUS_UNDEFINED = 'undefined';
    public const TYPE_ACCOUNTING = 'accounting';
    public const TYPE_TRACKING = 'tracking';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getReasonAllowableValues()
    {
        return [
            self::REASON_ACCOUNT_HIERARCHY_NOT_ACTIVE,
            self::REASON_AMOUNT_LIMIT_EXCEEDED,
            self::REASON_APPROVED,
            self::REASON_BALANCE_ACCOUNT_TEMPORARILY_BLOCKED_BY_TRANSACTION_RULE,
            self::REASON_COUNTERPARTY_ACCOUNT_BLOCKED,
            self::REASON_COUNTERPARTY_ACCOUNT_CLOSED,
            self::REASON_COUNTERPARTY_ACCOUNT_NOT_FOUND,
            self::REASON_COUNTERPARTY_ADDRESS_REQUIRED,
            self::REASON_COUNTERPARTY_BANK_TIMED_OUT,
            self::REASON_COUNTERPARTY_BANK_UNAVAILABLE,
            self::REASON_DECLINED,
            self::REASON_DECLINED_BY_TRANSACTION_RULE,
            self::REASON_DIRECT_DEBIT_NOT_SUPPORTED,
            self::REASON_ERROR,
            self::REASON_NOT_ENOUGH_BALANCE,
            self::REASON_PENDING_APPROVAL,
            self::REASON_PENDING_EXECUTION,
            self::REASON_REFUSED_BY_COUNTERPARTY_BANK,
            self::REASON_ROUTE_NOT_FOUND,
            self::REASON_SCA_FAILED,
            self::REASON_TRANSFER_INSTRUMENT_DOES_NOT_EXIST,
            self::REASON_UNKNOWN,
        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_APPROVAL_PENDING,
            self::STATUS_ATM_WITHDRAWAL,
            self::STATUS_ATM_WITHDRAWAL_REVERSAL_PENDING,
            self::STATUS_ATM_WITHDRAWAL_REVERSED,
            self::STATUS_AUTH_ADJUSTMENT_AUTHORISED,
            self::STATUS_AUTH_ADJUSTMENT_ERROR,
            self::STATUS_AUTH_ADJUSTMENT_REFUSED,
            self::STATUS_AUTHORISED,
            self::STATUS_BANK_TRANSFER,
            self::STATUS_BANK_TRANSFER_PENDING,
            self::STATUS_BOOKED,
            self::STATUS_BOOKING_PENDING,
            self::STATUS_CANCELLED,
            self::STATUS_CAPTURE_PENDING,
            self::STATUS_CAPTURE_REVERSAL_PENDING,
            self::STATUS_CAPTURE_REVERSED,
            self::STATUS_CAPTURED,
            self::STATUS_CAPTURED_EXTERNALLY,
            self::STATUS_CHARGEBACK,
            self::STATUS_CHARGEBACK_EXTERNALLY,
            self::STATUS_CHARGEBACK_PENDING,
            self::STATUS_CHARGEBACK_REVERSAL_PENDING,
            self::STATUS_CHARGEBACK_REVERSED,
            self::STATUS_CREDITED,
            self::STATUS_DEPOSIT_CORRECTION,
            self::STATUS_DEPOSIT_CORRECTION_PENDING,
            self::STATUS_DISPUTE,
            self::STATUS_DISPUTE_CLOSED,
            self::STATUS_DISPUTE_EXPIRED,
            self::STATUS_DISPUTE_NEEDS_REVIEW,
            self::STATUS_ERROR,
            self::STATUS_EXPIRED,
            self::STATUS_FAILED,
            self::STATUS_FEE,
            self::STATUS_FEE_PENDING,
            self::STATUS_INTERNAL_TRANSFER,
            self::STATUS_INTERNAL_TRANSFER_PENDING,
            self::STATUS_INVOICE_DEDUCTION,
            self::STATUS_INVOICE_DEDUCTION_PENDING,
            self::STATUS_MANUAL_CORRECTION_PENDING,
            self::STATUS_MANUALLY_CORRECTED,
            self::STATUS_MATCHED_STATEMENT,
            self::STATUS_MATCHED_STATEMENT_PENDING,
            self::STATUS_MERCHANT_PAYIN,
            self::STATUS_MERCHANT_PAYIN_PENDING,
            self::STATUS_MERCHANT_PAYIN_REVERSED,
            self::STATUS_MERCHANT_PAYIN_REVERSED_PENDING,
            self::STATUS_MISC_COST,
            self::STATUS_MISC_COST_PENDING,
            self::STATUS_PAYMENT_COST,
            self::STATUS_PAYMENT_COST_PENDING,
            self::STATUS_PENDING_APPROVAL,
            self::STATUS_PENDING_EXECUTION,
            self::STATUS_RECEIVED,
            self::STATUS_REFUND_PENDING,
            self::STATUS_REFUND_REVERSAL_PENDING,
            self::STATUS_REFUND_REVERSED,
            self::STATUS_REFUNDED,
            self::STATUS_REFUNDED_EXTERNALLY,
            self::STATUS_REFUSED,
            self::STATUS_REJECTED,
            self::STATUS_RESERVE_ADJUSTMENT,
            self::STATUS_RESERVE_ADJUSTMENT_PENDING,
            self::STATUS_RETURNED,
            self::STATUS_SECOND_CHARGEBACK,
            self::STATUS_SECOND_CHARGEBACK_PENDING,
            self::STATUS_UNDEFINED,
        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_ACCOUNTING,
            self::TYPE_TRACKING,
        ];
    }
    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('amountAdjustments', $data ?? [], null);
        $this->setIfExists('arn', $data ?? [], null);
        $this->setIfExists('bookingDate', $data ?? [], null);
        $this->setIfExists('estimatedArrivalTime', $data ?? [], null);
        $this->setIfExists('externalReason', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('modification', $data ?? [], null);
        $this->setIfExists('mutations', $data ?? [], null);
        $this->setIfExists('originalAmount', $data ?? [], null);
        $this->setIfExists('reason', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('trackingData', $data ?? [], null);
        $this->setIfExists('transactionId', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('updateDate', $data ?? [], null);
        $this->setIfExists('valueDate', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getReasonAllowableValues();
        if (!is_null($this->container['reason']) && !in_array($this->container['reason'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'reason', must be one of '%s'",
                $this->container['reason'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets amount
     *
     * @return \Adyen\Model\TransferWebhooks\Amount|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param \Adyen\Model\TransferWebhooks\Amount|null $amount amount
     *
     * @return self
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets amountAdjustments
     *
     * @return \Adyen\Model\TransferWebhooks\AmountAdjustment[]|null
     */
    public function getAmountAdjustments()
    {
        return $this->container['amountAdjustments'];
    }

    /**
     * Sets amountAdjustments
     *
     * @param \Adyen\Model\TransferWebhooks\AmountAdjustment[]|null $amountAdjustments The amount adjustments in this transfer.
     *
     * @return self
     */
    public function setAmountAdjustments($amountAdjustments)
    {
        $this->container['amountAdjustments'] = $amountAdjustments;

        return $this;
    }

    /**
     * Gets arn
     *
     * @return string|null
     */
    public function getArn()
    {
        return $this->container['arn'];
    }

    /**
     * Sets arn
     *
     * @param string|null $arn Scheme unique arn identifier useful for tracing captures, chargebacks, refunds, etc.
     *
     * @return self
     */
    public function setArn($arn)
    {
        $this->container['arn'] = $arn;

        return $this;
    }

    /**
     * Gets bookingDate
     *
     * @return \DateTime|null
     */
    public function getBookingDate()
    {
        return $this->container['bookingDate'];
    }

    /**
     * Sets bookingDate
     *
     * @param \DateTime|null $bookingDate The date when the transfer request was sent.
     *
     * @return self
     */
    public function setBookingDate($bookingDate)
    {
        $this->container['bookingDate'] = $bookingDate;

        return $this;
    }

    /**
     * Gets estimatedArrivalTime
     *
     * @return \DateTime|null
     */
    public function getEstimatedArrivalTime()
    {
        return $this->container['estimatedArrivalTime'];
    }

    /**
     * Sets estimatedArrivalTime
     *
     * @param \DateTime|null $estimatedArrivalTime The estimated time when the beneficiary should have access to the funds.
     *
     * @return self
     */
    public function setEstimatedArrivalTime($estimatedArrivalTime)
    {
        $this->container['estimatedArrivalTime'] = $estimatedArrivalTime;

        return $this;
    }

    /**
     * Gets externalReason
     *
     * @return \Adyen\Model\TransferWebhooks\ExternalReason|null
     */
    public function getExternalReason()
    {
        return $this->container['externalReason'];
    }

    /**
     * Sets externalReason
     *
     * @param \Adyen\Model\TransferWebhooks\ExternalReason|null $externalReason externalReason
     *
     * @return self
     */
    public function setExternalReason($externalReason)
    {
        $this->container['externalReason'] = $externalReason;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id The unique identifier of the transfer event.
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets modification
     *
     * @return \Adyen\Model\TransferWebhooks\Modification|null
     */
    public function getModification()
    {
        return $this->container['modification'];
    }

    /**
     * Sets modification
     *
     * @param \Adyen\Model\TransferWebhooks\Modification|null $modification modification
     *
     * @return self
     */
    public function setModification($modification)
    {
        $this->container['modification'] = $modification;

        return $this;
    }

    /**
     * Gets mutations
     *
     * @return \Adyen\Model\TransferWebhooks\BalanceMutation[]|null
     */
    public function getMutations()
    {
        return $this->container['mutations'];
    }

    /**
     * Sets mutations
     *
     * @param \Adyen\Model\TransferWebhooks\BalanceMutation[]|null $mutations The list of balance mutations per event.
     *
     * @return self
     */
    public function setMutations($mutations)
    {
        $this->container['mutations'] = $mutations;

        return $this;
    }

    /**
     * Gets originalAmount
     *
     * @return \Adyen\Model\TransferWebhooks\Amount|null
     */
    public function getOriginalAmount()
    {
        return $this->container['originalAmount'];
    }

    /**
     * Sets originalAmount
     *
     * @param \Adyen\Model\TransferWebhooks\Amount|null $originalAmount originalAmount
     *
     * @return self
     */
    public function setOriginalAmount($originalAmount)
    {
        $this->container['originalAmount'] = $originalAmount;

        return $this;
    }

    /**
     * Gets reason
     *
     * @return string|null
     */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
     * Sets reason
     *
     * @param string|null $reason The reason for the transfer status.
     *
     * @return self
     */
    public function setReason($reason)
    {
        $allowedValues = $this->getReasonAllowableValues();
        if (!in_array($reason, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'reason', must be one of '%s'",
                    $reason,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['reason'] = $reason;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status The status of the transfer event.
     *
     * @return self
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status', must be one of '%s'",
                    $status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets trackingData
     *
     * @return \Adyen\Model\TransferWebhooks\TransferEventTrackingData|null
     */
    public function getTrackingData()
    {
        return $this->container['trackingData'];
    }

    /**
     * Sets trackingData
     *
     * @param \Adyen\Model\TransferWebhooks\TransferEventTrackingData|null $trackingData trackingData
     *
     * @return self
     */
    public function setTrackingData($trackingData)
    {
        $this->container['trackingData'] = $trackingData;

        return $this;
    }

    /**
     * Gets transactionId
     *
     * @return string|null
     */
    public function getTransactionId()
    {
        return $this->container['transactionId'];
    }

    /**
     * Sets transactionId
     *
     * @param string|null $transactionId The id of the transaction that is related to this accounting event. Only sent for events of type **accounting** where the balance changes.
     *
     * @return self
     */
    public function setTransactionId($transactionId)
    {
        $this->container['transactionId'] = $transactionId;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type The type of the transfer event. Possible values: **accounting**, **tracking**.
     *
     * @return self
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets updateDate
     *
     * @return \DateTime|null
     */
    public function getUpdateDate()
    {
        return $this->container['updateDate'];
    }

    /**
     * Sets updateDate
     *
     * @param \DateTime|null $updateDate The date when the tracking status was updated.
     *
     * @return self
     */
    public function setUpdateDate($updateDate)
    {
        $this->container['updateDate'] = $updateDate;

        return $this;
    }

    /**
     * Gets valueDate
     *
     * @return \DateTime|null
     */
    public function getValueDate()
    {
        return $this->container['valueDate'];
    }

    /**
     * Sets valueDate
     *
     * @param \DateTime|null $valueDate A future date, when the funds are expected to be deducted from or credited to the balance account.
     *
     * @return self
     */
    public function setValueDate($valueDate)
    {
        $this->container['valueDate'] = $valueDate;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        return ObjectSerializer::sanitizeForSerialization($this);
    }

    public function toArray(): array
    {
        $array = [];
        foreach (self::$openAPITypes as $propertyName => $propertyType) {
            $propertyValue = $this[$propertyName];
            if ($propertyValue !== null) {
                // Check if the property value is an object and has a toArray() method
                if (is_object($propertyValue) && method_exists($propertyValue, 'toArray')) {
                    $array[$propertyName] = $propertyValue->toArray();
                // Check if it's type datetime
                } elseif ($propertyValue instanceof \DateTime) {
                    $array[$propertyName] = $propertyValue->format(DATE_ATOM);
                // If it's an array type we should check whether it contains objects and if so call toArray method
                } elseif (is_array($propertyValue)) {
                    $array[$propertyName] = array_map(function ($item) {
                        return $item instanceof ModelInterface ? $item->toArray() : $item;
                    }, $propertyValue);
                } else {
                    // Otherwise, directly assign the property value to the array
                    $array[$propertyName] = $propertyValue;
                }
            }
        }
        return $array;
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}
