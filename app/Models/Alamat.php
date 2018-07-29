<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alamat extends Model
{
    protected $table = 'alamat';

    public function transaksi()
    {
        return $this->belongsTo('App\Models\Transaksi');
    }

    public function addr()
    {
        return $this->morphTo();
    }
}
