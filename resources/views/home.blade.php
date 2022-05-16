@extends('master')
{{-- test --}}
@section('content')
  <section class="section">
    <div class="section-header">
      <h1>Dashboard</h1>
    </div>
    @if (Auth::user()->level == 'admin')
      <div class="row">
        <div class="col-lg-3 col-md-6 col-md-6 col-12">
          <div class="card card-statistic-1">
            <div class="card-icon bg-primary">
              <i class="far fa-user"></i>
            </div>
            <div class="wrap">
              <div class="card-header">
                <h4>Total User</h4>
              </div>
              <div class="card-body">
                <h5>{{ $user }}</h5>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-md-6 col-12">
          <div class="card card-statistic-1">
            <div class="card-icon bg-primary">
              <i class="far fa-user"></i>
            </div>
            <div class="wrap">
              <div class="card-header">
                <h4>Total Product</h4>
              </div>
              <div class="card-body">
                <h5>{{ $product }}</h5>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-md-6 col-12">
          <div class="card card-statistic-1">
            <div class="card-icon bg-primary">
              <i class="far fa-user"></i>
            </div>
            <div class="wrap">
              <div class="card-header">
                <h4>Total Categories</h4>
              </div>
              <div class="card-body">
                <h5>{{ $categories }}</h5>
              </div>
            </div>
          </div>
        </div>
      </div>

    @elseif (Auth::user()->level == 'kasir')
      <div class="row">
        <div class="col-lg-3 col-md-6 col-md-6 col-12">
          <div class="card card-statistic-1">
            <div class="card-icon bg-success">
              <i class="far fa-user"></i>
            </div>
            <div class="wrap">
              <div class="card-header">
                <h4>Data Transaksi</h4>
              </div>
              <div class="card-body">
                <h5>nanti aja</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    @endif
    <div class="row">
      <div class="col-12">
        <div class="col-12 mb-4">
          <div class="hero text-white hero-bg-image hero-bg-parallax">
            <div class="hero-inner">
              <h2>Selamat Datang, {{ Auth::user()->name }} !</h2>
              <p class="lead">hak akses {{ Auth::user()->level }} telah diberikan kepada akun
                Anda!
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
