<?php

namespace App\Models;

use App\Models\Kursus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Materi extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'materis';

    public function kursus()
    {
        return $this->belongsTo(Kursus::class);
    }
}
