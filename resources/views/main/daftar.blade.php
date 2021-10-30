@extends('layouts.app')

@section('title','SMKI UTAMA')
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
           
                            <h3><label>A. BIODATA PRIBADI</label></h3><br><br>
                            <form id="contact-form" action="{{ route('daftar-peserta') }}" method="POST">
                                {{ csrf_field() }}
                            <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                         <label>NISN SMP/MTS</label>   
                                         <input type="number" class="form-control" name="nisn" placeholder="contoh: 0046******" autocomplete="off" value="{{$peserta->nisn ?? ''}}" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                         <label>Nama Lengkap</label>   
                                         <input type="text" class="form-control" name="nama_peserta" placeholder="contoh: Peserta" autocomplete="off" value="{{$peserta->nama_peserta ?? ''}}" required> 
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Ukuran Baju</label>   
                                        <select class="form-control" style="width: 100%;height: 34px;" name="ukuran_baju" required>
                                            <option value="M" <?php if(isset($peserta->ukuran_baju) == "M"){ echo "selected";} ?>>M</option>
                                            <option value="L" <?php if(isset($peserta->ukuran_baju) == "L"){ echo "selected";} ?>>L</option>
                                            <option value="XL" <?php if(isset($peserta->ukuran_baju) == "XL"){ echo "selected";} ?> >XL</option>
                                            <option value="XXL" <?php if(isset($peserta->ukuran_baju) == "XXL"){ echo "selected";} ?>>XXL</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Jenis Kelamin</label>   
                                        <!-- <select class="form-control" style="width: 100%;height: 34px;" name="jenis_kelamin" require>
                                            <option hidden> Jenis Kelamin </option>
                                            <option value="Laki-Laki" >Laki-Laki</option>
                                            <option value="Perempuan" >Perempuan</option>
                                        </select> -->
                                        <br>
                                        <input type="radio" value="Laki-Laki" id="laki" name="jenis_kelamin" required <?php if(isset($peserta->jenkel) == "Laki-Laki"){ echo "checked";} ?>> <label for="laki">Laki-Laki</label>&nbsp;
                                        <input type="radio" value="Perempuan" id="perempuan" name="jenis_kelamin" required <?php if(isset($peserta->jenkel) == "Perempuan"){ echo "chekced";} ?>> <label for="perempuan">Perempuan</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Tempat Lahir</label>   
                                        <input type="text" class="form-control" name="tempat_lahir" placeholder="contoh: Jakarta" autocomplete="off" value="{{$peserta->tempat_lahir ?? ''}}" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Tanggal Lahir</label>   
                                        <input type="date"class="form-control" name="tanggal_lahir" value="{{$peserta->tanggal_lahir ?? ''}}" required>
                                    </div>
                                </div>
                            </div>    
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Agama</label>   
                                        <input type="text" class="form-control" name="agama" placeholder="contoh: Islam" autocomplete="off" value="{{$peserta->agama ?? ''}}" required>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Anak Ke</label>
                                        <input type="number" class="form-control" name="anak_ke" style="width:100%;" placeholder="anak ke berapa" autocomplete="off" value="{{$peserta->anak_ke ?? ''}}" required>
                                    </div>
                                </div>
                               <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>dari</label>
                                        <input type="number" class="form-control" name="dari" style="width:100%;" placeholder="dari berapa bersaudara" autocomplete="off" value="{{$peserta->dari_saudara_kandung ?? ''}}" required>
                                    </div>     
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Status Siswa</label>   
                                        <select class="form-control" style="width: 100%;height: 34px;" name="status_siswa" required>
                                            <option value="Orang tua lengkap" <?php if(isset($peserta->status_siswa) == "Orang tua lengkap"){ echo "selected";} ?>>Orang tua lengkap</option>
                                            <option value="Yatim-Piatu" <?php if(isset($peserta->status_siswa) == "Yatim-Piatu"){ echo "selected";} ?>>Yatim-Piatu</option>
                                            <option value="Yatim" <?php if(isset($peserta->status_siswa) == "Yatim"){ echo "selected";} ?>>Yatim</option>
                                            <option value="Piatu" <?php if(isset($peserta->status_siswa) == "Piatu"){ echo "selected";} ?>>Piatu</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Bahasa Sehari hari</label>   
                                        <input type="text" class="form-control" name="bahasa" placeholder="contoh: Indonesia" autocomplete="off" value="{{$peserta->bahasa ?? ''}}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="alamat">Alamat Lengkap</label>
                                        <textarea class="form-control" id="alamat" rows="3" name="alamat" required>{{$peserta->alamat ?? ''}}</textarea>
                                    </div>
                                </div>
                            </div>
                        <div class="row">
                                <div class="col-sm-12 text-right">
                                    <div class="form-group">
                                        <input type="hidden" name="id_peserta" value="{{$id}}">
                                        <input type="hidden" name="orangtua_id" value="{{$id}}">
                                        <input type="hidden" name="asal_sekolah_id" value="{{$id}}">
                                        <input type="hidden" name="syarat_id" value="{{$id}}">
                                        <input type="hidden" name="survey_id" value="{{$id}}">
                                        <input type="hidden" name="dokumentasi_id" value="{{$id}}">
                                        <input type="hidden" name="tpa_id" value="{{$id}}">
                                        <input type="hidden" name="keterangan_id" value="1">
                                        <button type="submit" class="btn" >Next</button>
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