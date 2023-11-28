<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Menu extends Model
{

    protected $table = 'menu';

    use HasFactory;

     protected $fillable = [
        'name',
        'active'
    ];

    public function submenus()
    {
        return $this->hasMany(Submenu::class, 'parent_id');
    }

   



}
