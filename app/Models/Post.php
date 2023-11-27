<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Post extends Model
{
    use HasFactory;
    

     protected $fillable = [
        'title',
        'short_description',
        'long_description',
        'image_url',
        'active',
        'seo_title',
        'seo_descr',
        'seo_tags'
    ];
    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function scopeNews(Builder $query) {
        $query->whereHas('category', function ($query) {
            $query->where('name', 'Новини');
        })->where('active', 1);
    }

    public function scopeAnnouncements(Builder $query) {
        $query->whereHas('category', function ($query) {
            $query->where('name', 'Анонси');
        })->where('active', 1);
    }

    public function scopeEvents(Builder $query) {
        $query->whereHas('category', function ($query) {
            $query->where('name', 'Події');
        })->where('active', 1);
    }

    public function scopeVideostories(Builder $query) {
        $query->whereHas('category', function ($query) {
            $query->where('name', 'Відеосюжети');
        })->where('active', 1);
    }


}
