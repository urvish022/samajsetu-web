<?php

namespace App\Http\Controllers;

use App\Models\SliderSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Redirect;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $title = __('dashboard.title');
        $sliders = SliderSetting::get();
        
        return view('pages.dashboard.index', compact('title','sliders'));
    }

    public function switchLanguage($language)
    {
        App::setLocale($language);
        session()->put('locale', $language);

        return Redirect::back();
    }
}
