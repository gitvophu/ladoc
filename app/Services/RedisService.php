<?php
namespace App\Services;

use Exception;
use Illuminate\Support\Facades\Redis;

class RedisService
{
    public function cacheName($shopId, $action = 'get', ?string $name = null)
    {
        $key = 'name:' . $shopId;
        if($action === 'get'){
            return Redis::get($key);
        }elseif($action === 'set'){
            return Redis::set($key, $name);
        }elseif($action === 'exists'){
            return Redis::exists($key);
        }else{
            throw new Exception("Not support action: " . $action);
        }
    }
}
