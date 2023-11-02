<?php

namespace App\Models;

use App\Models\tas;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class kategori extends Model
{
    use HasFactory;
    protected $table = 'kategoris';
    protected $fillable = ['jenis'];
    public function tas(): HasMany
    {
        return $this->hasMany(tas::class);
    }
}
