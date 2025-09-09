<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengaturanWeb extends Model
{
    use HasFactory;
    
    protected $table = "pengaturan_web";

    protected $fillable = [
        'logo_hmif',
        'logo_gamatif',
        'nama_kegiatan',

    ];
}
