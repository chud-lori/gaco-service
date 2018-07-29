<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;
use App\Models\Bank;
use App\Models\Ambil;
use App\Models\User;
use App\Models\Alamat;
use App\Models\Kategori;
use App\Models\Pikup;

class BankController extends ApiController
{
    public function listbanks(Bank $bank)
    {
        $banks = $bank->all();
        
        return $this->sendResponse($banks, 'Bank list.');
    }

    public function ambil(Request $request)
    {
        
        // $ambil = new Ambil();
        // $ambil->user_id = $request->user_id;
        // $ambil->save(); 
        $user = User::find($request->user_id);
        // dd($user->name);
        $alamat = Alamat::where('model_id', $request->user_id)
                        ->where('model_type', 'App\Models\User')
                        ->first();

        $ambil = Ambil::create([
            'user_id' => $request->user_id,
        ]);
                        
        $dt[] = ([
            'user_id' => $request->user_id,
            'name' => $user->name,
            'alamat' => $alamat->alamat,
            'kodepos' => $alamat->kode_pos,
            'phone' => $user->getMeta('phone')
        ]);

        return $this->sendResponse([], 'Ambil.');
    }
    public function daftarAmbil()
    {
        $hs = array();
        $dt = Ambil::get();
        foreach ($dt as $d) {
            $hs[] = ([
                'user_id' => $d->user_id,
                'name' => $d->name,
                'alamat' => $d->alamat,
                'kodepos' => $d->kode_pos,
                'phone' => $d->phone
            ]);
        }

        return $this->sendResponse($hs, 'Daftar ambil.');
    }

    public function pikup(Request $request)
    {
        $user = User::find($request->user_id);
        $cat = Kategori::find($request->kategori_id);

        $pikup = Pikup::create([
            'user_id' => $request->user_id,
            'kategori_id' => $request->kategori_id,
            'berat' => $request->berat,
        ]);

        return $this->sendResponse($pikup, 'Masuk pikup.');
    }

    public function proses(Request $request)
    {
        $pkid = $request->pikup_id;
        $usid = $request->user_id;
        $bkid = $request->bank_id;
        $jntrak = $request->jenis_transaksi;

        $pro = Transaksi::create([
            'jenis_transaksi' => $jntrak,
            'user_id' => $usid,
            'bank_id' => $bkid,
        ]);

        return $this->sendResponse($pro, 'Transaksi masuk.');
    }

    public function tampil()
    {
        $ambil = Ambil::all();
        
        $data = [];
        foreach ($ambil as $value) {
           $row = [];
           $row['id'] = $value->id;
           $row['user_id'] = $value->user_id;
           $row['alamat'] = $value->user->alamats->first()->alamat;
           $row['kodepos'] = $value->user->alamats->first()->kode_pos;
           $row['phone'] = $value->user->getMeta('phone');
           $data[] = $row;
        }
        // $user = new User::find(1);
        // dd($user->alamats);
        // $data[] = ([
        //     'alamat' => $user->alamats
        // ]);
        
        // App\Models\Ambil::find(9)->user->alamats

        return $this->sendResponse($data, 'Hasil ambil.');
    }
    
}
