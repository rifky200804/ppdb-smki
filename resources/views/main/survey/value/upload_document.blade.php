@extends('layouts.app')

@section('title','Daftar')
@push('css')
<link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" />

@endpush
@section('contentFrontend')
        <div class="slider-area ">
            <!-- Mobile Menu -->
            <div class="single-slider slider-height2 d-flex align-items-center" data-background="{{asset('assets/img/hero/services_hero.jpg')}}" style="background-image: url(&quot;assets/img/hero/services_hero.jpg&quot;);">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2>Upload Dokumentasi</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="services-area section-padding2">
            <div class="container">
                <!-- section tittle -->
                <div class="blog_details">
                            <h3>A. Upload Foto Untuk Dokumentasi</h3>
                            <form id="contact-form" action="{{route('document.update',$document->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method ('PUT')
                            <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                         <label>Foto 1</label>
                                            <input type="file" class="form-control" name="foto_1"  autocomplete="off" style="border:none;"><h5>  *upload Dokumentasi 1</h5>
                                        </div>
                                    </div>
                            </div>
                            <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                         <label>Foto 2</label>
                                            <input type="file" class="form-control" name="foto_2"  autocomplete="off" style="border:none;"><h5>*upload Dokumentasi 2</h5>
                                        </div>
                                    </div>
                            </div>
                            <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                         <label>Foto 3</label>
                                            <input type="file" class="form-control" name="foto_3"  autocomplete="off" style="border:none;"><h5>*upload Dokumentasi 3</h5>
                                        </div>
                                    </div>
                            </div>
                            <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                         <label>Foto 4</label>
                                            <input type="file" class="form-control" name="foto_4"  autocomplete="off" style="border:none;"><h5>*upload Dokumentasi 4</h5>
                                        </div>
                                    </div>
                            </div>
                            <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                         <label>Foto 5</label>
                                            <input type="file" class="form-control" name="foto_5"  autocomplete="off" style="border:none;"><h5>*upload Dokumentasi 5</h5>
                                        </div>
                                    </div>
                            </div>

                        <br><br>
                            <div class="row">
                                <div class="col-sm-6 text-left">
                                    <div class="form-group">                                                                               
                                        <button type="submit" class="genric-btn warning" >Kembali</button>
                                    </div>
                                </div>
                                <div class="col-sm-6 text-right">
                                    <div class="form-group">                                                                               
                                        <button type="submit" class="genric-btn primary" >Simpan</button>
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