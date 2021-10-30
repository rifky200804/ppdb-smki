@extends('layouts.app')


@push('css')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.7.0/css/buttons.dataTables.min.css">
            
@endpush

@section('contentFrontend')
<div class="slider-area ">
    <div class="card">
        <div class="single-slider slider-height2 d-flex align-items-center" data-background="{{asset('assets/img/hero/contact_hero.jpg')}}" style="background-image: url(&quot;assets/img/hero/services_hero.jpg&quot;);">  
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
                                        <h4 class="card-title">Data Lulus Diterima</h4>
                                        <a href="{{route('pdf',3)}}" style="color:blue;" target="_blank">Export to PDF</a>
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

                                                    @foreach($table as $value)    
                                                    
                                                    <tr>
                                                        <td>{{$value->id}}</td>
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
   <script>
   $(document).ready(function() {
    $('#table_id').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'pdf'
        ]
    } );
} );
   </script>
@endpush