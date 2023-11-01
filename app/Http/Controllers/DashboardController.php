<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Redirect;

class DashboardController extends Controller
{
    public function index()
    {
        $title = __('dashboard.title');

        return view('pages.dashboard.index', compact('title'));
    }

    public function switchLanguage($language)
    {
        App::setLocale($language);
        session()->put('locale', $language);

        return Redirect::back();
    }
}
