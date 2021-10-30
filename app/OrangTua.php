<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrangTua extends Model
{
    protected $table = 'orang_tua';
    protected $fillable = [
        'id',
        'nama_ayah',
        'usia_ayah',
        'pendidikan_ayah',
        'pekerjaan_ayah',
        'penghasilan_ayah',
        'no_telepon_ayah',
        'nama_ibu',
        'usia_ibu',
        'pendidikan_ibu',
        'pekerjaan_ibu',
        'penghasilan_ibu',
        'no_telepon_ibu',
        'nama_wali',
        'usia_wali',
        'pendidikan_wali',
        'pekerjaan_wali',
        'penghasilan_wali',
        'no_telepon_wali',
        'created-at',
        'updated_at'
    ];

    protected $primaryKey = 'id';
    public function peserta(){
        return $this->hasOne(OrangTua::class);
    }
}
