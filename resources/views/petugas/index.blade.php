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
                                        <h4 class="card-title">Data Petugas</h4>
                            
                                        
                                        <div class="table-responsive">
                                            <table class="table mb-0" id="table_id">
        
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Nama Petugas</th>
                                                        <th>Jenis Kelamin</th>
                                                        <th>Username</th>
                                                        <th><a href="{{route('petugas.create')}}" style="color:blue;"> Tambah </a></th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    @foreach($table as $no => $value)    
                                                    
                                                    <tr>
                                                        <td>{{$no+1}}</td>
                                                        <td>{{$value->nama_petugas}}</td>
                                                        <td>{{$value->jenis_kelamin}}</td>
                                                        <td>{{$value->username}}</td>
                                                        <td>
                                                            <a href="{{route('petugas.destroy',$value->username)}}" class="genric-btn danger circle">
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