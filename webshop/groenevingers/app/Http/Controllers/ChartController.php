<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\User;

class ChartController extends Controller
{
    public function lineChart()
    {
        $users = User::where('created_at', '=', '2024-01-06 11:00:08')->count();

        return view('components.line-chart')
            ->with('users', $users);
    }
}
