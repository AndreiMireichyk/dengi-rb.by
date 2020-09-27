<?php

namespace App\Http\Controllers;

use App\Subdomain;
use Illuminate\Http\Request;
use Carbon\Carbon;

class PageController extends Controller
{

    public function subdomain(Request $request, $sub)
    {
		$start  = Carbon::now()->setTime(8, 0, 0);
        $end  = Carbon::now()->setTime(20, 0, 0);
        $show_phone = env('APP_DEBUG') ? true : Carbon::now()->between($start, $end);
        $subdomain = Subdomain::where('slug', $sub)->firstOrfail();
        return view('layout', ['subdomain' => $subdomain, 'show_phone'=>$show_phone]);
    }


    public function home()
    {
		$start  = Carbon::now()->setTime(8, 0, 0);
        $end  = Carbon::now()->setTime(20, 0, 0);
        $show_phone = env('APP_DEBUG') ? true : Carbon::now()->between($start, $end);
        $subdomain = Subdomain::where('slug', 'minsk')->firstOrfail();
        return view('layout', ['subdomain' => $subdomain, 'show_phone'=>$show_phone]);
    }
}
