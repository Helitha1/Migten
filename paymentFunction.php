<?php


class Payment
{
    private $merchant_id="";
    private $merchant_secret="";
    public $order_id = "ff";
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
                $this->merchant_id . $this->order_id . number_format($this->amount, 2, '.', '') . $this->currency . strtoupper(md5($this->merchant_secret))
            )
        );
    }

    public function generatePaymentObject(){
        $paymentObject = new stdClass();
        $paymentObject->merchant_id = $this->merchant_id;
        $paymentObject->return_url = "index.php";
        $paymentObject->cancel_url = "sorry.php";
        $paymentObject->first_name = $this->name;
        $paymentObject->last_name = "";
        $paymentObject->email = $this->email;
        $paymentObject->phone = $this->mobile;
        $paymentObject->address = $this->name;
        $paymentObject->city = "NULL";
        $paymentObject->country = "Sri Lanka";
        $paymentObject->order_id = $this->order_id;
        $paymentObject->items = $this->order_id;
        $paymentObject->currency = "LKR";
        $paymentObject->amount = $this->amount;
        $paymentObject->hash = $this->generateHash();
    }
}
