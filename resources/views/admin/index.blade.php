@extends('layouts.dash')

@section('content')
<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="#">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">My Dashboard</li>
  </ol>
  <!-- Icon Cards-->
  <div class="row">
    <div class="col-xl-3 offset-md-2 col-sm-6 mb-3">
      <div class="card text-white bg-primary o-hidden h-100">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fa fa-fw fa-user"></i>
          </div>
          <div class="mr-5">{{ count($usr) }}</div>
        </div>
        <a class="card-footer text-white clearfix small z-1" href="#">
          <span class="float-left">View Details</span>
          <span class="float-right">
            <i class="fa fa-angle-right"></i>
          </span>
        </a>
      </div>
    </div>
    <div class="col-xl-3 offset-md-3 col-sm-6 mb-3">
      <div class="card text-white bg-success o-hidden h-100">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fa fa-fw fa-recycle"></i>
          </div>
          <div class="mr-5">{{ count($bnk) }}</div>
        </div>
        <a class="card-footer text-white clearfix small z-1" href="/admin/bank/list">
          <span class="float-left">View Details</span>
          <span class="float-right">
            <i class="fa fa-angle-right"></i>
          </span>
        </a>
      </div>
    </div>
@endsection
