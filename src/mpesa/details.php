<?php


class Details{
    public $timestamp;
    public $amount;
    public $partyA;
    public $accountRef;

    function __construct($phoneNumber, $amount)
    {
        $date = new DateTime();
        $this->timestamp = $date->format('YmdHis');

        $this->accountRef = "wanjata".strval(rand());
        $this->amount = $amount;
        $this->partyA = $phoneNumber;
    }
}