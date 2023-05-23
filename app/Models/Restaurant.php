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

    // Define the relationships with other models
    public function menus()
    {
        return $this->hasMany(Menu::class);
    }
}
