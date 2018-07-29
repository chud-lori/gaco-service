
@extends('layouts.dash')

@section('content')
<!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Kategori Sampah</li>
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
            <i class="fa fa-table"></i> Daftar Kategori Sampah</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Sampah</th>
                      <th>Harga</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                        <th>ID</th>
                      <th>Sampah</th>
                      <th>Harga</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <tr>
                        <tr>
                            @foreach ($cats as $cat)
                                <td>{{ $cat->id }}</td>
                                <td>{{ $cat->nama }}</td>
                                <td>{{ $cat->harga }}/kg</td>
                        </tr>
                        @endforeach
                  </tbody>
                </table>
              </div>
            </div>
@endsection

