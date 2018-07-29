<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ambil extends Model
{
    protected $table = 'ambil';

    protected $fillable = ['user_id'];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

}
