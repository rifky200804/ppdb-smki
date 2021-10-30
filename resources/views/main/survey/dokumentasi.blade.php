@extends('layouts.app')

@section('title','Dokumentasi')
@section('contentFrontend')
<div class="slider-area ">
            <!-- Mobile Menu -->
            <div class="single-slider slider-height2 d-flex align-items-center" data-background="{{asset('assets/img/hero/services_hero.jpg')}}" style="background-image: url(&quot;assets/img/hero/services_hero.jpg&quot;);">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2>Dokumentasi Rumah Peserta</h2>
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
                        <div class="row">
                            <div class="col-sm-12">
                                <a href="{{route('document.edit',$document->id)}}" class="genric-btn primary">Edit Dokumentasi</a>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-12">

                                @if($document->foto1 > 0)
                                <h4>Foto 1</h4>
                                
                                    <div class="single-cases-img   mb-30">
                                        <img src="{{asset('document/'.$document->foto1)}}" size="200px"  width="200px" alt="">
                                        <!-- img hover caption -->
                                    </div>
                                    <div class="single-cases-cap single-cases-cap2">
                                        <h4><a href="{{ asset('document/'.$document->foto1) }}" target="_blank">Live Photos</a></h4>
                                    </div>
                                    
                                
                                @endif
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-sm-12">

                                @if($document->foto2 > 0)
                                <h4>Foto 2</h4>
                                
                                    <div class="single-cases-img mb-30">
                                        <img src="{{asset('document/'.$document->foto2)}}" size="200px"  width="200px"  alt="">
                                        <!-- img hover caption -->
                                    </div>
                                    <div class="single-cases-cap single-cases-cap2">
                                        <h4><a href="{{ asset('document/'.$document->foto2) }}" target="_blank">Live Photos</a></h4>
                                    </div>
                                    
                                
                                @endif
                            </div>
                        </div>
                         
                        <div class="row">
                            <div class="col-sm-12">

                                @if($document->foto3 > 0)
                                <h4>Foto 3</h4>
                                
                                    <div class="single-cases-img  mb-30">
                                        <img src="{{asset('document/'.$document->foto3)}}" size="200px"  width="200px" alt="">
                                        <!-- img hover caption -->
                                    </div>
                                    <div class="single-cases-cap single-cases-cap2">
                                        <h4><a href="{{ asset('document/'.$document->foto3) }}" target="_blank">Live Photos</a></h4>
                                    </div>
                                    
                                
                                @endif
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">

                                @if($document->foto4 > 0)
                                <h4>Foto 4</h4>
                                
                                    <div class="single-cases-img  mb-30">
                                        <img src="{{asset('document/'.$document->foto4)}}" size="200px"  width="200px" alt="">
                                        <!-- img hover caption -->
                                    </div>
                                    <div class="single-cases-cap single-cases-cap2">
                                        <h4><a href="{{ asset('document/'.$document->foto4) }}" target="_blank">Live Photos</a></h4>
                                    </div>
                                    

                                @endif
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">

                                @if($document->foto5 > 0)
                                <h4>Foto 5</h4>
                                
                                    <div class="single-cases-img  mb-30">
                                        <img src="{{asset('document/'.$document->foto5)}}" size="200px"  width="200px" alt="">
                                        <!-- img hover caption -->
                                    </div>

                                    <div class="single-cases-cap single-cases-cap2">
                                        <h4><a href="{{ asset('document/'.$document->foto5) }}" target="_blank">Live Photos</a></h4>
                                    </div>
                                    
                                @endif
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-sm-2">
                                <a href="{{route('survey',$document->id)}}" class="genric-btn warning">Kembali</a>
                            </div>
                            
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <form action="{{route('ket.document',$document->id)}}" method="post">
                                        @csrf
                                        @method('PUT')
                                        <input type="hidden" name="keterangan_id" value="2">
                                        <button type="submit" class="genric-btn danger">Tidak Lulus</button>
                                    </form>
                                </div>
                            </div>

                            <div class="col-sm-1">
                                <div class="form-group">
                                    <form action="{{route('ket.document',$document->id)}}" method="post">
                                        @csrf
                                        @method('PUT')
                                        <input type="hidden" name="keterangan_id" value="3">
                                        <button type="submit" class="genric-btn info">Lulus</button>
                                    </form> 
                                </div>
                            </div>
                            @if($document->keterangan_id == 3)
                            <div class="col-sm-2 text-right">
                                <div class="form-group">
                                    <a href="{{route('tpa.edit',$document->id)}}" class="genric-btn success">Next</a>
                                </div>
                            </div>
                            @endif                 
                        </div>

                        </div>

                </div>
            </div>
        </div>    
@endsection