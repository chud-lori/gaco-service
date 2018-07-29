<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;
use App\Models\App;
use App\Models\User;
use App\Models\Transaksi;
use App\Models\Kategori;

class TransController extends ApiController
{
    public function bankSend(Request $request)
    {
        $transaksi = Transaksi::create([
            'jenis_transaksi' => $request->jenis,
            'status_transaksi' => $request->status,
            'user_id' => $request->user_id,
            'bank_id' => $request->bank_id,
            'alamat_id' => $request->alamat_id,
        ]);
        // $transaksi = new Transaksi();
        // $transaksi->jenis_transaksi = $request->jenis;
        // $transaksi->status_transaksi = $request->status;
        // $transaksi->user_id = $request->user_id;
        // $transaksi->bank_id = $request->bank_id;
        // $transaksi->alamat_id = $request->alamat_id;
        // $transaksi->save();

        $trakat = new Transaksi;
        $tr = $trakat->kategoris();
        $tr->transaksi_id = $transaksi->id;
        $tr->kategori_id = $request->kategori;
        $tr->berat = $request->berat;
        $tr->total = $request->total;
        $tr->save();

        $tr->kategoris()->sync($tr);

        // return $this->sendResponse($this->userData($user), 'Transsaction is successful.');
    }
}
