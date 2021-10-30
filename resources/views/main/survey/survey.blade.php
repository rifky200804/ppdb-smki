@extends('layouts.app')

@section('title','Survey')
@section('contentFrontend')
        <div class="slider-area ">
            <!-- Mobile Menu -->
            <div class="single-slider slider-height2 d-flex align-items-center" data-background="{{asset('assets/img/hero/services_hero.jpg')}}" style="background-image: url(&quot;assets/img/hero/services_hero.jpg&quot;);">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2>Survey Peserta</h2>
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
                    <form action="{{route('update.survey',$survey->id)}}" method="post">
                    @csrf
                    @method('PUT')
                        <div class="row">
                            <div class="col-sm-12">
                                <h3>A. Rekap Faktor Ekonomi</h3>
                            </div>
                        </div>
                        @include('main.survey.value.faktor_ekonomi')
                        <br>
                        <div class="row">
                            <div class="col-sm-12">
                                <h3>B. Rekap Faktor Kompetisi/Prestasi</h3>
                            </div>
                        </div>
                        @include('main.survey.value.faktor_prestasi')
                        
                        <div class="row">
                            <div class="col-sm-12">
                                <label for="catatan_khusus">Catatan Khusus</label>
                                <input type="text" name="catatan_khusus" id="catatan_khusus" class="form-control" value="{{$survey->catatan_khusus}}">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-12 text-right">
                                <button class="genric-btn primary" type="submit">Simpan</button>
                            </div>
                        </div>
                    </form>
                    @if(isset(Auth::user()->role)== 'admin' || isset(Auth::user()->role) == 'petugas')
                        <div class="row">
                            <div class="col-sm-2">
                                <a href="{{route('peserta.detail',$survey->id)}}" class="genric-btn warning">Kembali</a>
                            </div>

                            <div class="col-sm-2">
                                <div class="form-group">
                                    <form action="{{route('ket.survey',$survey->id)}}" method="post">
                                        @csrf
                                        @method('PUT')
                                        <input type="hidden" name="keterangan_id" value="2">
                                        <button type="submit" class="genric-btn danger">Tidak Lulus</button>
                                    </form>
                                </div>
                            </div>
                                <div class="col-sm-1">
                                    <div class="form-group">
                                        <form action="{{route('ket.survey',$survey->id)}}" method="post">
                                            @csrf
                                            @method('PUT')
                                            <input type="hidden" name="keterangan_id" value="3">
                                            <button type="submit" class="genric-btn info">Lulus</button>
                                        </form> 
                                    </div>
                                </div>
                                @if($survey->keterangan_id == 3)
                                <div class="col-sm-2 text-right">
                                    <div class="form-group">
                                        <a href="{{route('document',$survey->id)}}" class="genric-btn success">Next</a>
                                    </div>
                                </div>
                                @endif                 
                            </div>
                    @endif
            </div>
        </div>
@endsection