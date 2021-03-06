<?php

namespace Hyperized\Wefact\Types;

use Hyperized\Wefact\WefactAPI;

/**
 * Class Invoice
 * @package Hyperized\Wefact\Types
 */
class Invoice extends WefactAPI
{
    /**
     * @var array
     */
    protected $allowed = [
        'add',
        'delete',
        'download',
        'edit',
        'list',
        'show',
        'lineAdd',
        'lineDelete',
        'sendByEmail',
    ];

    /**
     * @param array $input
     * @return array|mixed
     */
    public function credit(array $input)
    {
        return $this->pseudoRequest('credit', $input);
    }

    /**
     * @param array $input
     * @return array|mixed
     */
    public function markAsPaid(array $input)
    {
        return $this->pseudoRequest('markaspaid', $input);
    }

    /**
     * @param array $input
     * @return array|mixed
     */
    public function markAsUnpaid(array $input)
    {
        return $this->pseudoRequest('markasunpaid', $input);
    }

    /**
     * @param array $input
     * @return array|mixed
     */
    public function partPayment(array $input)
    {
        return $this->pseudoRequest('partpayment', $input);
    }

    /**
     * @param array $input
     * @return array|mixed
     */
    public function paymentProcessPause(array $input)
    {
        return $this->pseudoRequest('paymentprocesspause', $input);
    }

    /**
     * @param array $input
     * @return array|mixed
     */
    public function paymentProcessReactivate(array $input)
    {
        return $this->pseudoRequest('paymentprocessreactivate', $input);
    }

    /**
     * @param array $input
     * @return array|mixed
     */
    public function sendReminderByEmail(array $input)
    {
        return $this->pseudoRequest('sendreminderbyemail', $input);
    }

    /**
     * @param array $input
     * @return array|mixed
     */
    public function sendSummationByEmail(array $input)
    {
        return $this->pseudoRequest('sendsummationbyemail', $input);
    }
}