<?php


class Payment
{
    private $merchant_id="";
    private $merchant_secret="";
    public $orderId = "ff";
    public $amount, $email, $type,$mobile,$name;

    public  $currency = "LKR";
    private function __construct($amount, $name, $email, $mobile,$type)
    {
        $this->amount = $amount;
        $this->name = $name;
        $this->email = $email;
        $this->mobile = $mobile;
        $this->type = $type;
    }

    public function generateHash()
    {
        return strtoupper(
            md5(
                $this->merchant_id . $this->orderId . number_format($this->amount, 2, '.', '') . $this->currency . strtoupper(md5($this->merchant_secret))
            )
        );
    }

    public function generatePaymentObject(){
        $paymentObject = new stdClass();
        $paymentObject->merchant_id = $this->merchant_id;
        $paymentObject->return_url = $this->marchant_id;
    }
}
