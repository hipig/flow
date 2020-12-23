<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function display(Request $request)
    {
        return view('settings.display');
    }
}
