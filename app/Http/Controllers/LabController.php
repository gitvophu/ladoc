<?php

namespace App\Http\Controllers;

use App\Services\RedisService;
use Illuminate\Http\Request;

class LabController extends Controller
{
    /**
     * @var RedisService
     */
    private $redisService;

    public function __construct()
    {
        $this->redisService = new RedisService();
    }

    public function getMyName(Request $request, $shopId)
    {
        
        $name = $this->redisService->cacheName($shopId);
        if(!$name){
            $this->redisService->cacheName($shopId, 'set', $name);
        }
    }
}
