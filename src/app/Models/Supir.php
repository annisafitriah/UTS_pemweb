<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\factories\HasFactory;

class Supir extends Model
{
    use HasFactory;
    protected $table = 'supirs';
    protected $fillable = [
        'nama',
        'alamat',
        'telepon',
        'sim',
        'status',
        'foto'
    ];
}
