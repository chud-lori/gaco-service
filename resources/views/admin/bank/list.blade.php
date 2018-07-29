@extends('layouts.dash')

@section('content')
<!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Daftar Bank</li>
      </ol>
    <!-- Example DataTables Card-->
    {{-- @foreach ($almts->alamats as $aa)
      {{$aa->alamat}}
    @endforeach --}}
    @if (session('banktambah'))
        <div class="alert alert-success" role="alert">
            {{ session('banktambah') }}
        </div>
    @endif
    <div class="card mb-3">
            <div class="card-header">
            <i class="fa fa-table"></i> Daftar Bank Sampah</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Nama</th>
                      <th>Alamat</th>
                      <th>Kode Pos</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Kode Pos</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @foreach ($banks as $bank)
                    <tr>
                        <td>{{ $bank->id }}</td>
                        <td>{{ $bank->nama }}</td>
                        @foreach ($bank->alamats as $alamat)
                        <td>{{$alamat->alamat}}</td>
                        <td>{{$alamat->kode_pos}}</td>
                        @endforeach
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
@endsection
