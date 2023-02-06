<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models;

use stdClass;

/**
 * Response for voucher transactions
 *
 * @discriminator transaction_type
 * @discriminatorType voucher
 */
class GetVoucherTransactionResponse extends GetTransactionResponse implements \JsonSerializable
{
    /**
     * @var array
     */
    private $statementDescriptor = [];

    /**
     * @var array
     */
    private $acquirerName = [];

    /**
     * @var array
     */
    private $acquirerAffiliationCode = [];

    /**
     * @var array
     */
    private $acquirerTid = [];

    /**
     * @var array
     */
    private $acquirerNsu = [];

    /**
     * @var array
     */
    private $acquirerAuthCode = [];

    /**
     * @var array
     */
    private $acquirerMessage = [];

    /**
     * @var array
     */
    private $acquirerReturnCode = [];

    /**
     * @var array
     */
    private $operationType = [];

    /**
     * @var array
     */
    private $card = [];

    /**
     * Returns Statement Descriptor.
     * Text that will appear on the voucher's statement
     */
    public function getStatementDescriptor(): ?string
    {
        if (count($this->statementDescriptor) == 0) {
            return null;
        }
        return $this->statementDescriptor['value'];
    }

    /**
     * Sets Statement Descriptor.
     * Text that will appear on the voucher's statement
     *
     * @maps statement_descriptor
     */
    public function setStatementDescriptor(?string $statementDescriptor): void
    {
        $this->statementDescriptor['value'] = $statementDescriptor;
    }

    /**
     * Unsets Statement Descriptor.
     * Text that will appear on the voucher's statement
     */
    public function unsetStatementDescriptor(): void
    {
        $this->statementDescriptor = [];
    }

    /**
     * Returns Acquirer Name.
     * Acquirer name
     */
    public function getAcquirerName(): ?string
    {
        if (count($this->acquirerName) == 0) {
            return null;
        }
        return $this->acquirerName['value'];
    }

    /**
     * Sets Acquirer Name.
     * Acquirer name
     *
     * @maps acquirer_name
     */
    public function setAcquirerName(?string $acquirerName): void
    {
        $this->acquirerName['value'] = $acquirerName;
    }

    /**
     * Unsets Acquirer Name.
     * Acquirer name
     */
    public function unsetAcquirerName(): void
    {
        $this->acquirerName = [];
    }

    /**
     * Returns Acquirer Affiliation Code.
     * Acquirer affiliation code
     */
    public function getAcquirerAffiliationCode(): ?string
    {
        if (count($this->acquirerAffiliationCode) == 0) {
            return null;
        }
        return $this->acquirerAffiliationCode['value'];
    }

    /**
     * Sets Acquirer Affiliation Code.
     * Acquirer affiliation code
     *
     * @maps acquirer_affiliation_code
     */
    public function setAcquirerAffiliationCode(?string $acquirerAffiliationCode): void
    {
        $this->acquirerAffiliationCode['value'] = $acquirerAffiliationCode;
    }

    /**
     * Unsets Acquirer Affiliation Code.
     * Acquirer affiliation code
     */
    public function unsetAcquirerAffiliationCode(): void
    {
        $this->acquirerAffiliationCode = [];
    }

    /**
     * Returns Acquirer Tid.
     * Acquirer TID
     */
    public function getAcquirerTid(): ?string
    {
        if (count($this->acquirerTid) == 0) {
            return null;
        }
        return $this->acquirerTid['value'];
    }

    /**
     * Sets Acquirer Tid.
     * Acquirer TID
     *
     * @maps acquirer_tid
     */
    public function setAcquirerTid(?string $acquirerTid): void
    {
        $this->acquirerTid['value'] = $acquirerTid;
    }

    /**
     * Unsets Acquirer Tid.
     * Acquirer TID
     */
    public function unsetAcquirerTid(): void
    {
        $this->acquirerTid = [];
    }

    /**
     * Returns Acquirer Nsu.
     * Acquirer NSU
     */
    public function getAcquirerNsu(): ?string
    {
        if (count($this->acquirerNsu) == 0) {
            return null;
        }
        return $this->acquirerNsu['value'];
    }

    /**
     * Sets Acquirer Nsu.
     * Acquirer NSU
     *
     * @maps acquirer_nsu
     */
    public function setAcquirerNsu(?string $acquirerNsu): void
    {
        $this->acquirerNsu['value'] = $acquirerNsu;
    }

    /**
     * Unsets Acquirer Nsu.
     * Acquirer NSU
     */
    public function unsetAcquirerNsu(): void
    {
        $this->acquirerNsu = [];
    }

    /**
     * Returns Acquirer Auth Code.
     * Acquirer authorization code
     */
    public function getAcquirerAuthCode(): ?string
    {
        if (count($this->acquirerAuthCode) == 0) {
            return null;
        }
        return $this->acquirerAuthCode['value'];
    }

    /**
     * Sets Acquirer Auth Code.
     * Acquirer authorization code
     *
     * @maps acquirer_auth_code
     */
    public function setAcquirerAuthCode(?string $acquirerAuthCode): void
    {
        $this->acquirerAuthCode['value'] = $acquirerAuthCode;
    }

    /**
     * Unsets Acquirer Auth Code.
     * Acquirer authorization code
     */
    public function unsetAcquirerAuthCode(): void
    {
        $this->acquirerAuthCode = [];
    }

    /**
     * Returns Acquirer Message.
     * acquirer_message
     */
    public function getAcquirerMessage(): ?string
    {
        if (count($this->acquirerMessage) == 0) {
            return null;
        }
        return $this->acquirerMessage['value'];
    }

    /**
     * Sets Acquirer Message.
     * acquirer_message
     *
     * @maps acquirer_message
     */
    public function setAcquirerMessage(?string $acquirerMessage): void
    {
        $this->acquirerMessage['value'] = $acquirerMessage;
    }

    /**
     * Unsets Acquirer Message.
     * acquirer_message
     */
    public function unsetAcquirerMessage(): void
    {
        $this->acquirerMessage = [];
    }

    /**
     * Returns Acquirer Return Code.
     * Acquirer return code
     */
    public function getAcquirerReturnCode(): ?string
    {
        if (count($this->acquirerReturnCode) == 0) {
            return null;
        }
        return $this->acquirerReturnCode['value'];
    }

    /**
     * Sets Acquirer Return Code.
     * Acquirer return code
     *
     * @maps acquirer_return_code
     */
    public function setAcquirerReturnCode(?string $acquirerReturnCode): void
    {
        $this->acquirerReturnCode['value'] = $acquirerReturnCode;
    }

    /**
     * Unsets Acquirer Return Code.
     * Acquirer return code
     */
    public function unsetAcquirerReturnCode(): void
    {
        $this->acquirerReturnCode = [];
    }

    /**
     * Returns Operation Type.
     * Operation type
     */
    public function getOperationType(): ?string
    {
        if (count($this->operationType) == 0) {
            return null;
        }
        return $this->operationType['value'];
    }

    /**
     * Sets Operation Type.
     * Operation type
     *
     * @maps operation_type
     */
    public function setOperationType(?string $operationType): void
    {
        $this->operationType['value'] = $operationType;
    }

    /**
     * Unsets Operation Type.
     * Operation type
     */
    public function unsetOperationType(): void
    {
        $this->operationType = [];
    }

    /**
     * Returns Card.
     * Card data
     */
    public function getCard(): ?GetCardResponse
    {
        if (count($this->card) == 0) {
            return null;
        }
        return $this->card['value'];
    }

    /**
     * Sets Card.
     * Card data
     *
     * @maps card
     */
    public function setCard(?GetCardResponse $card): void
    {
        $this->card['value'] = $card;
    }

    /**
     * Unsets Card.
     * Card data
     */
    public function unsetCard(): void
    {
        $this->card = [];
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
        if (!empty($this->statementDescriptor)) {
            $json['statement_descriptor']      = $this->statementDescriptor['value'];
        }
        if (!empty($this->acquirerName)) {
            $json['acquirer_name']             = $this->acquirerName['value'];
        }
        if (!empty($this->acquirerAffiliationCode)) {
            $json['acquirer_affiliation_code'] = $this->acquirerAffiliationCode['value'];
        }
        if (!empty($this->acquirerTid)) {
            $json['acquirer_tid']              = $this->acquirerTid['value'];
        }
        if (!empty($this->acquirerNsu)) {
            $json['acquirer_nsu']              = $this->acquirerNsu['value'];
        }
        if (!empty($this->acquirerAuthCode)) {
            $json['acquirer_auth_code']        = $this->acquirerAuthCode['value'];
        }
        if (!empty($this->acquirerMessage)) {
            $json['acquirer_message']          = $this->acquirerMessage['value'];
        }
        if (!empty($this->acquirerReturnCode)) {
            $json['acquirer_return_code']      = $this->acquirerReturnCode['value'];
        }
        if (!empty($this->operationType)) {
            $json['operation_type']            = $this->operationType['value'];
        }
        if (!empty($this->card)) {
            $json['card']                      = $this->card['value'];
        }
        $json = array_merge($json, parent::jsonSerialize(true));
        $json['transaction_type'] = $this->getTransactionType() ?? 'voucher';

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
