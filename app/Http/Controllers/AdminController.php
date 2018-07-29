<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bank;
use App\Models\Kategori;
use App\Models\Alamat;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        $usr = User::get();
        $bnk = Bank::get();
        return view('admin.index', compact('usr', 'bnk'));
    }

    // Block code Bank
    public function addBank()
    {
        return view('admin.bank.add');
    }
    public function storeBank(Request $request)
    {
        $this->validate($request, [
            'namabank' => 'required',
            'emailbank' => 'required|email',
            'password' => 'min:6|required',
            'alamatbank' => 'required',
            'kodeposbank' => 'required'
          ]);

        // Bank::create([
            // 'nama' => $request->namabank
        // ]);
        $bank = new Bank();
        $bank->nama = $request->namabank;
        $bank->save();

        $user = new User();
        $user->name = $request->namabank;
        $user->email = $request->emailbank;
        $user->password = bcrypt($request->password);
        $user->save();
        // dd($user);
        $user->attachRole(1);
            // dd($bank);
        $alamat = new Alamat();
        $alamat->alamat = $request->alamatbank;
        $alamat->model_id = $bank->id;
        $alamat->model_type = (new \Reflectionclass($bank))->getName();
        $alamat->kode_pos = $request->kodeposbank;

        $alamat->save();



          return redirect('/admin/bank/list')->with('banktambah', 'Berhasil menambah');;
    
    }
    public function listBank()
    {
        $banks = Bank::get();
        // $almts = Bank::find(1);

        return view('admin.bank.list', compact('banks'));
    }

    public function cat()
    {
        $cats = Kategori::get();

        return view('admin.bank.cat', compact('cats'));
    }

    // End block code Bank

}
