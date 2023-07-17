<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeoFeature extends Model
{
    use HasFactory;

    protected $table = 'seo_features';
    protected $fillable = [
        'id',
        'title',
        'page_name',
        'slug',
        'seo_title',
        'og_title',
        'twitter_title',
        'og_type',
        'canonical_url',
        'keywords',
        'og_description',
        'meta_description',
        'twitter_description',
        'image',
        'image_path',
        'image_alt_text',
        'og_image',
        'og_image_path',
        'og_image_alt_text',
        'twitter_image',
        'twitter_image_path',
        'twitter_image_alt_text',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at' 
    ];

    public static function boot()
    {
        parent::boot();
        static::creating(function ($data) {
            if (auth()->check()) {
                $data->created_by = auth()->user()->id;
                $data->updated_by = auth()->user()->id;
            }
        });

        static::updating(function ($data) {
            $data->updated_by = auth()->user()->id;
        });
    }
}
