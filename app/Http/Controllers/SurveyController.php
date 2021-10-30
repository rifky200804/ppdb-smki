<?php

namespace App\Http\Controllers;

use App\Survey;
use Illuminate\Http\Request;

class SurveyController extends Controller
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Survey  $survey
     * @return \Illuminate\Http\Response
     */
    public function show( $id )
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Survey  $survey
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $survey = Survey::find($id);
        return view('main.survey.survey',compact('survey'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Survey  $survey
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $fillsurvey = [
            'status_rumah'=>$request->status_rumah,
            'jumlah_tanggungan_ortu'=>$request->jumlah_tanggungan_ortu,
            'status_tinggal'=>$request->status_tinggal,
            'pengeluaran_tiap_bulan'=>$request->pengeluaran_tiap_bulan,
            'perabotan_rumah_tangga'=>$request->perabotan_rumah_tangga,
            'pengeluaran_perhari'=>$request->pengeluaran_perhari,
            'prestasi_yang_dicapai'=>$request->prestasi_yang_dicapai,
            'catatan_khusus'=>$request->catatan_khusus,
        ];

        Survey::find($id)->update($fillsurvey);
        return redirect()->route('survey',$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Survey  $survey
     * @return \Illuminate\Http\Response
     */
    public function destroy(Survey $survey)
    {
        //
    }

    public function keterangan(Request $request,$id){
        
        if($request->keterangan_id == 2){
            $value = [
                'keterangan_id'=>$request->keterangan_id
            ];
    
            Survey::where('id',$id)->update($value);
            Dokumentasi::where('id',$id)->update($value);
            Peserta::where('id',$id)->update($value);
            TPA::where('id',$id)->update($value);
            return redirect()->route('peserta');
        }else{
            $value = [
                'keterangan_id'=>$request->keterangan_id
            ];
    
            Survey::where('id',$id)->update($value);
            
            return redirect()->route('document',$id);
        }
    }
    
}
