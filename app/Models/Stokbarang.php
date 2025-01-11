<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stokbarang extends Model
{
    use HasFactory;

    protected $table =  'stokbarang';
    protected $primaryKey = 'id_barang';

    public $incrementing = false;
    public $timestamps = true;
}
