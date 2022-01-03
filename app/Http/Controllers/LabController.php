<?php

namespace App\Http\Controllers;

use App\Jobs\CreateUserJob;
use App\Services\RedisService;
use Illuminate\Http\Request;

class LabController extends Controller
{
    

    public function __construct()
    {
    }

    public function lab(Request $request)
    {
        dump('Hello github actions');
    }
}
