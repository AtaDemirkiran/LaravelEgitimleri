<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comment';


    public function user()
    {
        return $this->belongsToMany('App\Models\User');
    }

    use HasFactory;
}
