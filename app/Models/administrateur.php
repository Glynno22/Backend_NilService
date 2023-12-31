<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class administrateur extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'email',
        'motPasse'
    ];

    protected $table = 'administrateurs';
}
