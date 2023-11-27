<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Menu extends Model
{

    protected $table = 'menu';

    use HasFactory;

     protected $fillable = [
        'title',
        'parent_id'
    ];

    public function submenus()
    {
        return $this->hasMany(Menu::class, 'parent_id');
    }

    public function menu()
{
    return $this->belongsTo(Menu::class, 'parent_id');
}



}
