<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    const TYPE_INPUT = 'input';
    const TYPE_TEXTAREA = 'textarea';
    const TYPE_SELECT = 'select';
    const TYPE_RADIO = 'radio';
    const TYPE_CHECKBOX = 'checkbox';

    public static $typeMap = [
        self::TYPE_INPUT => '单行文本框',
        self::TYPE_TEXTAREA => '多行文本框',
        self::TYPE_SELECT => '选择框',
        self::TYPE_RADIO => '单选框',
        self::TYPE_CHECKBOX => '多选框',
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
}
