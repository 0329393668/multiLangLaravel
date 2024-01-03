<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class HomeController extends Controller
{
    public function changeLanguage($language)
    {
        if (!in_array($language, ['en', 'vi'])) {
            abort(400);
        }
        App::setLocale($language);
        return view('welcome');
    }
}
