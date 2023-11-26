<?php

namespace App\Http\Controllers;

use App\Models\AppDetail;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function appInfo()
    {
        $app = AppDetail::first();
        
        $title = __('dashboard.title');
        $content = $app->app_desc;
        
        return view('pages.general.appinfo',compact('title','content'));
    }
}
