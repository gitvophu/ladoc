<?php
namespace App\Models;

class Subscription {
    public $platform_domain;

    public function __construct($platform_domain){
        $this->platform_domain = $platform_domain;
    }
}