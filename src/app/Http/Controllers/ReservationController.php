<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class ReservationController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function index (){
        var_dump('a');
        exit;
    }

}
