<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Riwayat extends Model
{
    use HasFactory;

    protected $table =  'Riwayat';
    protected $primaryKey = 'id_riwayat';

    public $incrementing = false;
    public $timestamps = true;
}
