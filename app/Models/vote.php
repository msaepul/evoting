<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vote extends Model
{
    // use HasFactory;
    protected $table = "votes";
    protected $primarykey = "id";
    protected $fillable = [
        'id_vot', 'produk', 'id_penilaian', 'nilai', 'input_harga', 'masukan', 'created_at', 'updated_at', 'deleted_at'
    ];
}
