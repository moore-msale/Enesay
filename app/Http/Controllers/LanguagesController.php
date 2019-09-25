<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LanguagesController extends Controller
{
    public function set($lang) {
        Session::put(['applocale' => $lang]);
        return back();
    }
}
