<?php

namespace App\Http\Controllers;

use App\Jobs\CreateUserJob;
use App\Models\Subscription;
use App\Services\Payment\PaymentService;
use App\Services\RedisService;
use Exception;
use Illuminate\Http\Request;
use Throwable;

class LabController extends Controller
{

    public function __construct()
    {
    }

    public function welcome(Request $request)
    {
        return view('welcome');

    }
    public function lab(Request $request)
    {
        $subscription = new Subscription('PADDLE');
        $result = PaymentService::instance()->cancelSubscription($subscription);
        dump($result);

    }

    
}
