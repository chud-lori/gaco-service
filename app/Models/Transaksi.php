<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksi';

    protected $fillable = ['jenis_transaksi', 'status_transaksi', 'user_id', 'bank_id', 'alamat_id'];

    // public function alamats()
    // {
    //     return $this->hasMany('App\Models\Alamat');
    // }

    public function banks()
    {
        return $this->hasMany('App\Models\Bank');
    }

    public function users()
    {
        return $this->hasMany('App\Models\User');
    }

    public function kategoris()
    {
        return $this->belongsToMany('App\Models\Kategori', 'transaksi_kategori', 'transaksi_id', 'kategori_id');
    }
}
