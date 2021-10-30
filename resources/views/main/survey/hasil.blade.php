@extends('layouts.app')

@section('title','Hasil')
@section('contentFrontend')
        <div class="slider-area ">
            <!-- Mobile Menu -->
            <div class="single-slider slider-height2 d-flex align-items-center" data-background="{{asset('assets/img/hero/services_hero.jpg')}}" style="background-image: url(&quot;assets/img/hero/services_hero.jpg&quot;);">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2>Hasil</h2>
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
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label><b> Status</b></label>   
                                </div>
                            </div>
                            <div class="col-sm-9">
                                <div class="form-group">
                                    <label>: 
                                        <b>{{$value->keterangan->keterangan}}</b>
                                    </label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label>Akta Lahir</label>   
                                </div>
                            </div>
                            <div class="col-sm-9">
                                <div class="form-group">
                                    <label>: 
                                        @if($value->syarat->akta_lahir > 0)
                                        
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16" style="color:green;">
                                            <path d="M13.485 1.431a1.473 1.473 0 0 1 2.104 2.062l-7.84 9.801a1.473 1.473 0 0 1-2.12.04L.431 8.138a1.473 1.473 0 0 1 2.084-2.083l4.111 4.112 6.82-8.69a.486.486 0 0 1 .04-.045z"/>
                                        </svg>
                                            
                                        @else

                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16" style="color:red;">
                                            <path d="M1.293 1.293a1 1 0 0 1 1.414 0L8 6.586l5.293-5.293a1 1 0 1 1 1.414 1.414L9.414 8l5.293 5.293a1 1 0 0 1-1.414 1.414L8 9.414l-5.293 5.293a1 1 0 0 1-1.414-1.414L6.586 8 1.293 2.707a1 1 0 0 1 0-1.414z"/>
                                        </svg>
                                        @endif
                                    
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label>Kartu Keluarga</label>   
                                </div>
                            </div>
                            <div class="col-sm-9">
                                <div class="form-group">
                                    <label>: 
                                        @if($value->syarat->kartu_keluarga > 0)
                                        
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16" style="color:green;">
                                            <path d="M13.485 1.431a1.473 1.473 0 0 1 2.104 2.062l-7.84 9.801a1.473 1.473 0 0 1-2.12.04L.431 8.138a1.473 1.473 0 0 1 2.084-2.083l4.111 4.112 6.82-8.69a.486.486 0 0 1 .04-.045z"/>
                                        </svg>
                                            
                                        @else

                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16" style="color:red;">
                                            <path d="M1.293 1.293a1 1 0 0 1 1.414 0L8 6.586l5.293-5.293a1 1 0 1 1 1.414 1.414L9.414 8l5.293 5.293a1 1 0 0 1-1.414 1.414L8 9.414l-5.293 5.293a1 1 0 0 1-1.414-1.414L6.586 8 1.293 2.707a1 1 0 0 1 0-1.414z"/>
                                        </svg>
                                        @endif
                                    
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label>Foto Peserta</label>   
                                </div>
                            </div>
                            <div class="col-sm-9">
                                <div class="form-group">
                                    <label>: 
                                        @if($value->syarat->foto_peserta > 0)
                                        
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16" style="color:green;">
                                            <path d="M13.485 1.431a1.473 1.473 0 0 1 2.104 2.062l-7.84 9.801a1.473 1.473 0 0 1-2.12.04L.431 8.138a1.473 1.473 0 0 1 2.084-2.083l4.111 4.112 6.82-8.69a.486.486 0 0 1 .04-.045z"/>
                                        </svg>
                                            
                                        @else

                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16" style="color:red;">
                                            <path d="M1.293 1.293a1 1 0 0 1 1.414 0L8 6.586l5.293-5.293a1 1 0 1 1 1.414 1.414L9.414 8l5.293 5.293a1 1 0 0 1-1.414 1.414L8 9.414l-5.293 5.293a1 1 0 0 1-1.414-1.414L6.586 8 1.293 2.707a1 1 0 0 1 0-1.414z"/>
                                        </svg>
                                        @endif
                                    
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label>Surat Keterangan Tidak Mampu</label>   
                                </div>
                            </div>
                            <div class="col-sm-9">
                                <div class="form-group">
                                    <label>: 
                                        @if($value->syarat->ket_tidak_mampu > 0)
                                        
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16" style="color:green;">
                                            <path d="M13.485 1.431a1.473 1.473 0 0 1 2.104 2.062l-7.84 9.801a1.473 1.473 0 0 1-2.12.04L.431 8.138a1.473 1.473 0 0 1 2.084-2.083l4.111 4.112 6.82-8.69a.486.486 0 0 1 .04-.045z"/>
                                        </svg>
                                            
                                        @else

                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16" style="color:red;">
                                            <path d="M1.293 1.293a1 1 0 0 1 1.414 0L8 6.586l5.293-5.293a1 1 0 1 1 1.414 1.414L9.414 8l5.293 5.293a1 1 0 0 1-1.414 1.414L8 9.414l-5.293 5.293a1 1 0 0 1-1.414-1.414L6.586 8 1.293 2.707a1 1 0 0 1 0-1.414z"/>
                                        </svg>
                                        @endif
                                    
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label>KTP Ayah</label>   
                                </div>
                            </div>
                            <div class="col-sm-9">
                                <div class="form-group">
                                    <label>: 
                                        @if($value->syarat->ktp_ayah > 0)
                                        
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16" style="color:green;">
                                            <path d="M13.485 1.431a1.473 1.473 0 0 1 2.104 2.062l-7.84 9.801a1.473 1.473 0 0 1-2.12.04L.431 8.138a1.473 1.473 0 0 1 2.084-2.083l4.111 4.112 6.82-8.69a.486.486 0 0 1 .04-.045z"/>
                                        </svg>
                                            
                                        @else

                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16" style="color:red;">
                                            <path d="M1.293 1.293a1 1 0 0 1 1.414 0L8 6.586l5.293-5.293a1 1 0 1 1 1.414 1.414L9.414 8l5.293 5.293a1 1 0 0 1-1.414 1.414L8 9.414l-5.293 5.293a1 1 0 0 1-1.414-1.414L6.586 8 1.293 2.707a1 1 0 0 1 0-1.414z"/>
                                        </svg>
                                        @endif
                                    
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label>KTP Ibu</label>   
                                </div>
                            </div>
                            <div class="col-sm-9">
                                <div class="form-group">
                                    <label>: 
                                        @if($value->syarat->ktp_ibu > 0)
                                        
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16" style="color:green;">
                                            <path d="M13.485 1.431a1.473 1.473 0 0 1 2.104 2.062l-7.84 9.801a1.473 1.473 0 0 1-2.12.04L.431 8.138a1.473 1.473 0 0 1 2.084-2.083l4.111 4.112 6.82-8.69a.486.486 0 0 1 .04-.045z"/>
                                        </svg>
                                            
                                        @else

                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16" style="color:red;">
                                            <path d="M1.293 1.293a1 1 0 0 1 1.414 0L8 6.586l5.293-5.293a1 1 0 1 1 1.414 1.414L9.414 8l5.293 5.293a1 1 0 0 1-1.414 1.414L8 9.414l-5.293 5.293a1 1 0 0 1-1.414-1.414L6.586 8 1.293 2.707a1 1 0 0 1 0-1.414z"/>
                                        </svg>
                                        @endif
                                    
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label>KTP wali</label>   
                                </div>
                            </div>
                            <div class="col-sm-9">
                                <div class="form-group">
                                    <label>: 
                                        @if($value->syarat->ktp_wali > 0)
                                        
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16" style="color:green;">
                                            <path d="M13.485 1.431a1.473 1.473 0 0 1 2.104 2.062l-7.84 9.801a1.473 1.473 0 0 1-2.12.04L.431 8.138a1.473 1.473 0 0 1 2.084-2.083l4.111 4.112 6.82-8.69a.486.486 0 0 1 .04-.045z"/>
                                        </svg>
                                            
                                        @else

                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16" style="color:red;">
                                            <path d="M1.293 1.293a1 1 0 0 1 1.414 0L8 6.586l5.293-5.293a1 1 0 1 1 1.414 1.414L9.414 8l5.293 5.293a1 1 0 0 1-1.414 1.414L8 9.414l-5.293 5.293a1 1 0 0 1-1.414-1.414L6.586 8 1.293 2.707a1 1 0 0 1 0-1.414z"/>
                                        </svg>
                                        @endif
                                    
                                    </label>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-sm-2">
                                <a href="{{route('tpa.edit',$value->id)}}" class="genric-btn warning">Kembali</a>
                            </div>

                            <div class="col-sm-2">
                                <div class="form-group">
                                    <form action="{{route('keterangan',$value->id)}}" method="post">
                                        @csrf
                                        @method('PUT')
                                        <input type="hidden" name="keterangan_id" value="2">
                                        <button type="submit" class="genric-btn danger">Tidak Lulus</button>
                                    </form>
                                </div>
                            </div>
                                <div class="col-sm-1">
                                    <div class="form-group">
                                        <form action="{{route('keterangan',$value->id)}}" method="post">
                                            @csrf
                                            @method('PUT')
                                            <input type="hidden" name="keterangan_id" value="3">
                                            <button type="submit" class="genric-btn info">Lulus</button>
                                        </form> 
                                    </div>
                                </div>             
                            </div>
                        
                    </div>
                </div>
            </div>
@endsection