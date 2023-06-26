<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biografi extends Model
{
    protected $fillable = [
        'namatokoh',
        'foto',
        'orientasi',
        'peristiwapenting',
        'riorientasi'
    ];

    protected $table = 'posts';
}
