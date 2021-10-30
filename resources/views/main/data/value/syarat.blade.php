                    <div class="row">
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Akta Lahir</label>   
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <div class="form-group">
                                <label>: 
                                    <a href="{{ asset('syarat/'.$item->syarat->akta_lahir)}}" target="_blank" style="color:blue;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                                        </svg>
                                        Live Preview
                                    </a> | 
                                    <a href="{{route('file',$item->syarat->akta_lahir)}}">Klik untuk Download</a>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Kartu Keluarga</label>   
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <div class="form-group">
                                <label>:
                                    <a href="{{ asset('syarat/'.$item->syarat->kartu_keluarga)}}" target="_blank" style="color:blue;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                                        </svg>
                                        Live Preview
                                    </a> | 
                                    <a href="{{route('file',$item->syarat->kartu_keluarga)}}">Klik untuk Download</a>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Foto Peserta</label>   
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <div class="form-group">
                                <label>: 
                                    <a href="{{ asset('syarat/'.$item->syarat->foto_peserta)}}" target="_blank" style="color:blue;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                                        </svg>
                                        Live Preview
                                    </a> | 
                                    <a href="{{route('file',$item->syarat->foto_peserta)}}">Klik untuk Download</a>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Keterangan Tidak Mampu</label>   
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <div class="form-group">
                                <label>:
                                    <a href="{{ asset('syarat/'.$item->syarat->ket_tidak_mampu)}}" target="_blank" style="color:blue;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                                        </svg>
                                        Live Preview
                                    </a> | 
                                    <a href="{{route('file',$item->syarat->ket_tidak_mampu)}}">Klik untuk Download</a>
                                </label>
                            </div>
                        </div>
                    </div>

                   @if($item->syarat->ktp_ayah > 0)
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>KTP Ayah</label>   
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <div class="form-group">
                                <label>:
                                    <a href="{{ asset('syarat/'.$item->syarat->ktp_ayah)}}" target="_blank" style="color:blue;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                                        </svg>
                                        Live Preview
                                    </a> | 
                                    <a href="{{route('file',$item->syarat->ktp_ayah)}}">Klik untuk Download</a>
                                </label>
                            </div>
                        </div>
                    </div>
                    @endif

                    @if($item->syarat->ktp_ibu > 0)
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>KTP Ibu</label>   
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <div class="form-group">
                                <label>: 
                                    <a href="{{ asset('syarat/'.$item->syarat->ktp_ibu)}}" target="_blank" style="color:blue;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                                        </svg>
                                        Live Preview
                                    </a> | 
                                    <a href="{{route('file',$item->syarat->ktp_ibu)}}">Klik untuk Download</a>
                                </label>
                            </div>
                        </div>
                    </div>
                    @endif

                    @if($item->syarat->ktp_wali > 0)
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>KTP Wali</label>   
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <div class="form-group">
                                <label>:
                                    <a href="{{ asset('syarat/'.$item->syarat->ktp_wali)}}" target="_blank" style="color:blue;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                                        </svg>
                                        Live Preview
                                    </a> | 
                                    <a href="{{route('file',$item->syarat->ktp_wali)}}">Klik untuk Download</a>
                                </label>
                            </div>
                        </div>
                    </div>
                    @endif