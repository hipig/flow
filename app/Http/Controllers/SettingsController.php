<?php

namespace App\Http\Controllers;

use App\Http\Requests\SettingRequest;
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

    public function store(SettingRequest $request)
    {
        Setting::create($request->only([
            'label',
            'key',
            'value',
            'group',
            'type',
            'extra',
            'status',
            'index',
        ]));
    }

    public function display(Request $request)
    {
        $settings = Setting::query()
            ->status()
            ->get()
            ->groupBy('group');

        return view('settings.display', compact('settings'));
    }

    public function updateAll(Request $request)
    {
        $settings = Setting::query()
            ->status()
            ->get();

        $rules = $settings->pluck('extra', 'key')
            ->map(function ($item) {
                return $item['rule'] ?? '';
            })
            ->toArray();

        $attributes = $settings->pluck('label', 'key')
            ->toArray();

        $this->validate($request, $rules, [], $attributes);

        $keys = $settings->pluck('key')
            ->toArray();

        foreach ($request->only($keys) as $key => $value) {
            Setting::updateOrCreate([
                'key' => $key
            ], [
                'value' => $value
            ]);
        }

        return back()->with('success', '保存设置成功');
    }
}
