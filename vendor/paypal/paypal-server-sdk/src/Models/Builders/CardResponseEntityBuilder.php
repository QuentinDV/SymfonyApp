<?php

declare(strict_types=1);

/*
 * PaypalServerSdkLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalServerSdkLib\Models\Builders;

use Core\Utils\CoreHelper;
use PaypalServerSdkLib\Models\AddressDetails;
use PaypalServerSdkLib\Models\BinDetails;
use PaypalServerSdkLib\Models\CardAuthenticationResponse;
use PaypalServerSdkLib\Models\CardResponseEntity;
use PaypalServerSdkLib\Models\CardVerificationDetails;
use PaypalServerSdkLib\Models\NetworkTransactionReferenceEntity;

/**
 * Builder for model CardResponseEntity
 *
 * @see CardResponseEntity
 */
class CardResponseEntityBuilder
{
    /**
     * @var CardResponseEntity
     */
    private $instance;

    private function __construct(CardResponseEntity $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new card response entity Builder object.
     */
    public static function init(): self
    {
        return new self(new CardResponseEntity());
    }

    /**
     * Sets name field.
     */
    public function name(?string $value): self
    {
        $this->instance->setName($value);
        return $this;
    }

    /**
     * Sets last digits field.
     */
    public function lastDigits(?string $value): self
    {
        $this->instance->setLastDigits($value);
        return $this;
    }

    /**
     * Sets brand field.
     */
    public function brand(?string $value): self
    {
        $this->instance->setBrand($value);
        return $this;
    }

    /**
     * Sets expiry field.
     */
    public function expiry(?string $value): self
    {
        $this->instance->setExpiry($value);
        return $this;
    }

    /**
     * Sets billing address field.
     */
    public function billingAddress(?AddressDetails $value): self
    {
        $this->instance->setBillingAddress($value);
        return $this;
    }

    /**
     * Sets verification status field.
     */
    public function verificationStatus(?string $value): self
    {
        $this->instance->setVerificationStatus($value);
        return $this;
    }

    /**
     * Sets verification field.
     */
    public function verification(?CardVerificationDetails $value): self
    {
        $this->instance->setVerification($value);
        return $this;
    }

    /**
     * Sets network transaction reference field.
     */
    public function networkTransactionReference(?NetworkTransactionReferenceEntity $value): self
    {
        $this->instance->setNetworkTransactionReference($value);
        return $this;
    }

    /**
     * Sets authentication result field.
     */
    public function authenticationResult(?CardAuthenticationResponse $value): self
    {
        $this->instance->setAuthenticationResult($value);
        return $this;
    }

    /**
     * Sets bin details field.
     */
    public function binDetails(?BinDetails $value): self
    {
        $this->instance->setBinDetails($value);
        return $this;
    }

    /**
     * Sets type field.
     */
    public function type(?string $value): self
    {
        $this->instance->setType($value);
        return $this;
    }

    /**
     * Initializes a new card response entity object.
     */
    public function build(): CardResponseEntity
    {
        return CoreHelper::clone($this->instance);
    }
}
