<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ciri extends Model
{
    use HasFactory;
    protected $fillable = ['kode_ciri', 'ciri_penyakit'];
}
