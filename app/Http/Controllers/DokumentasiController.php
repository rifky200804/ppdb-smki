<?php

namespace App\Http\Controllers;

use App\Dokumentasi;
use App\Peserta;
use App\TPA;
use Illuminate\Http\Request;

class DokumentasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $document = Dokumentasi::find($id);
        if($document->foto1 > 0 || $document->foto2 > 0 || $document->foto3 > 0 || $document->foto4 > 0 || $document->foto5 > 0 ){
            return view('main.survey.dokumentasi',compact('document'));
        }else{
            
            return redirect()->route('document.edit',$id);
        }
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
     * @param  \App\Dokumentasi  $dokumentasi
     * @return \Illuminate\Http\Response
     */
    public function show(Dokumentasi $dokumentasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dokumentasi  $dokumentasi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $document = Dokumentasi::find($id);
        return view('main.survey.value.upload_document',compact('document'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dokumentasi  $dokumentasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        

        if($request->foto_1 > 0){
            $foto1 = $request->foto_1;
            $v_foto1 = time().rand(100,999).".".$foto1->getClientOriginalName();
        }

        
        if($request->foto_2 > 0){
            $foto2 = $request->foto_2;
            $v_foto2 = time().rand(100,999).".".$foto2->getClientOriginalName();
        }
        
        if($request->foto_3 > 0){
            $foto3 = $request->foto_3;
            $v_foto3 = time().rand(100,999).".".$foto3->getClientOriginalName();
        }

        if($request->foto_4 > 0){
            $foto4 = $request->foto_4;
            $v_foto4 = time().rand(100,999).".".$foto4->getClientOriginalName();
        }

        if($request->foto_5 > 0){
            $foto5 = $request->foto_5;
            $v_foto5 = time().rand(100,999).".".$foto5->getClientOriginalName();
        }

        $document = Dokumentasi::find($id);
        if(isset($v_foto1)){
            $document->foto1 = $v_foto1;
        }
        if(isset($v_foto2)){
            $document->foto2 = $v_foto2;
        }
        if(isset($v_foto3)){
            $document->foto3 = $v_foto3;
        }
        if(isset($v_foto4)){
            $document->foto4 = $v_foto4;
        }
        if(isset($v_foto5)){
            $document->foto5 = $v_foto5;
        }
        $document->save();
        
    
        if(isset($foto1)){
            $foto1->move(public_path().'/document',$v_foto1);
        }

        if(isset($foto2)){
            $foto2->move(public_path().'/document',$v_foto2);
        }

        if(isset($foto3)){
            $foto3->move(public_path().'/document',$v_foto3);
        }

        if(isset($foto4)){
            $foto4->move(public_path().'/document',$v_foto4);
        }

        if(isset($foto5)){
            $foto5->move(public_path().'/document',$v_foto5);
        }
        
        return redirect()->route('document',$id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dokumentasi  $dokumentasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dokumentasi $dokumentasi)
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
            Dokumentasi::where('id',$id)->update($value);
            return redirect()->route('peserta');
        }else{
            $value = [
                'keterangan_id'=>$request->keterangan_id
            ];
    
            Dokumentasi::where('id',$id)->update($value);
            
            return redirect()->route('tpa.edit',$id);
        }
    }
}
