<?php
namespace App\Services\Payment;

use App\Models\Subscription;
use App\Services\Payment\PaymentDriverInterface;

class PaddleDriver implements PaymentDriverInterface
{

    const DRIVER = 'PADDLE';

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
        dump('Xử lý cancel paddle subscription');
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