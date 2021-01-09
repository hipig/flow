<?php

namespace App\Models;

use App\Models\Traits\StatusScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Page extends Model
{
    use HasFactory, StatusScope;

    protected $fillable = [
        'title',
        'name',
        'content',
        'seo_description',
        'seo_keywords',
        'status',
    ];

    protected $casts = [
        'status' => 'boolean',
    ];

    protected static function booted()
    {
        static::creating(function ($model) {
            $model->title = Str::title($model->name);
        });
    }

    public function getRouteKeyName()
    {
        return 'name';
    }
}
