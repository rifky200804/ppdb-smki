<?php

namespace App\Http\Controllers;

use App\Peserta;
use App\Syarat;
use App\Survey;
use App\Dokumentasi;
use App\TPA;
use Illuminate\Http\Request;

class SyaratController extends Controller
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
        }elseif(empty($request->session()->get('asalsekolah'))){
            return redirect()->route('daftar.asalsekolah');
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

            'akta_lahir' => 'required|mimes:pdf,jpg,jpeg,png|max:51200',
            'kartu_keluarga' => 'required|mimes:pdf,jpg,jpeg,png|max:51200',
            'foto_peserta' => 'required|mimes:pdf,jpg,jpeg,png|max:51200',
            'ket_tidak_mampu' => 'required|mimes:pdf,jpg,jpeg,png|max:51200'
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

        $akta = $request->akta_lahir;
        $v_akta = time().rand(100,999).".".$akta->getClientOriginalName();

        $kk = $request->kartu_keluarga;
        $v_kk = time().rand(100,999).".".$kk->getClientOriginalName();
    
        $foto = $request->foto_peserta;
        $v_foto = time().rand(100,999).".".$foto->getClientOriginalName();

        $ket = $request->ket_tidak_mampu;
        $v_ket = time().rand(100,999).".".$ket->getClientOriginalName();

        if($request->ktp_ayah > 0){
            $ktp_ayah = $request->ktp_ayah;
            $v_ktp_ayah = time().rand(100,999).".".$ktp_ayah->getClientOriginalName();
        }
        if ($request->ktp_ibu > 0){
            $ktp_ibu = $request->ktp_ibu;
            $v_ktp_ibu = time().rand(100,999).".".$ktp_ibu->getClientOriginalName();
        }
        if($request->ktp_wali > 0){
            $ktp_wali = $request->ktp_wali;
            $v_ktp_wali = time().rand(100,999).".".$ktp_wali->getClientOriginalName();
        }

        if(empty($request->session()->get('asalsekolah') && $request->session()->get('ortu') && $request->session()->get('peserta'))){
            $peserta = new Peserta();
            $peserta->fill($fillpeserta);
            $peserta->save();

            $ortu = new OrangTua();
            $ortu->fill($fillortu);
            $ortu->save();

            $asalsekolah = new AsalSekolah();
            $asalsekolah->fill($fillasalsekolah);
            $asalsekolah->save();

            $syarat = new Syarat();
            $syarat->id = $request->id_syarat;
            $syarat->akta_lahir = $v_akta;
            $syarat->kartu_keluarga = $v_kk;
            $syarat->foto_peserta = $v_foto;
            $syarat->ket_tidak_mampu = $v_ket;
            $syarat->ktp_ayah = $v_ktp_ayah;
            $syarat->ktp_ibu = $v_ktp_ibu;
            $syarat->ktp_wali = $v_ktp_wali;

            $akta->move(public_path().'/syarat',$v_akta);
            $kk->move(public_path().'/syarat',$v_kk);
            $foto->move(public_path().'/syarat',$v_foto);
            $ket->move(public_path().'/syarat',$v_ket);

            if(isset($ktp_ayah)){
                $ktp_ayah->move(public_path().'/syarat',$v_ktp_ayah);
            }
            if(isset($ktp_ibu)){
                $ktp_ibu->move(public_path().'/syarat',$v_ktp_ibu);
            }
            if(isset($ktp_wali)){
                $ktp_wali->move(public_path().'/syarat',$v_ktp_wali);
            }

            $syarat->save();
            
            
            
            
            $dokumen = new \App\Dokumentasi();
            $dokumen->id=$request->dokumentasi_id;
            $dokumen->save();
    
            
            $survey = new \App\Survey();
            $survey->id=$request->survey_id;
            $survey->save();
    
            
            $tpa = new \App\TPA();
            $tpa->id=$request->tpa_id;
            $tpa->save();

        }else{
            $syarat = new Syarat();
            $syarat->id = $request->id_syarat;
            $syarat->akta_lahir = $v_akta;
            $syarat->kartu_keluarga = $v_kk;
            $syarat->foto_peserta = $v_foto;
            $syarat->ket_tidak_mampu = $v_ket;
            if(isset($v_ktp_ayah)){
                $syarat->ktp_ayah = $v_ktp_ayah;
            }
            if(isset($v_ktp_ibu)){
                $syarat->ktp_ibu = $v_ktp_ibu;
            }
            if(isset($v_ktp_wali)){
                $syarat->ktp_wali = $v_ktp_wali;
            }

            $akta->move(public_path().'/syarat',$v_akta);
            $kk->move(public_path().'/syarat',$v_kk);
            $foto->move(public_path().'/syarat',$v_foto);
            $ket->move(public_path().'/syarat',$v_ket);
            
            if(isset($ktp_ayah)){
                $ktp_ayah->move(public_path().'/syarat',$v_ktp_ayah);
            }
            if(isset($ktp_ibu)){
                $ktp_ibu->move(public_path().'/syarat',$v_ktp_ibu);
            }
            if(isset($ktp_wali)){
                $ktp_wali->move(public_path().'/syarat',$v_ktp_wali);
            }

            $syarat->save();
            
            $asalsekolah = $request->session()->get('asalsekolah');
            $asalsekolah->fill($fillasalsekolah);
            $asalsekolah->save();

            $ortu = $request->session()->get('ortu');
            $ortu->fill($fillortu);
            $ortu->save();
            
            $peserta = $request->session()->get('peserta');
            $peserta->fill($fillpeserta);
            $peserta->save();

            $dokumen = new \App\Dokumentasi();
            $dokumen->id=$request->dokumentasi_id;
            $dokumen->save();
    
            
            $survey = new \App\Survey();
            $survey->id=$request->survey_id;
            $survey->save();
    
            
            $tpa = new \App\TPA();
            $tpa->id=$request->tpa_id;
            $tpa->save();
        }
        
        return redirect()->route('dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Syarat  $syarat
     * @return \Illuminate\Http\Response
     */
    public function show(Syarat $syarat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Syarat  $syarat
     * @return \Illuminate\Http\Response
     */
    public function edit(Syarat $syarat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Syarat  $syarat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Syarat $syarat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Syarat  $syarat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Syarat $syarat)
    {
        //
    }
    public function keterangan(Request $request,$id){
        
        $value = [
            'keterangan_id'=>$request->keterangan_id
        ];

        Syarat::where('id',$id)->update($value);

        if($request->keterangan_id == 2){
            Survey::where('id',$id)->update($value);
            Peserta::where('id',$id)->update($value);
            Dokumentasi::where('id',$id)->update($value);
            TPA::where('id',$id)->update($value);
            return redirect()->route('peserta');
        }else{
            return redirect()->route('survey',$id);
        }
    }
}
