<?php

namespace App\Http\Controllers;

use App\TPA;
use Illuminate\Http\Request;

class TPAController extends Controller
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
     * @param  \App\TPA  $tPA
     * @return \Illuminate\Http\Response
     */
    public function show(TPA $tPA)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TPA  $tPA
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tpa = TPA::find($id);
        return view('main.survey.tpa',compact('tpa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TPA  $tPA
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $rata2   = $request->mtk + $request->indonesia + $request->psikotes + $request->baca_alquran  ;
        $rata2 = $rata2 / 4;
                if($rata2 >= 9 ){
                    $grade = 'sangat baik'; 
                }elseif($rata2 >= 7 && $rata2 < 9  ){
                    $grade = 'baik';
                }elseif($rata2 < 7 ){
                    $grade = 'kurang';
                }

        $fill = [
         'mtk'=>$request->mtk,
         'indonesia'=>$request->indonesia,
         'psikotes'=>$request->psikotes,
         'baca_alquran'=>$request->baca_alquran,
         'rata_rata'=>$rata2,
         'grade'=>$grade
        ];

        TPA::find($id)->update($fill);
        return redirect()->route('tpa.edit',$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TPA  $tPA
     * @return \Illuminate\Http\Response
     */
    public function destroy(TPA $tPA)
    {
        //
    }

    public function keterangan(Request $request,$id){
        
        if($request->keterangan_id == 2){
            $value = [
                'keterangan_id'=>$request->keterangan_id
            ];
            Peserta::where('id',$id)->update($value);
            TPA::where('id',$id)->update($value);
            return redirect()->route('peserta');
        }else{
            $value = [
                'keterangan_id'=>$request->keterangan_id
            ];
    
        TPA::where('id',$id)->update($value);
            
            return redirect()->route('hasil',$id);
        }
    }
}
