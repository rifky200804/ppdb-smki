<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TPA extends Model
{
    protected $table='tpa';
    protected $fillable = [
        'mtk',
        'indonesia',
        'psikotes',
        'baca_alquran',
        'rata_rata',
        'grade',
        'keterangan_id',
        'created_at',
        'updated_at'
    ];

    protected $primaryKey = 'id';
}
