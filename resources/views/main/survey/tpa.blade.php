@extends('layouts.app')

@section('title','Nilai TPA')
@section('contentFrontend')
        <div class="slider-area ">
            <!-- Mobile Menu -->
            <div class="single-slider slider-height2 d-flex align-items-center" data-background="{{asset('assets/img/hero/services_hero.jpg')}}" style="background-image: url(&quot;assets/img/hero/services_hero.jpg&quot;);">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2>Nilai TPA Peserta</h2>
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
                    <form action="{{route('tpa.update',$tpa->id)}}" method="post">
                    @csrf
                    @method('PUT')
                        <div class="row">
                            <div class="col-sm-12">
                                <label for="mtk">Nilai MTK</label>
                                <input type="number" name="mtk" id="mtk" class="form-control" value="{{$tpa->mtk}}" placeholder="nilai : 1-10">
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-sm-12">
                                <label for="indonesia">Nilai Indonesia</label>
                                <input type="number" name="indonesia" id="indonesia" class="form-control" value="{{$tpa->indonesia}}" placeholder="nilai : 1-10">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <label for="psikotes">Nilai Psikotes</label>
                                <input type="number" name="psikotes" id="psikotes" class="form-control" value="{{$tpa->psikotes}}" placeholder="nilai : 1-10" >
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <label for="baca_alquran">Nilai Baca Al-Qur'an</label>
                                <input type="number" name="baca_alquran" id="baca_alquran" class="form-control" value="{{$tpa->baca_alquran}}" placeholder="nilai : 1-10" >
                            </div>
                        </div>

                        @if($tpa->rata_rata > 0)
                        <div class="row">
                            <div class="col-sm-12">
                                <label for="rata_rata">Rata - rata Nilai</label>
                                <input type="number" name="rata_rata" id="rata_rata" class="form-control" value="{{$tpa->rata_rata}}" disabled>
                            </div>
                        </div>
                        @endif

                        @if($tpa->grade == 'sangat baik' || $tpa->grade == 'baik' || $tpa->grade == 'kurang')
                        <div class="row">
                            <div class="col-sm-12">
                                <label for="grade">Grade</label>
                                <input type="text" name="grade" id="grade" class="form-control" value="{{$tpa->grade}}" disabled>
                            </div>
                        </div>
                        @endif

                        <br>
                        <div class="row">
                            <div class="col-sm-12 text-right">
                                <button class="genric-btn primary" type="submit">Simpan</button>
                            </div>
                        </div>
                    </form>
                   
                        <div class="row">
                            <div class="col-sm-2">
                                <a href="{{route('document',$tpa->id)}}" class="genric-btn warning">Kembali</a>
                            </div>

                            <div class="col-sm-2">
                                <div class="form-group">
                                    <form action="{{route('ket.tpa',$tpa->id)}}" method="post">
                                        @csrf
                                        @method('PUT')
                                        <input type="hidden" name="keterangan_id" value="2">
                                        <button type="submit" class="genric-btn danger">Tidak Lulus</button>
                                    </form>
                                </div>
                            </div>
                            <div class="col-sm-1">
                                <div class="form-group">
                                    <form action="{{route('ket.tpa',$tpa->id)}}" method="post">
                                        @csrf
                                        @method('PUT')
                                        <input type="hidden" name="keterangan_id" value="3">
                                        <button type="submit" class="genric-btn info">Lulus</button>
                                    </form> 
                                </div>
                            </div>
                            @if($tpa->keterangan_id == 3)
                            <div class="col-sm-2 text-right">
                                <div class="form-group">
                                    <a href="{{route('hasil',$tpa->id)}}" class="genric-btn success">Next</a>
                                </div>
                            </div>
                            @endif                 
                        </div>
                    
            </div>
        </div>
@endsection