<?php

class Details{
    public $book_info;
    public $timestamp;
    public $amount;
    public $partyA;
    public $accountRef;

    function __construct($phoneNumber, $amount, $book_info)
    {
        $date = new DateTime();
        $this->timestamp = $date->format('YmdHis');

        $this->accountRef = "wanjata".strval(rand());
        $this->amount = $amount;
        $this->book_info = $book_info;
        $this->partyA = $phoneNumber;
    }
}