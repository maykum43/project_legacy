<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk_Modul extends Model
{
    protected $table = "tb_mas_produk";
    protected $primaryKey = "id_produk";
    protected $fillable = [
        'id_produk','nama_produk','id_ds','id_col','gramasi','created_at'
    ];

    public function ds()
    {
        return $this->hasMany('app\Ds_Model');
    }
    public function col()
    {
        return $this->hasMany('app\Col_Model');
    }
}
