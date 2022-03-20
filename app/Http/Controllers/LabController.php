<?php

namespace App\Http\Controllers;

use App\Jobs\CreateUserJob;
use App\Models\Subscription;
use App\Services\Payment\PaymentService;
use App\Services\RedisService;
use App\Services\Reporter\ReporterService;
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


    public function testSentry(Request $request){
        $context = [
            'user' => 'phuvn@fireapps.vn',
            'action' => 'create recurring',
            'package' => 'advanced',
        ];

        \Sentry\configureScope(function(\Sentry\State\Scope $scope) use ($context){
            $scope->setContext('context', $context);
        });

        $context2 = [
            'user_name' => 'Phu Vo',
            'age' => 26,
            'job' => 'dev'
        ];
        \Sentry\configureScope(function(\Sentry\State\Scope $scope) use ($context2){
            $scope->setContext('context2', $context2);
        });
        
        throw new Exception("Test error 222");
    }

    
}
