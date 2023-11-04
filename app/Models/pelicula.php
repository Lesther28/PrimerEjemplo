<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pelicula extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $primaryKey = 'codigoPelicula';
    public $incrementing = false;
}
