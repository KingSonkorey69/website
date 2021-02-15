<?php
require 'mpesa.php';

class Stk extends Mpesa
{
    //
    //here  is where we will save the result..
    public $result;
    private Details $detail;
    //
    //creation of the constructor.
    public function __construct(Details $detail)
    {
        parent::__construct();
        $this->detail = $detail;
       
        $this->result = $this->execute(STK_PUSH);
    }
    function generateBody()
    {
        return array(
            "BusinessShortCode" => SHORTCODE,
            "Password" => base64_encode(SHORTCODE . PASSKEY . $this->detail->timestamp),
            "Timestamp" => $this->detail->timestamp,
            "TransactionType" => "CustomerPayBillOnline",
            "Amount" => $this->detail->amount,
            "PartyA" => $this->detail->partyA,
            "PartyB" => SHORTCODE,
            "PhoneNumber" => $this->detail->partyA,
            "CallBackURL" => CALLBACK_URL,
            "AccountReference" => $this->detail->accountRef,
            "TransactionDesc" => $this->detail->book_info
        );
    }

    
}

// require "./details.php";_
// $d = new Details("254702129493", "4000", "book_");
// $stk = new Stk($d);

// var_dump($stk->result);