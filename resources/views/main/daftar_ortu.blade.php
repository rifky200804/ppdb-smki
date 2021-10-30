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
           
                            <h3><label>B. DATA ORANG TUA / WALI</label></h3><br><br>
                            <form id="contact-form" action="{{ route('daftar-peserta2') }}" method="post">
                                {{ csrf_field() }}
                            <div class="row">
                                    <div class="col-sm-12">
                                        <h4>Ayah</h4>
                                    </div>
                            </div>
                            <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                         <label>Nama Ayah</label>   
                                            <input type="text" class="form-control" name="nama_ayah" placeholder="Nama Ayah" autocomplete="off" value="{{$ortu->nama_ayah ?? ''}}">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                         <label>Usia Ayah</label>   
                                            <input type="number" class="form-control" name="usia_ayah" placeholder="Usia Ayah" autocomplete="off" value="{{$ortu->usia_ayah ?? ''}}"> 
                                        </div>
                                    </div>
                            </div>
                            <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Pendidikan Ayah</label>   
                                            <select class="form-control" style="width: 100%;height: 34px;" name="pendidikan_ayah">
                                                <option disabled selected>Pendidikan Ayah</option>
                                                <option value="Tidak Sekolah" <?php if(isset($ortu->pendidikan_ayah)=='Tidak Sekolah'){echo "selected";} ?>>Tidak Sekolah</option>
                                                <option value="SD" <?php if(isset($ortu->pendidikan_ayah)=='SD'){echo "selected";} ?>>SD</option>
                                                <option value="SMP" <?php if(isset($ortu->pendidikan_ayah)=='SMP'){echo "selected";} ?>>SMP</option>
                                                <option value="SMK" <?php if(isset($ortu->pendidikan_ayah)=='SMK'){echo "selected";} ?>>SMK</option>
                                                <option value="D1" <?php if(isset($ortu->pendidikan_ayah)=='D1'){echo "selected";} ?>>D1</option>
                                                <option value="D2" <?php if(isset($ortu->pendidikan_ayah)=='D2'){echo "selected";} ?>>D2</option>
                                                <option value="D3" <?php if(isset($ortu->pendidikan_ayah)=='D3'){echo "selected";} ?>>D3</option>
                                                <option value="D4" <?php if(isset($ortu->pendidikan_ayah)=='D4'){echo "selected";} ?>>D4</option>
                                                <option value="S1" <?php if(isset($ortu->pendidikan_ayah)=='S1'){echo "selected";} ?>>S1</option>
                                                <option value="S2" <?php if(isset($ortu->pendidikan_ayah)=='S2'){echo "selected";} ?>>S2</option>
                                                <option value="S3" <?php if(isset($ortu->pendidikan_ayah)=='S3'){echo "selected";} ?>>S3</option>
                                            </select>   
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                         <label>Pekerjaan Ayah</label>   
                                            <input type="text" class="form-control" name="pekerjaan_ayah" placeholder="Pekerjaan Ayah" autocomplete="off" value="{{$ortu->pekerjaan_ayah ?? ''}}"> 
                                        </div>
                                    </div>
                            </div>
                            <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Penghasilan Ayah</label> 
                                            <input type="number" class="form-control" name="penghasilan_ayah" placeholder="Penghasilan Ayah" autocomplete="off" value="{{$ortu->penghasilan_ayah ?? ''}}">   
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                         <label>No Telepon Ayah</label>   
                                            <input type="number" class="form-control" name="no_telepon_ayah" placeholder="Nomor Telepon Ayah" autocomplete="off" value="{{$ortu->no_telepon_ayah ?? ''}}"> 
                                        </div>
                                    </div>
                            </div>

                            <br>

                            <div class="row">
                                    <div class="col-sm-12">
                                        <h4>Ibu</h4>
                                    </div>
                            </div>
                            <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Nama Ibu</label>   
                                            <input type="text" class="form-control" name="nama_ibu" placeholder="Nama Ibu" autocomplete="off" value="{{$ortu->nama_ibu ?? ''}}">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Usia Ibu</label>   
                                            <input type="number" class="form-control" name="usia_ibu" placeholder="Usia Ibu" autocomplete="off" value="{{$ortu->usia_ibu ?? ''}}"> 
                                        </div>
                                    </div>
                            </div>
                            <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Pendidikan Ibu</label>   
                                            <select class="form-control" style="width: 100%;height: 34px;" name="pendidikan_ibu">
                                                <option disabled selected>Pendidikan Ibu</option>
                                                <option value="Tidak Sekolah" <?php if(isset($ortu->pendidikan_ibu)=='Tidak Sekolah'){echo "selected";} ?>>Tidak Sekolah</option>
                                                <option value="SD" <?php if(isset($ortu->pendidikan_ibu)=='SD'){echo "selected";} ?>>SD</option>
                                                <option value="SMP" <?php if(isset($ortu->pendidikan_ibu)=='SMP'){echo "selected";} ?>>SMP</option>
                                                <option value="SMK" <?php if(isset($ortu->pendidikan_ibu)=='SMK'){echo "selected";} ?>>SMK</option>
                                                <option value="D1" <?php if(isset($ortu->pendidikan_ibu)=='D1'){echo "selected";} ?>>D1</option>
                                                <option value="D2" <?php if(isset($ortu->pendidikan_ibu)=='D2'){echo "selected";} ?>>D2</option>
                                                <option value="D3" <?php if(isset($ortu->pendidikan_ibu)=='D3'){echo "selected";} ?>>D3</option>
                                                <option value="D4" <?php if(isset($ortu->pendidikan_ibu)=='D4'){echo "selected";} ?>>D4</option>
                                                <option value="S1" <?php if(isset($ortu->pendidikan_ibu)=='S1'){echo "selected";} ?>>S1</option>
                                                <option value="S2" <?php if(isset($ortu->pendidikan_ibu)=='S2'){echo "selected";} ?>>S2</option>
                                                <option value="S3" <?php if(isset($ortu->pendidikan_ibu)=='S3'){echo "selected";} ?>>S3</option>
                                            </select>   
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                         <label>Pekerjaan Ibu</label>   
                                            <input type="text" class="form-control" name="pekerjaan_ibu" placeholder="Pekerjaan Ibu" autocomplete="off" value="{{$ortu->pekerjaan_ibu ?? ''}}"> 
                                        </div>
                                    </div>
                            </div>
                            <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Penghasilan Ibu</label> 
                                            <input type="number" class="form-control" name="penghasilan_ibu" placeholder="Penghasilan ibu" autocomplete="off" value="{{$ortu->penghasilan_ibu ?? ''}}">   
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                         <label>No Telepon Ibu</label>   
                                            <input type="number" class="form-control" name="no_telepon_ibu" placeholder="Nomor Telepon Ibu" autocomplete="off" value="{{$ortu->no_telepon_ibu ?? ''}}"> 
                                        </div>
                                    </div>
                            </div>

                            <br>

                            <div class="row">
                                    <div class="col-sm-12">
                                        <h4>Wali</h4>
                                    </div>
                            </div>
                            <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                         <label>Nama Wali</label>   
                                            <input type="text" class="form-control" name="nama_wali" placeholder="Nama Wali" autocomplete="off" value="{{$ortu->nama_wali ?? ''}}">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                         <label>Usia Wali</label>   
                                            <input type="number" class="form-control" name="usia_wali" placeholder="Usia Wali" autocomplete="off" value="{{$ortu->usia_wali ?? ''}}"> 
                                        </div>
                                    </div>
                            </div>
                            <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Pendidikan Wali</label>   
                                            <select class="form-control" style="width: 100%;height: 34px;" name="pendidikan_wali">
                                            <option disabled selected>Pendidikan Wali</option>
                                                <option value="Tidak Sekolah" <?php if(isset($ortu->pendidikan_wali)=='Tidak Sekolah'){echo "selected";} ?>>Tidak Sekolah</option>
                                                <option value="SD" <?php if(isset($ortu->pendidikan_wali)=='SD'){echo "selected";} ?>>SD</option>
                                                <option value="SMP" <?php if(isset($ortu->pendidikan_wali)=='SMP'){echo "selected";} ?>>SMP</option>
                                                <option value="SMK" <?php if(isset($ortu->pendidikan_wali)=='SMK'){echo "selected";} ?>>SMK</option>
                                                <option value="D1" <?php if(isset($ortu->pendidikan_wali)=='D1'){echo "selected";} ?>>D1</option>
                                                <option value="D2" <?php if(isset($ortu->pendidikan_wali)=='D2'){echo "selected";} ?>>D2</option>
                                                <option value="D3" <?php if(isset($ortu->pendidikan_wali)=='D3'){echo "selected";} ?>>D3</option>
                                                <option value="D4" <?php if(isset($ortu->pendidikan_wali)=='D4'){echo "selected";} ?>>D4</option>
                                                <option value="S1" <?php if(isset($ortu->pendidikan_wali)=='S1'){echo "selected";} ?>>S1</option>
                                                <option value="S2" <?php if(isset($ortu->pendidikan_wali)=='S2'){echo "selected";} ?>>S2</option>
                                                <option value="S3" <?php if(isset($ortu->pendidikan_wali)=='S3'){echo "selected";} ?>>S3</option>
                                            </select>  
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                         <label>Pekerjaan Wali</label>   
                                            <input type="text" class="form-control" name="pekerjaan_wali" placeholder="Pekerjaan Wali" autocomplete="off" value="{{$ortu->pekerjaan_wali ?? ''}}"> 
                                        </div>
                                    </div>
                            </div>
                            <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Penghasilan Wali</label> 
                                            <input type="number" class="form-control" name="penghasilan_wali" placeholder="Penghasilan Wali" autocomplete="off" value="{{$ortu->usia_wali ?? ''}}">   
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                         <label>No Telepon Wali</label>   
                                            <input type="number" class="form-control" name="no_telepon_wali" placeholder="Nomor Telepon Wali" autocomplete="off" value="{{$ortu->no_telepon_wali ?? ''}}"> 
                                        </div>
                                    </div>
                            </div>

                            <div class="row">
                                    <div class="col-sm-6 text-left">
                                        <div class="form-group">
                                            <a href="{{route('daftar.peserta')}}" class="btn btn-warning" style="color:white;">previous</a>
                                        </div>
                                    </div>
                                <div class="col-sm-6 text-right">
                                    <div class="form-group">
                                        <input type="hidden" name="id_orangtua" value="{{$peserta->orangtua_id}}">
                                        
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