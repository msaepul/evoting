<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class aspek extends Model
{
    use SoftDeletes;

    protected $table = "aspeks";
    protected $primarykey = "id";
    protected $fillable = [
        'id', 'aspek', 'ket'
    ];
}
