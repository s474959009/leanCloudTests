<?php

namespace App\Http\Controllers;
use Predis;


class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
        $redis = new Predis\Client(getenv("REDIS_URL_manhua"));
        $redis->ping();
        echo  1111111;
    }

    //
}
