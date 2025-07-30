<?php

require_once "PayPal.php";

class PayPalControl implements PayPal {
    private $creditCardNo;
    private $customerName;
    private $cardExpMonth;
    private $cardExpYear;
    private $cardCVVNo;
    private $amount;

    public function getCreditCardNo(){
        return $this->creditCardNo;
    }
    public function getCustomerName(){
        return $this->customerName;
    }
    public function getCardExpMonth(){
        return $this->cardExpMonth;
    }
    public function getCardExpYear(){
        return $this->cardExpYear;
    }
    public function getCardCVVNo(){
        return $this->cardCVVNo;
    }
    public function getAmount(){
        return $this->amount;
    }


    public function setCreditCardNo($creditCardNo){
        $this->creditCardNo = $creditCardNo;
    }
    public function setCustomerName($customerName){
        $this->customerName = $customerName;
    }
    public function setCardExpMonth($cardExpMonth){
        $this->cardExpMonth = $cardExpMonth;
    }
    public function setCardExpYear($cardExpYear){
        $this->cardExpYear = $cardExpYear;
    }
    public function setCardCVVNo($cardCVVNo){
        $this->cardCVVNo = $cardCVVNo;
    }
    public function setAmount($amount){
        $this->amount = $amount;
    }
}