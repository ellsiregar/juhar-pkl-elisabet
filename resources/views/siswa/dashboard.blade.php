@extends('siswa.layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="row bg-light rounded align-items-center justify-content-center mx-0">
    <div class="col-md-6 text-center p-3">
        <h3>Hi,{{ Auth::guard('siswa')->user()->nama_siswa }} Selamat datang di halaman dashboard.</h3>
    </div>
</div>
@endsection
