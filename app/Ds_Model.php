<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ds_Model extends Model
{
    protected $table = "tb_ds";
    protected $primaryKey = "id_ds";
    protected $fillable = [
        'id_ds','cd_ds','nama_ds','created_at'
    ];

    public function desain()
    {
        return $this->belongsTo('app\Produk_Model');
    }
}
