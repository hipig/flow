<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function index(Request $request)
    {
        $settings = Setting::query()
            ->latest()
            ->paginate();

        return view('settings.index', compact('settings'));
    }

    public function create(Request $request)
    {
        return view('settings.create');
    }

    public function display(Request $request)
    {
        return view('settings.display');
    }
}
