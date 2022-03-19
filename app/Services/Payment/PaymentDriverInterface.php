<?php
namespace App\Services\Payment;

use App\Models\Subscription;

interface PaymentDriverInterface
{
    public function createPlan();
    public function generatePayLink();
    public function registerWebhook();
    public function cancelSubscription(Subscription $subscription);
    public function pauseSubscription();
    public function resumeSubscription();
}