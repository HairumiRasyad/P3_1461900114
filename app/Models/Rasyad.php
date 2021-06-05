<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rasyad extends Model
{
    use HasFactory;

    protected $table = 'rasyad';

    protected $fillable = [
        'id',
        'nbi',
        'nama_mhs',
    ];
}
