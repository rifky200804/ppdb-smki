@extends('layouts.app')


@push('css')
    
@endpush

@section('contentFrontend')
<div class="slider-area ">
    <div class="card">
        <div class="single-slider slider-height2 d-flex align-items-center" data-background="{{asset('assets/img/hero/about_hero.jpg')}}" style="background-image: url(&quot;assets/img/hero/services_hero.jpg&quot;);">  
            <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2>Pendaftaran Peserta Didik Baru</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                                    <div class="card-body">
                                        <h4 class="card-title">Data Peserta</h4>
                                        
                                        <div class="table-responsive">
                                            <table class="table mb-0" id="table_id">
        
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>#</th>
                                                        <th>NISN</th>
                                                        <th>Nama Lengkap</th>
                                                        <th>Jenis Kelamin</th>
                                                        <th>Status Siswa</th>
                                                        <th>keterangan</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    @foreach($table as $no => $value)    
                                                    
                                                    <tr>
                                                        <td>{{$no+1}}</td>
                                                        <td>{{$value->nisn}}</td>
                                                        <td>{{$value->nama_peserta}}</td>
                                                        <td>{{$value->jenkel}}</td>
                                                        <td>{{$value->status_siswa}}</td>
                                                        <td><label style="<?php if($value->keterangan_id == '1'){echo "color:#fd7e14";}elseif($value->keterangan_id == '2'){echo "color:red";}elseif($value->keterangan_id == '3'){echo "color:blue";} ?>">
                                                                @if($value->keterangan->keterangan == 'lulus')
                                                                    Diterima
                                                                @elseif($value->keterangan->keterangan == 'tidak lulus')
                                                                    Ditolak
                                                                @elseif($value->keterangan->keterangan == 'proses')
                                                                    Proses
                                                                @endif
                                                            </label>
                                                        </td>                                           
                                                        <td> 
                                                            <a href="{{route('peserta.detail',$value->id)}}" class="genric-btn success circle">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-inbox-fill" viewBox="0 0 16 16">
                                                                    <path d="M4.98 4a.5.5 0 0 0-.39.188L1.54 8H6a.5.5 0 0 1 .5.5 1.5 1.5 0 1 0 3 0A.5.5 0 0 1 10 8h4.46l-3.05-3.812A.5.5 0 0 0 11.02 4H4.98zm-1.17-.437A1.5 1.5 0 0 1 4.98 3h6.04a1.5 1.5 0 0 1 1.17.563l3.7 4.625a.5.5 0 0 1 .106.374l-.39 3.124A1.5 1.5 0 0 1 14.117 13H1.883a1.5 1.5 0 0 1-1.489-1.314l-.39-3.124a.5.5 0 0 1 .106-.374l3.7-4.625z"/>
                                                                </svg>
                                                            </a>
                                                            <a href="{{route('peserta.destroy',$value->id)}}" class="genric-btn danger circle">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                                                </svg>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
   <script>
    $(document).ready( function () {
        $('#table_id').DataTable();
    } );
   </script>
@endpush