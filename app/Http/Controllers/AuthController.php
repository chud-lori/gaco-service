<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Alamat;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\ApiController;

class AuthController extends ApiController
{
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email'    => 'required|string|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->sendError('Login failed', [], 200);
        }

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $user = auth()->user();

            // activity()->log($user->name . " telah login");

            return $this->sendResponse($this->userData($user), 'User login successfully.');
            
        }

        return $this->sendError(trans('auth.failed'), [], 200);
    }

    public function loginPetugas(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email'    => 'required|string|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->sendError('Login failed', [], 200);
        }

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $user = auth()->user();

            if($user->hasRole('petugas')){
                return $this->sendResponse($this->userData($user), 'Petugas login successfully.');
            }
            return $this->sendError("Akses ditolak", [], 200);

            // activity()->log($user->name . " telah login");

            
        }

        return $this->sendError(trans('auth.failed'), [], 200);
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'     => 'required|string|max:255',
            'email'    => 'required|string|email|max:255|unique:users',
            // 'phone'    => 'required|unique:users',
            'alamat'   => 'required|string',
            'kodepos'   => 'required',
            'password' => 'required|min:6',
        ]);

        // dd($validator->errors());

        if ($validator->fails()) {
            return $this->sendError('Registration failed', [], 200);
        }

        $user = User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            // 'phone'    => $request->phone,
            'password' => bcrypt($request->password),
        ]);

        $alamat = new Alamat();
        $alamat->alamat = $request->alamat;
        $alamat->model_id = $user->id;
        $alamat->model_type = (new \Reflectionclass($user))->getName();
        $alamat->kode_pos = $request->kodepos;

        $alamat->save();

        $user->setMeta('phone', $request->phone);
        $user->save();
        
        

        return $this->sendResponse($this->userData($user), 'Registration is successful.');
    }

    public function userData($user)
    {
        $result = [
            'id'       => $user->id,
            'name'     => $user->name,
            'email'    => $user->email,
            'phone'    => $user->getMeta('phone'),
            // 'alamat'   => $user->alamats()->first()->alamat,
            // 'kodepos'   => $user->alamats()->first()->kode_pos
        ];
        return $result;
    }
}
