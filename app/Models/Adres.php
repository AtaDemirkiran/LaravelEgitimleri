<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adres extends Model
{
    protected $table = 'adres';


    public function user()
    {
        return $this->hasOne('App\Models\User');
    }

    use HasFactory;
}
