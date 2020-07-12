<?php
interface PaymentInterface{
	public function payNow();
}

interface LoginInterface{
	public function loginFirst();
}

class PayPal implements PaymentInterface,LoginInterface{
	public function payNow(){}
	public function loginFirst(){}

	public function paymentProcess(){
		$this->payNow();
		$this->loginFirst();
	}

}

class BankeTransfer implements PaymentInterface,LoginInterface{
	public function payNow(){}
	public function loginFirst(){}

	public function paymentProcess(){
		$this->payNow();
		$this->loginFirst();
	}

}

class Visa implements PaymentInterface{
	public function payNow(){}

	public function paymentProcess(){
		$this->payNow();
	}

}

class Cash implements PaymentInterface{
	public function payNow(){}

	public function paymentProcess(){
		$this->payNow();
	}
}

class PayProdect{
	public function pay(PaymentInterface $paymentType){
		$paymentType->paymentProcess();
	}

	public function onlinePay(LoginInterface $paymentType){
		$paymentType->paymentProcess();
	}
}