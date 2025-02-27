<?php

declare(strict_types=1);

/*
 * PaypalServerSdkLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalServerSdkLib\Models\Builders;

use Core\Utils\CoreHelper;
use PaypalServerSdkLib\Models\Payee;

/**
 * Builder for model Payee
 *
 * @see Payee
 */
class PayeeBuilder
{
    /**
     * @var Payee
     */
    private $instance;

    private function __construct(Payee $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new payee Builder object.
     */
    public static function init(): self
    {
        return new self(new Payee());
    }

    /**
     * Sets email address field.
     */
    public function emailAddress(?string $value): self
    {
        $this->instance->setEmailAddress($value);
        return $this;
    }

    /**
     * Sets merchant id field.
     */
    public function merchantId(?string $value): self
    {
        $this->instance->setMerchantId($value);
        return $this;
    }

    /**
     * Initializes a new payee object.
     */
    public function build(): Payee
    {
        return CoreHelper::clone($this->instance);
    }
}
