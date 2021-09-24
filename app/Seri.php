<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seri extends Model
{
    protected $fillable = [
    'model','tahun','transmisi','kapasitas'
    ];
}
