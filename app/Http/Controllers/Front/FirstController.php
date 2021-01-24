<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class FirstController extends Controller
{

    public function __construct(){

        $this->middleware('auth')->except('showNumber2');

    }


    public function showNumber1(){


        return '1';
    }
    public function showNumber2(){


        return '2';
    }

    public function showNumber3(){


        return '3';
    }

}
