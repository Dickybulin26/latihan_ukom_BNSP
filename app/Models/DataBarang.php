<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataBarang extends Model
{
    use HasFactory;
    protected $primaryKey = "id_barang";
    protected $fillable = ['id_barang', 'nama_barang', 'harga', 'stok', 'foto'];
}
