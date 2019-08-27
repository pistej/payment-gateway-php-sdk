<?php

namespace BigFish\Tests\PaymentGateway\Request;

use BigFish\PaymentGateway\Request\Refund;
use BigFish\PaymentGateway\Request\RequestInterface;

class RefundTest extends SimpleRequestAbstract
{
	protected function getRequest(string $transactionId): RequestInterface
	{
		return new Refund($transactionId, 1000);
	}

	protected function getDataKeys():array
	{
		$result = parent::getDataKeys();
		$result['amount'] = 1000;
		return $result;
	}
}