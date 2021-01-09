<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $settings = [
            [
                'label' => '网站标题',
                'key' => 'site_title',
                'value' => 'Flow Blog',
                'group' => Setting::GROUP_SITE,
                'type' => Setting::TYPE_INPUT,
                'extra' => [
                    'rule' => 'required',
                    'placeholder' => '请输入网站标题',
                ]
            ],
            [
                'label' => '网站LOGO',
                'key' => 'site_logo',
                'value' => '',
                'group' => Setting::GROUP_SITE,
                'type' => Setting::TYPE_FILEPOND,
                'extra' => [
                    'placeholder' => '请输入网站LOGO',
                ]
            ],
            [
                'label' => '网站公告',
                'key' => 'site_notice',
                'value' => '',
                'group' => Setting::GROUP_SITE,
                'type' => Setting::TYPE_TEXTAREA,
                'extra' => [
                    'placeholder' => '请输入网站公告',
                ]
            ],
            [
                'label' => 'SEO 关键词',
                'key' => 'seo_keywords',
                'value' => '',
                'group' => Setting::GROUP_SITE,
                'type' => Setting::TYPE_INPUT,
                'extra' => [
                    'rule' => 'required',
                    'placeholder' => '请输入SEO 关键词',
                ]
            ],
            [
                'label' => 'SEO 描述',
                'key' => 'seo_description',
                'value' => '',
                'group' => Setting::GROUP_SITE,
                'type' => Setting::TYPE_TEXTAREA,
                'extra' => [
                    'rule' => 'required',
                    'placeholder' => '请输入SEO 描述',
                ]
            ],
            [
                'label' => '底部版权',
                'key' => 'site_copyright',
                'value' => '',
                'group' => Setting::GROUP_SITE,
                'type' => Setting::TYPE_INPUT,
                'extra' => [
                    'rule' => 'required',
                    'placeholder' => '请输入底部版权',
                ]
            ],
            [
                'label' => '昵称',
                'key' => 'about_name',
                'value' => '',
                'group' => Setting::GROUP_ABOUT,
                'type' => Setting::TYPE_INPUT,
                'extra' => [
                    'placeholder' => '请输入昵称',
                ]
            ],
            [
                'label' => '个人介绍',
                'key' => 'about_introduction',
                'value' => '',
                'group' => Setting::GROUP_ABOUT,
                'type' => Setting::TYPE_TEXTAREA,
                'extra' => [
                    'placeholder' => '请输入个人介绍',
                ]
            ],
        ];

        Setting::query()->truncate();
        foreach ($settings as $setting) {
            Setting::create($setting);
        }
    }
}
