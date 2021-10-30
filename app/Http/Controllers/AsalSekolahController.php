<?php

namespace App\Http\Controllers;

use App\AsalSekolah;
use App\Peserta;
use App\OrangTua;
use Illuminate\Http\Request;

class AsalSekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if(empty($request->session()->get('peserta'))){
            return redirect()->route('daftar.peserta');
        }elseif(empty($request->session()->get('ortu'))){
            return redirect()->route('daftar.ortu');
        }
        $peserta = $request->session()->get('peserta');
        $ortu = $request->session()->get('ortu');
        $asalsekolah = $request->session()->get('asalsekolah');
        $id = Peserta::id();
        return view('main.daftar_asalsekolah',compact('id','peserta','ortu','asalsekolah'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'id_asalsekolah'=>'required',
            'asal_sekolah'=>'required',
            'alamat_lengkap'=>'required',
            'tahun_lulus'=>'required',
            'no_peserta_un_smp'=>'required'
        ]);

        $fillpeserta = [
            'id'=>$request->id_peserta,
            'nisn'=>$request->nisn,
            'nama_peserta'=>$request->nama_peserta,
            'ukuran_baju'=>$request->ukuran_baju,
            'jenkel'=>$request->jenis_kelamin,
            'tempat_lahir'=>$request->tempat_lahir,
            'tanggal_lahir'=>$request->tanggal_lahir,
            'agama'=>$request->agama,
            'anak_ke'=>$request->anak_ke,
            'dari_saudara_kandung'=>$request->dari,
            'status_siswa'=>$request->status_siswa,
            'bahasa'=>$request->bahasa,
            'alamat'=>$request->alamat,
            'orangtua_id'=>$request->orangtua_id,
            'asal_sekolah_id'=>$request->asal_sekolah_id,
            'syarat_id'=>$request->syarat_id,
            'survey_id'=>$request->survey_id,
            'dokumentasi_id'=>$request->dokumentasi_id,
            'tpa_id'=>$request->tpa_id,
            'keterangan_id'=>$request->keterangan_id,
        ];

        $fillortu = [
            'id'=>$request->id_orangtua,
            'nama_ayah'=>$request->nama_ayah,
            'usia_ayah'=>$request->usia_ayah,
            'pendidikan_ayah'=>$request->pendidikan_ayah,
            'penghasilan_ayah'=>$request->penghasilan_ayah,
            'no_telepon_ayah'=>$request->no_telepon_ayah,
            'nama_ibu'=>$request->nama_ibu,
            'usia_ibu'=>$request->usia_ibu,
            'pendidikan_ibu'=>$request->pendidikan_ibu,
            'penghasilan_ibu'=>$request->penghasilan_ibu,
            'no_telepon_ibu'=>$request->no_telepon_ibu,
            'nama_wali'=>$request->nama_wali,
            'usia_wali'=>$request->usia_wali,
            'pendidikan_wali'=>$request->pendidikan_wali,
            'penghasilan_wali'=>$request->penghasilan_wali,
            'no_telepon_wali'=>$request->no_telepon_wali,
        ];

        $fillasalsekolah = [
            'id'=>$request->id_asalsekolah,
            'asal_sekolah'=>$request->asal_sekolah,
            'alamat_lengkap'=>$request->alamat_lengkap,
            'tahun_lulus'=>$request->tahun_lulus,
            'no_peserta_un_smp'=>$request->no_peserta_un_smp
        ];

        if(empty( $asalsekolah = $request->session()->get('asalsekolah') && $ortu = $request->session()->get('ortu') && $peserta = $request->session()->get('peserta'))){
            $peserta = new Peserta();
            $peserta->fill($fillpeserta);
            $request->session()->put('peserta',$peserta);
            $ortu = new OrangTua();
            $ortu->fill($fillortu);
            $request->session()->put('ortu',$ortu);
            $asalsekolah = new AsalSekolah();
            $asalsekolah->fill($fillasalsekolah);
            $request->session()->put('asalsekolah',$asalsekolah);
        }else{
            $asalsekolah = $request->session()->get('asalsekolah');
            $asalsekolah->fill($fillasalsekolah);
            $request->session()->put('asalsekolah',$asalsekolah);
            $ortu = $request->session()->get('ortu');
            $ortu->fill($fillortu);
            $request->session()->put('ortu',$ortu);
            $peserta = $request->session()->get('peserta');
            $peserta->fill($fillpeserta);
            $request->session()->put('peserta',$peserta);
        }

        $peserta = $request->session()->get('peserta');
        $ortu = $request->session()->get('ortu');
        $asalsekolah = $request->session()->get('asalsekolah');

        return view('main.daftar_syarat',compact('peserta','ortu','asalsekolah'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AsalSekolah  $asalSekolah
     * @return \Illuminate\Http\Response
     */
    public function show(AsalSekolah $asalSekolah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AsalSekolah  $asalSekolah
     * @return \Illuminate\Http\Response
     */
    public function edit(AsalSekolah $asalSekolah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AsalSekolah  $asalSekolah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AsalSekolah $asalSekolah)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AsalSekolah  $asalSekolah
     * @return \Illuminate\Http\Response
     */
    public function destroy(AsalSekolah $asalSekolah)
    {
        //
    }
}
