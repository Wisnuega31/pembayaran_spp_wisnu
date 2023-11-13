<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Spp extends Model
{
    use HasFactory;
    protected $table = 'spp';
    protected $primaryKey = 'id_spp';
    public $incrementing = false;
    protected $guarded = [];

    public function siswa(): HasMany
    {
        return $this->hasMany(Siswa::class, 'id_spp', 'id_spp');
    }
}
