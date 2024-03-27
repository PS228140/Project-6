<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ContactController extends Controller
{
    public function index()
    {
        // request()->server->add(['REMOTE_ADDR' => '145.100.155.13']);

        $ipaddress = request()->ip();

        $ipdata = Http::get('https://freeipapi.com/api/json/' . $ipaddress);
        $ipdata = $ipdata->object();
        $iplat = $ipdata->latitude;
        $iplon = $ipdata->longitude;

        return view("contact", compact("iplon", "iplat"));
    }
}
