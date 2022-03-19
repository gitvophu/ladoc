<?php
namespace App\Services\Payment;

use App\Models\Subscription;
use Exception;

class PaymentService
{

    public function cancelSubscription(Subscription $subscription, array $options = [])
    {
        $driverKey = $subscription->platform_domain;
        $driver = $this->getDriverInstance($driverKey);
        $result = $driver->cancelSubscription($subscription);
        if (!$result['success']) {
            return ['success' => false, 'message' => $result['message']];
        }
        return ['success' => true, 'message' => 'OK'];
    }

    /**
     * @return PaymentDriverInterface
     */
    private function getDriverInstance(string $driver)
    {
        switch ($driver) {
            case PaddleDriver::DRIVER:
                return app(PaddleDriver::class);
            case PaypalDriver::DRIVER:
                return app(PaypalDriver::class);
            default:
                throw new Exception("Driver is not valid");
        }
    }

    /**
     * @return PaymentService
     */
    public static function instance(){
        return app(PaymentService::class);
    }

}