<?php

require_once "PayPal.php";
require_once "Stripe.php";

class PaymentAdapter implements PayPal {

    private $stripe;

    public function __construct(Stripe $stripe)
    {
        $this->stripe = $stripe;
    }

    public function getCreditCardNo(){
        return $this->stripe->getCustCardNo();
    }
    public function getCustomerName(){
        return $this->stripe->getCardOwnerName();
    }
    public function getCardExpMonth(){
        return substr($this->stripe->getCardExpMonthDate(), 0, 2);
    }
    public function getCardExpYear(){
        return substr($this->stripe->getCardExpMonthDate(), 3, 2);
    }
    public function getCardCVVNo(){
        return $this->stripe->getCVVNo();
    }
    public function getAmount(){
        return $this->stripe->getTotalAmount();
    }


    public function setCreditCardNo($creditCardNo){
        $this->stripe->setCustCardNo($creditCardNo);
    }
    public function setCustomerName($customerName){
        $this->stripe->setCardOwnerName($customerName);
    }
    public function setCardExpMonth($cardExpMonth){
        $this->stripe->setCardExpMonthDate(substr($cardExpMonth, 0, 2));
    }
    public function setCardExpYear($cardExpYear){
        $this->stripe->setCardExpMonthDate(substr($cardExpYear, 3, 2));
    }
    public function setCardCVVNo($cardCVVNo){
        $this->stripe->setCVVNo($cardCVVNo);
    }
    public function setAmount($amount){
        $this->stripe->setTotalAmount($amount);
    }
}