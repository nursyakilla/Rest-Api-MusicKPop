<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KPop extends Model
{
    use HasFactory;

    protected $table = 'music_kpop';
    protected $fillable = [
        'music_title',
        'release_date',
        'genre',
        'singer',
        'agency'
    ];
}
