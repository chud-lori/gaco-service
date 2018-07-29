<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    protected $table = 'bank';

    protected $fillable = ['nama'];

    public function transaksi()
    {
        return $this->belongsTo('App\Models\Transaksi');
    }
    public function alamats()
    {
        return $this->morphMany(Alamat::class, 'model');
    }
}
