<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Syarat extends Model
{
    protected $table='syarat';
    protected $fillable = [
        'id',
        'akta_lahir',
        'kartu_keluarga',
        'foto_peserta',
        'ket_tidak_mampu',
        'ktp_ayah',
        'ktp_ibu',
        'ktp_wali',
        'keterangan_id',
        'created_at',
        'updated_at'
    ];
    protected $primaryKey = 'id';

    public function peserta(){
        return $this->hasOne(syarat::class);
    }
}
