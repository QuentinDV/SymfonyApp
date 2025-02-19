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
 * Full representation of a Card Payment Token including network token.
 */
class CardPaymentToken implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $name;

    /**
     * @var string|null
     */
    private $lastDigits;

    /**
     * @var string|null
     */
    private $brand;

    /**
     * @var string|null
     */
    private $expiry;

    /**
     * @var AddressDetails|null
     */
    private $billingAddress;

    /**
     * @var string|null
     */
    private $verificationStatus;

    /**
     * @var CardVerificationDetails|null
     */
    private $verification;

    /**
     * @var NetworkTransactionReferenceEntity|null
     */
    private $networkTransactionReference;

    /**
     * @var CardAuthenticationResponse|null
     */
    private $authenticationResult;

    /**
     * @var BinDetails|null
     */
    private $binDetails;

    /**
     * @var string|null
     */
    private $type;

    /**
     * @var mixed
     */
    private $networkToken;

    /**
     * Returns Name.
     * The card holder's name as it appears on the card.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     * The card holder's name as it appears on the card.
     *
     * @maps name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns Last Digits.
     * The last digits of the payment card.
     */
    public function getLastDigits(): ?string
    {
        return $this->lastDigits;
    }

    /**
     * Sets Last Digits.
     * The last digits of the payment card.
     *
     * @maps last_digits
     */
    public function setLastDigits(?string $lastDigits): void
    {
        $this->lastDigits = $lastDigits;
    }

    /**
     * Returns Brand.
     * The card network or brand. Applies to credit, debit, gift, and payment cards.
     */
    public function getBrand(): ?string
    {
        return $this->brand;
    }

    /**
     * Sets Brand.
     * The card network or brand. Applies to credit, debit, gift, and payment cards.
     *
     * @maps brand
     */
    public function setBrand(?string $brand): void
    {
        $this->brand = $brand;
    }

    /**
     * Returns Expiry.
     * The year and month, in ISO-8601 `YYYY-MM` date format. See [Internet date and time format](https:
     * //tools.ietf.org/html/rfc3339#section-5.6).
     */
    public function getExpiry(): ?string
    {
        return $this->expiry;
    }

    /**
     * Sets Expiry.
     * The year and month, in ISO-8601 `YYYY-MM` date format. See [Internet date and time format](https:
     * //tools.ietf.org/html/rfc3339#section-5.6).
     *
     * @maps expiry
     */
    public function setExpiry(?string $expiry): void
    {
        $this->expiry = $expiry;
    }

    /**
     * Returns Billing Address.
     * Address request details.
     */
    public function getBillingAddress(): ?AddressDetails
    {
        return $this->billingAddress;
    }

    /**
     * Sets Billing Address.
     * Address request details.
     *
     * @maps billing_address
     */
    public function setBillingAddress(?AddressDetails $billingAddress): void
    {
        $this->billingAddress = $billingAddress;
    }

    /**
     * Returns Verification Status.
     * Verification status of Card.
     */
    public function getVerificationStatus(): ?string
    {
        return $this->verificationStatus;
    }

    /**
     * Sets Verification Status.
     * Verification status of Card.
     *
     * @maps verification_status
     */
    public function setVerificationStatus(?string $verificationStatus): void
    {
        $this->verificationStatus = $verificationStatus;
    }

    /**
     * Returns Verification.
     * Card Verification details including the authorization details and 3D SECURE details.
     */
    public function getVerification(): ?CardVerificationDetails
    {
        return $this->verification;
    }

    /**
     * Sets Verification.
     * Card Verification details including the authorization details and 3D SECURE details.
     *
     * @maps verification
     */
    public function setVerification(?CardVerificationDetails $verification): void
    {
        $this->verification = $verification;
    }

    /**
     * Returns Network Transaction Reference.
     * Previous network transaction reference including id in response.
     */
    public function getNetworkTransactionReference(): ?NetworkTransactionReferenceEntity
    {
        return $this->networkTransactionReference;
    }

    /**
     * Sets Network Transaction Reference.
     * Previous network transaction reference including id in response.
     *
     * @maps network_transaction_reference
     */
    public function setNetworkTransactionReference(
        ?NetworkTransactionReferenceEntity $networkTransactionReference
    ): void {
        $this->networkTransactionReference = $networkTransactionReference;
    }

    /**
     * Returns Authentication Result.
     * Results of Authentication such as 3D Secure.
     */
    public function getAuthenticationResult(): ?CardAuthenticationResponse
    {
        return $this->authenticationResult;
    }

    /**
     * Sets Authentication Result.
     * Results of Authentication such as 3D Secure.
     *
     * @maps authentication_result
     */
    public function setAuthenticationResult(?CardAuthenticationResponse $authenticationResult): void
    {
        $this->authenticationResult = $authenticationResult;
    }

    /**
     * Returns Bin Details.
     * Bank Identification Number (BIN) details used to fund a payment.
     */
    public function getBinDetails(): ?BinDetails
    {
        return $this->binDetails;
    }

    /**
     * Sets Bin Details.
     * Bank Identification Number (BIN) details used to fund a payment.
     *
     * @maps bin_details
     */
    public function setBinDetails(?BinDetails $binDetails): void
    {
        $this->binDetails = $binDetails;
    }

    /**
     * Returns Type.
     * Type of card. i.e Credit, Debit and so on.
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Sets Type.
     * Type of card. i.e Credit, Debit and so on.
     *
     * @maps type
     */
    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    /**
     * Returns Network Token.
     *
     * @return mixed
     */
    public function getNetworkToken()
    {
        return $this->networkToken;
    }

    /**
     * Sets Network Token.
     *
     * @maps network_token
     *
     * @param mixed $networkToken
     */
    public function setNetworkToken($networkToken): void
    {
        $this->networkToken = $networkToken;
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
        if (isset($this->name)) {
            $json['name']                          = $this->name;
        }
        if (isset($this->lastDigits)) {
            $json['last_digits']                   = $this->lastDigits;
        }
        if (isset($this->brand)) {
            $json['brand']                         = CardBrand::checkValue($this->brand);
        }
        if (isset($this->expiry)) {
            $json['expiry']                        = $this->expiry;
        }
        if (isset($this->billingAddress)) {
            $json['billing_address']               = $this->billingAddress;
        }
        if (isset($this->verificationStatus)) {
            $json['verification_status']           = $this->verificationStatus;
        }
        if (isset($this->verification)) {
            $json['verification']                  = $this->verification;
        }
        if (isset($this->networkTransactionReference)) {
            $json['network_transaction_reference'] = $this->networkTransactionReference;
        }
        if (isset($this->authenticationResult)) {
            $json['authentication_result']         = $this->authenticationResult;
        }
        if (isset($this->binDetails)) {
            $json['bin_details']                   = $this->binDetails;
        }
        if (isset($this->type)) {
            $json['type']                          = CardType::checkValue($this->type);
        }
        if (isset($this->networkToken)) {
            $json['network_token']                 = $this->networkToken;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
