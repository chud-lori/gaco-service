@extends('layouts.dash  ')

@section('content')
<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="#">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Tambah Bank</li>
  </ol>

                    <form role="form" action="/admin/bank/list" method="POST">
                        <div class="form-group">
                          <label for="namabank">Nama Petugas</label>
                          <input type="text" class="form-control" name="namabank" id="exampleInputEmail1" placeholder="Masukan Nama Petugas">
                          @if($errors->has('namabank'))
                                                  <span> {{ $errors->first('namabank') }} </span>
                                              @endif
                        </div>
                        <div class="form-group">
                          <label for="emailbank">Email</label>
                          <input type="email" class="form-control" name="emailbank" id="exampleInputEmail1" placeholder="Masukan Email">
                          @if($errors->has('emailbank'))
                                                  <span> {{ $errors->first('emailbank') }} </span>
                                              @endif
                        </div>
                        <div class="form-group">
                          <label for="password">Password</label>
                          <input type="password" class="form-control" name="password" id="exampleInputEmail1" placeholder="Masukan Password">
                          @if($errors->has('password'))
                                                  <span> {{ $errors->first('password') }} </span>
                                              @endif
                        </div>
                        <div class="form-group">
                          <label for="alamatbank">Alamat Bank</label>
                          <input type="text" class="form-control" name="alamatbank" id="exampleInputPassword1" placeholder="Masukan Alamat Bank">
                          @if($errors->has('alamatbank'))
                                                  <span> {{ $errors->first('alamatbank') }} </span>
                                              @endif
                        </div>
                        <div class="form-group">
                          <label for="kodeposbank">Kode Pos Bank</label>
                          <input type="text" class="form-control" name="kodeposbank" id="exampleInputPassword1" placeholder="Masukan Kode Pos Bank">
                          @if($errors->has('kodeposbank'))
                                                  <span> {{ $errors->first('kodeposbank') }} </span>
                                              @endif
                        </div>
                        <button type="submit" name="submit" class="btn btn-default">Submit</button>
                        {{-- <input type="submit" name="submit" id="" value="kirim"> --}}
                      
                        {{ csrf_field() }}
                      </form>  
@endsection
