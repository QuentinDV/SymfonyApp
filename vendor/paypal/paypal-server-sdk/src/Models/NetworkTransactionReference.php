<?php

declare(strict_types=1);

/*
 * PaypalServerSdkLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalServerSdkLib\Models;

use stdClass;

/**
 * Reference values used by the card network to identify a transaction.
 */
class NetworkTransactionReference implements \JsonSerializable
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string|null
     */
    private $date;

    /**
     * @var string|null
     */
    private $network;

    /**
     * @var string|null
     */
    private $acquirerReferenceNumber;

    /**
     * @param string $id
     */
    public function __construct(string $id)
    {
        $this->id = $id;
    }

    /**
     * Returns Id.
     * Transaction reference id returned by the scheme. For Visa and Amex, this is the "Tran id" field in
     * response. For MasterCard, this is the "BankNet reference id" field in response. For Discover, this
     * is the "NRID" field in response. The pattern we expect for this field from Visa/Amex/CB/Discover is
     * numeric, Mastercard/BNPP is alphanumeric and Paysecure is alphanumeric with special character -.
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * Transaction reference id returned by the scheme. For Visa and Amex, this is the "Tran id" field in
     * response. For MasterCard, this is the "BankNet reference id" field in response. For Discover, this
     * is the "NRID" field in response. The pattern we expect for this field from Visa/Amex/CB/Discover is
     * numeric, Mastercard/BNPP is alphanumeric and Paysecure is alphanumeric with special character -.
     *
     * @required
     * @maps id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Date.
     * The date that the transaction was authorized by the scheme. This field may not be returned for all
     * networks. MasterCard refers to this field as "BankNet reference date.
     */
    public function getDate(): ?string
    {
        return $this->date;
    }

    /**
     * Sets Date.
     * The date that the transaction was authorized by the scheme. This field may not be returned for all
     * networks. MasterCard refers to this field as "BankNet reference date.
     *
     * @maps date
     */
    public function setDate(?string $date): void
    {
        $this->date = $date;
    }

    /**
     * Returns Network.
     * The card network or brand. Applies to credit, debit, gift, and payment cards.
     */
    public function getNetwork(): ?string
    {
        return $this->network;
    }

    /**
     * Sets Network.
     * The card network or brand. Applies to credit, debit, gift, and payment cards.
     *
     * @maps network
     */
    public function setNetwork(?string $network): void
    {
        $this->network = $network;
    }

    /**
     * Returns Acquirer Reference Number.
     * Reference ID issued for the card transaction. This ID can be used to track the transaction across
     * processors, card brands and issuing banks.
     */
    public function getAcquirerReferenceNumber(): ?string
    {
        return $this->acquirerReferenceNumber;
    }

    /**
     * Sets Acquirer Reference Number.
     * Reference ID issued for the card transaction. This ID can be used to track the transaction across
     * processors, card brands and issuing banks.
     *
     * @maps acquirer_reference_number
     */
    public function setAcquirerReferenceNumber(?string $acquirerReferenceNumber): void
    {
        $this->acquirerReferenceNumber = $acquirerReferenceNumber;
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
        $json['id']                            = $this->id;
        if (isset($this->date)) {
            $json['date']                      = $this->date;
        }
        if (isset($this->network)) {
            $json['network']                   = CardBrand::checkValue($this->network);
        }
        if (isset($this->acquirerReferenceNumber)) {
            $json['acquirer_reference_number'] = $this->acquirerReferenceNumber;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
