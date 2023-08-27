<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestataires extends Model
{
    use HasFactory;
    protected $fillable=['nom','email',
                                 'phone','pays',
                                 'ville','quartier',
                                 'categorie','scanner',
                                 'photo','cni', 'description',
                                 'code','parrain','statut','dateCreation',];
}
