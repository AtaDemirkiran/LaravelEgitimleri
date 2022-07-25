<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'user';
    protected $fillable  = ['name', 'surname'];

    public function adres()
    {
        return $this->hasOne('App\Models\Adres');
    }

    public function comment()
    {
        return $this->hasMany('App\Models\Comment');
    }

    use HasFactory;
}
