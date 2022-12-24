<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cust_Model extends Model
{
    protected $table = "tb_cust";
    protected $primaryKey = "id_cust";
    protected $fillable = [
        'id_cust','nama_cust','no_tlp','alamat','jenis_cust','created_at'
    ];
}
