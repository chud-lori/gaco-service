<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Kodeine\Metable\Metable;
use Laratrust\Traits\LaratrustUserTrait;

class User extends Authenticatable
{
    use LaratrustUserTrait;
    use Notifiable;
    use Metable;

    protected $metaTable = 'users_meta'; //optional.


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function transaksi()
    {
        return $this->belongsTo('App\Models\Transaksi');
    }

    public function alamats()
    {
        return $this->morphMany(Alamat::class, 'model');
    }

    public function ambil()
    {
        return $this->hasMany('App\Models\Ambil');
    }

    public function pikup()
    {
        return $this->belongsTo('App\Models\Pikup');
    }
}
