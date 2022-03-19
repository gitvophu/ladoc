<?php
namespace App\Services\Payment;

use App\Models\Subscription;
use App\Services\Payment\PaymentDriverInterface;

class PaypalDriver implements PaymentDriverInterface
{

    const DRIVER = 'PAYPAL';
    
	/**
	 *
	 * @return mixed
	 */
	function createPlan() {
	}
	
	/**
	 *
	 * @return mixed
	 */
	function generatePayLink() {
	}
	
	/**
	 *
	 * @return mixed
	 */
	function registerWebhook() {
	}
	
	/**
	 *
	 * @param Subscription $subscription
	 *
	 * @return mixed
	 */
	function cancelSubscription(Subscription $subscription) {
        dump('Xử lý cancel PAYPAL subscription');
        // handle cancel

        // ghi log

        // tra ket qua

        return ['success' => true, 'message' => 'OK'];
	}
	
	/**
	 *
	 * @return mixed
	 */
	function pauseSubscription() {
	}
	
	/**
	 *
	 * @return mixed
	 */
	function resumeSubscription() {
	}
}