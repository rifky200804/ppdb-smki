@extends('layouts.app')

@section('contentFrontend')
    <div class="container">
        <H1>Selamat Datang disini</H1>
        <div class="text-center">
            <a href="{{ route('daftar.peserta') }}" class="btn header-btn">Daftar</a>
        </div>
    </div>
@endsection