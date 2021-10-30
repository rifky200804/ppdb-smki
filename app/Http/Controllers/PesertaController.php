<?php

namespace App\Http\Controllers;

use App\Peserta;
use App\OrangTua;
use App\Syarat;
use App\AsalSekolah;
use App\Survey;
use App\Dokumentasi;
use App\TPA;
use Maatwebsite\LaravelNovaExcel\Actions\DownloadExcel;
use Illuminate\Http\Request;
use Response;
use PDF;

class PesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $table = Peserta::all();
        
        return view('main.data.index',compact('table'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $peserta = $request->session()->get('peserta');
        $id = Peserta::id();
        return view('main.daftar',compact('id','peserta'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

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
        if(empty($peserta = $request->session()->get('peserta'))){
            $peserta = new Peserta();
            $peserta->fill($fillpeserta);
            $request->session()->put('peserta',$peserta);
        }else{
            $peserta = $request->session()->get('peserta');
            $peserta->fill($fillpeserta);
            $request->session()->put('peserta',$peserta);
        }
        // 'survey_id'=>$request->survey_id,
        // 'tpa_id'=>$request->tpa_id
        
        $id_dokumen=['dokumentasi_id'=>$request->dokumentasi_id];
        $dokumen = new \App\Dokumentasi();
        $dokumen->fill($id_dokumen);
        $request->session()->put('dokumen',$dokumen);

        $id_survey=['survey_id'=>$request->survey_id];
        $survey = new \App\Survey();
        $survey->fill($id_survey);
        $request->session()->put('survey',$survey);

        $id_tpa=['tpa_id'=>$request->tpa_id];
        $tpa = new \App\TPA();
        $tpa->fill($id_tpa);
        $request->session()->put('tpa',$tpa);

        $peserta =  $request->session()->get('peserta');
        $ortu = $request->session()->get('ortu');
        return view('main.daftar_ortu',compact('peserta','ortu'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Peserta::find($id);
        $syarat = Syarat::find($id);
        return view('main.data.details',compact('item','syarat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function edit(Peserta $peserta)
    {
        //
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Peserta $peserta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Peserta::find($id)->delete();
        OrangTua::find($id)->delete();
        AsalSekolah::find($id)->delete();
        Syarat::find($id)->delete();
        Survey::find($id)->delete();
        Dokumentasi::find($id)->delete();
        TPA::find($id)->delete();
        return redirect()->route('peserta');
    }
    
    public function lulus(){
        $table = Peserta::where('keterangan_id',3)->get();
        return view('main.data.lulus',compact('table'));
    }


    public function hasil($id){
        $value = Peserta::find($id);

        return view('main.survey.hasil',compact('value'));
    }


    public function keterangan(Request $request,$id){
        
        $value = [
            'keterangan_id'=>$request->keterangan_id
        ];

        Peserta::where('id',$id)->update($value);
        return redirect()->route('peserta');
    }

    public function downloadfile($file){
        $path = public_path('syarat/');

        $filepath = public_path('syarat/').$file;
        return Response::download($filepath);
    }

    public function exportpdf($id){
        $table = Peserta::find($id);

    	$pdf = PDF::loadview('main.data.lulus',['table'=>$table]);
    	return $pdf->download('laporan-Lulus.pdf');
    }
}
