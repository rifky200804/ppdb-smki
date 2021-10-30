<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Peserta extends Model
{
    protected $table = 'peserta';
    protected $fillable = [
        'id',
        'nisn',
        'nama_peserta',
        'ukuran_baju',
        'jenkel',
        'tempat_lahir',
        'tanggal_lahir',
        'agama',
        'anak_ke',
        'dari_saudara_kandung',
        'status_siswa',
        'bahasa',
        'alamat',
        'orangtua_id',
        'asal_sekolah_id',
        'syarat_id',
        'keterangan_id',
        'survey_id',
        'dokumentasi_id',
        'tpa_id',
        'created_at',
        'updated_at'
    ];
    protected $primaryKey = 'id';

    public function keterangan(){
        return $this->belongsTo(Keterangan::class);
    }

    public function orangtua(){
        return $this->belongsTo(OrangTua::class);
    }

    public function asal_sekolah(){
        return $this->belongsTo(AsalSekolah::class);
    }

    public function syarat(){
        return $this->belongsTo(Syarat::class);
    }    

    public function survey(){
        return $this->belongsTo(Survey::class);
    }   

    public static function id(){
        $id = DB::table('peserta')->max('id');
        $id = $id+1;
        return $id;
    }

}
