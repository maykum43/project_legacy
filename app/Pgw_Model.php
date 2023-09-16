<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pgw_Model extends Model
{
    protected $table = "tb_pegawai";
    protected $primaryKey = "id_pgw";
    protected $fillable = [
        'id_pgw','nama','jabatan','created_at'
    ];

    public function pegawais()
    {
        return $this->belongsTo('app\Pgw_Model');
    }
}
