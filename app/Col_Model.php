<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Col_Model extends Model
{
    protected $table = "tb_cols";
    protected $primaryKey = "id_col";
    protected $fillable = [
        'id_col','cd_col','nama_col','created_at','rgb'
    ];

    public function colour()
    {
        return $this->belongsTo('app\Produk_Model');
    }
}
