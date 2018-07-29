<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pikup extends Model
{
    protected $table = 'pikup';

    protected $fillable = ['user_id', 'kategori_id', 'berat'];

    public function users()
    {
        return $this->hasMany('App\Models\User');
    }

    public function cats()
    {
        return $this->hasMany('App\Models\Kategori');
    }
}
