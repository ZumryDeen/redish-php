<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Redis\RedisServiceProvider;
use Illuminate\Support\Facades\Redis;


class redishTest extends Controller
{
    //

    public function test(){

// call redish Method 1
      $redis = Redis::connection();

        $redis->set('mylove','Zainab');

        echo $redis->get('Name');



      // call redish Method 2
     // Redis::set('car','celerio');


/*$newre = new Redis();
$newre->set('myname','denoo');
       //Redis::set('name','deen');*/



    }


}
