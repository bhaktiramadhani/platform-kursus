<?php

namespace App\Models;

use App\Models\Materi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kursus extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $table = 'kursuses';

    public function materis()
    {
        return $this->hasMany(Materi::class);
    }
}
