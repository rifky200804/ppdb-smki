@extends('layouts.app')
@section('contentFrontend')



        <div class="slider-area ">
            <!-- Mobile Menu -->
            <div class="single-slider slider-height2 d-flex align-items-center" data-background="{{asset('assets/img/hero/services_hero.jpg')}}" style="background-image: url(&quot;assets/img/hero/services_hero.jpg&quot;);">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2>Pendaftaran Peserta Didik Baru </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="services-area">
            <div class="container">
            <br><br>
                <!-- section tittle -->
                <div class="blog_details">
                    <h3><label>Details Peserta</label></h3>
                    @include('main.data.value.peserta')
                    <br>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <h3>Details Orang Tua</h3>  
                            </div>
                        </div>
                    </div>
                    
                    @include('main.data.value.orangtua')
                    <br>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <h3>Details Asal Sekolah</h3>   
                            </div>
                        </div>
                    </div>
                    
                    @include('main.data.value.asalsekolah')
                    <br>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <h3>Details Data Syarat</h3>   
                            </div>
                        </div>
                    </div>

                    @include('main.data.value.syarat')

                    <br>
                    @if(isset(Auth::user()->role)== 'admin' || isset(Auth::user()->role) == 'petugas')
                <div class="row">
                    <div class="col-sm-2">
                                <a href="{{route('peserta')}}" class="genric-btn warning">Kembali</a>
                            </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <form action="{{route('ket.syarat',$item->syarat_id)}}" method="post">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="keterangan_id" value="2">
                                <button type="submit" class="genric-btn danger">Tidak Lulus</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-sm-1">
                        <div class="form-group">
                            <form action="{{route('ket.syarat',$item->syarat_id)}}" method="post">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="keterangan_id" value="3">
                                <button type="submit" class="genric-btn info">Lulus</button>
                            </form> 
                        </div>
                    </div>
                    @if($syarat->keterangan_id == 3)
                    <div class="col-sm-2 text-right">
                        <div class="form-group">
                            <a href="{{route('survey',$item->syarat_id)}}" class="genric-btn success">Next</a>
                        </div>
                    </div>
                    @endif
                </div>
                @endif
                </div>
            </div>
        </div>
@endsection