<?php

namespace App\Models;

use App\Models\Traits\StatusScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Psy\Util\Str;

class Setting extends Model
{
    use HasFactory, StatusScope;

    const TYPE_INPUT = 'input';
    const TYPE_TEXTAREA = 'textarea';
    const TYPE_SELECT = 'select';
    const TYPE_RADIO = 'radio';
    const TYPE_CHECKBOX = 'checkbox';
    const TYPE_FILEPOND = 'filepond';

    public static $typeMap = [
        self::TYPE_INPUT => '单行文本框',
        self::TYPE_TEXTAREA => '多行文本框',
        self::TYPE_SELECT => '选择框',
        self::TYPE_RADIO => '单选框',
        self::TYPE_FILEPOND => 'Filepond',
    ];

    const GROUP_SITE = 'site';
    const GROUP_ABOUT = 'about';
    public static $groupType = [
        self::GROUP_SITE => [
            'label' => '网站设置',
            'description' => '网站的基础信息，包括名称、LOGO 及 SEO'
        ],
        self::GROUP_ABOUT => [
            'label' => '社交信息',
            'description' => '个人联系方式、相关介绍'
        ],
    ];

    protected $fillable = [
        'label',
        'key',
        'value',
        'group',
        'type',
        'extra',
        'status',
        'index',
    ];

    protected $casts = [
        'extra' => 'json',
        'status' => 'boolean',
    ];

    public function getGroupNameAttribute()
    {
        return config('flow.setting_groups')[$this->getAttribute('group')]['label'] ?? '未知分组';
    }

    public function getPlaceholderAttribute()
    {
        return $this->extra['placeholder'] ?? '';
    }

    public function getOptionsAttribute()
    {
        return $this->extra['options'] ?? [];
    }
}
