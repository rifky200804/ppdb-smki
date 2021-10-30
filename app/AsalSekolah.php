<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AsalSekolah extends Model
{
    protected $table='asal_sekolah';
    protected $fillable = [
        'id',
        'asal_sekolah',
        'alamat_lengkap',
        'tahun_lulus',
        'no_peserta_un_smp',
        'created_at',
        'updated_at'
    ];
    protected $primaryKey = 'id';

    public function peserta(){
        return $this->hasOne(Peserta::class);
    }
}
