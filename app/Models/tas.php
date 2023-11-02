<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class tas extends Model
{
    use HasFactory;

    protected $table = 'tas';
    protected $fillable = ['merk', 'warna', 'deskripsi', 'stok', 'harga', 'kategori_id'];


    public function kategori(): BelongsTo
    {
        return $this->belongsTo(kategori::class, 'kategori_id');
    }

}
