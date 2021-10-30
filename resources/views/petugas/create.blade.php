@extends('layouts.app')

@section('title','SMKI UTAMA')
@push('css')
<link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" />

@endpush
@section('contentFrontend')
<div class="slider-area ">
            <!-- Mobile Menu -->
            <div class="single-slider slider-height2 d-flex align-items-center" data-background="{{asset('assets/img/hero/about_hero.jpg')}}" style="background-image: url(&quot;{{asset('assets/img/hero/about_hero.jpg')}}&quot;);">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2>Formulir Data Petugas</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="services-area">
            <div class="container">
                <!-- section tittle -->
                <div class="blog_details">
           
                            <h3><label>Data Petugas</label></h3><br><br>
                            <form id="contact-form" action="{{ route('petugas.store') }}" method="POST">
                                {{ csrf_field() }}
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Nama Lengkap</label>   
                                        <input type="text" class="form-control" name="nama" placeholder="contoh: Petugas" autocomplete="off" required> 
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Jenis Kelamin</label>   
                                        <select class="form-control" style="width: 100%;height: 34px;" name="jenkel">
                                            
                                            <option value="Laki-Laki" required>Laki-Laki</option>
                                            <option value="Perempuan" required>Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Username</label>   
                                        <input type="text" class="form-control" name="username" placeholder="contoh: petugas"  autocomplete="off" required> 
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                    <div class="col-sm-12 text-right">
                                        <div class="form-group">
                                            
                                            <button type="submit" class="btn" name="save">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>        
                        
                            </form>
                        </div>
                </div>
            </div>

        
@stop
@push('js')
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.23/angular.min.js"></script>
@endpush