<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategori';

    public function transaksis()
    {
        return $this->belongToMany('App\Models\Transaksi', 'transaksi_kategori', 'kategori_id', 'transaksi_id' );
    }

    public function pikup()
    {
        return $this->belongsTo('App\Models\Pikup');
    }
}
