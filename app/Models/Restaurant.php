<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $table = 'restaurants';

    protected $fillable = [
        'name',
        'address', //location
        'phone_number',
    ];

    // relationships
    public function menus()
    {
        return $this->hasMany(Menu::class);
    }
}
