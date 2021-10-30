<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dokumentasi extends Model
{
    protected $table = 'dokumentasi';
    protected $fillable = [
        'foto1',
        'foto2',
        'foto3',
        'foto4',
        'foto5',
        'keterangan_id',
        'created_at',
        'updated_at'
    ];

    protected $primaryKey = 'id';
}
