<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    protected $table = 'petugas';
    protected $fillable = [
        'nama_petugas',
        'jenis_kelamin',
        'username',
        'user_id',
        'created_at',
        'updated_at'
    ];

    protected $primaryKey = 'id'; 
}
