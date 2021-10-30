<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keterangan extends Model
{
    protected $table = 'keterangan';
    protected $fillable = [
        'id',
        'keterangan',
        'created_at',
        'updated_at'
    ];
    protected $primaryKey = 'id';


    public function peserta(){
        return $this->hasMany(Peserta::class);
    }
}
