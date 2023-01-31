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
        'kode_vote', 'judul_vote', 'id_aspek', 'nama_roti', 'photo_roti', 'deskripsi'
    ];

    protected $attributes = [
        'photo_roti' => 'default.jgp'
    ];
}
