<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tasa extends Model {
    protected $fillable = [
        'moneda', 'rango', 'first', 'second', 'third', 'four'
    ];
}