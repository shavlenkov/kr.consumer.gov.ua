<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Submenu extends Model
{
    protected $table = 'submenu';

    use HasFactory;

    protected $fillable = [
        'title',
        'url',
        'parent_id'
    ];

     public function menu()
{
    return $this->belongsTo(Menu::class);
}



}
