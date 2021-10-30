<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    protected $table='survey';
    protected $fillable = [
        'status_rumah',
        'jumlah_tanggungan_ortu',
        'status_tinggal',
        'pengeluaran_tiap_bulan',
        'perabotan_rumah_tangga',
        'pengeluaran_perhari',
        'prestasi_yang_dicapai',
        'catatan_khusus',
        'keterangan_id',
        'created_at',
        'updated_at'
    ];
     
    protected $primaryKey = 'id';

    public function peserta(){
        return $this->hasOne(Peserta::class);
    }   
}
