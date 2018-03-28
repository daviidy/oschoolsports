<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chaussure extends Model
{
    protected $fillable = ['name', 'auteur', 'website'];
}
