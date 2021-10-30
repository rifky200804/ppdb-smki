@extends('layouts.app')

@section('title','Daftar')
@push('css')
<link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" />

@endpush
@section('contentFrontend')
        <div class="slider-area ">
            <!-- Mobile Menu -->
            <div class="single-slider slider-height2 d-flex align-items-center" data-background="assets/img/hero/services_hero.jpg" style="background-image: url(&quot;assets/img/hero/services_hero.jpg&quot;);">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2>Pendaftaran Siswa Baru </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="services-area section-padding2">
            <div class="container">
                <!-- section tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
                            <h2>Pendaftaran Siswa Baru</h2>
                        </div>
                    </div>
                </div>
                <div class="blog_details">
           
                            <h3><label>C. ASAL SEKOLAH</label></h3><br><br>
                            <form id="contact-form" action="{{ route('daftar-peserta3') }}" method="post">
                                {{ csrf_field() }}
                            <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                         <label>Asal Sekolah</label>   
                                            <input type="text" class="form-control" name="asal_sekolah" placeholder="Asal Sekolah" autocomplete="off" value="{{$asalsekolah->asal_sekolah ?? ''}}" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                         <label>Tahun Lulus</label>   
                                            <input type="number" class="form-control" name="tahun_lulus" placeholder="Contoh: 2020" autocomplete="off" value="{{$asalsekolah->tahun_lulus ?? ''}}" required> 
                                        </div>
                                    </div>
                            </div>
                            <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>No. Peserta UN SMP</label>   
                                            <input type="number" class="form-control" name="no_peserta_un_smp" placeholder="Contoh: 2020" autocomplete="off" value="{{$asalsekolah->no_peserta_un_smp ?? ''}}" required> 
                                        </div>
                                    </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="alamat">Alamat Lengkap Sekolah</label>
                                        <textarea class="form-control" id="alamat" rows="3" name="alamat_lengkap" required>{{$asalsekolah->alamat_lengkap ?? ''}}</textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                    <div class="col-sm-6 text-left">
                                        <div class="form-group">
                                            <a href="{{route('daftar.ortu')}}" class="btn btn-warning" style="color:white;">previous</a>
                                        </div>
                                    </div>
                                <div class="col-sm-6 text-right">
                                    <div class="form-group">
                                        <input type="hidden" name="id_asalsekolah" value="{{$peserta->asal_sekolah_id}}">

                                        <input type="hidden" name="nisn" value="{{$peserta->nisn}}">
                                        <input type="hidden" name="nama_peserta" value="{{$peserta->nama_peserta}}">

                                        <input type="hidden" name="ukuran_baju" value="{{$peserta->ukuran_baju}}">
                                        <input type="hidden" name="jenis_kelamin" value="{{$peserta->jenkel}}">

                                        <input type="hidden" name="tempat_lahir" value="{{$peserta->tempat_lahir}}">
                                        <input type="hidden" name="tanggal_lahir" value="{{$peserta->tanggal_lahir}}">

                                        <input type="hidden" name="agama" value="{{$peserta->agama}}">
                                        <input type="hidden" name="anak_ke" value="{{$peserta->anak_ke}}">
                                        <input type="hidden" name="dari" value="{{$peserta->dari_saudara_kandung}}">
                                        
                                        <input type="hidden" name="status_siswa" value="{{$peserta->status_siswa}}">
                                        <input type="hidden" name="bahasa" value="{{$peserta->bahasa}}">

                                        <input type="hidden" name="alamat" value="{{$peserta->alamat}}">

                                        <input type="hidden" name="id_peserta" value="{{$peserta->id}}">
                                        <input type="hidden" name="orangtua_id" value="{{$peserta->orangtua_id}}">
                                        <input type="hidden" name="asal_sekolah_id" value="{{$peserta->asal_sekolah_id}}">
                                        <input type="hidden" name="syarat_id" value="{{$peserta->syarat_id}}">
                                        <input type="hidden" name="survey_id" value="{{$peserta->survey_id}}">
                                        <input type="hidden" name="dokumentasi_id" value="{{$peserta->dokumentasi_id}}">
                                        <input type="hidden" name="tpa_id" value="{{$peserta->tpa_id}}">
                                        <input type="hidden" name="keterangan_id" value="{{$peserta->keterangan_id}}">
                                        
                                        <input type="hidden" name="id_orangtua" value="{{$ortu->id}}">

                                        <input type="hidden" name="nama_ayah" value="{{$ortu->nama_ayah}}">
                                        <input type="hidden" name="usia_ayah" value="{{$ortu->usia_ayah}}">
                                        <input type="hidden" name="pendidikan_ayah" value="{{$ortu->pendidikan_ayah}}">
                                        <input type="hidden" name="pekerjaan_ayah" value="{{$ortu->pekerjaan_ayah}}">
                                        <input type="hidden" name="penghasilan_ayah" value="{{$ortu->penghasilan_ayah}}">
                                        <input type="hidden" name="no_telepon_ayah" value="{{$ortu->no_telepon_ayah}}">

                                        <input type="hidden" name="nama_ibu" value="{{$ortu->nama_ibu}}">
                                        <input type="hidden" name="usia_ibu" value="{{$ortu->usia_ibu}}">
                                        <input type="hidden" name="pendidikan_ibu" value="{{$ortu->pendidikan_ibu}}">
                                        <input type="hidden" name="pekerjaan_ibu" value="{{$ortu->pekerjaan_ibu}}">
                                        <input type="hidden" name="penghasilan_ibu" value="{{$ortu->penghasilan_ibu}}">
                                        <input type="hidden" name="no_telepon_ibu" value="{{$ortu->no_telepon_ibu}}">

                                        <input type="hidden" name="nama_wali" value="{{$ortu->nama_wali}}">
                                        <input type="hidden" name="usia_wali" value="{{$ortu->usia_wali}}">
                                        <input type="hidden" name="pendidikan_wali" value="{{$ortu->pendidikan_wali}}">
                                        <input type="hidden" name="pekerjaan_wali" value="{{$ortu->pekerjaan_wali}}">
                                        <input type="hidden" name="penghasilan_wali" value="{{$ortu->penghasilan_wali}}">
                                        <input type="hidden" name="no_telepon_wali" value="{{$ortu->no_telepon_wali}}">

                                        <button type="submit" class="btn" >Next</button>
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