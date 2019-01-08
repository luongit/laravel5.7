<?php

namespace App\Http\Controllers;
use Cache;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function flush_cache(){
    	Cache::flush();
    	// Cache::forget('1546491463a');
    	return redirect()->back()->with('ok','Dã làm sạch bộ nhớ tạm');
    }
}
