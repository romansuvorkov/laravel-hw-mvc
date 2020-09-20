<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuitarType extends Model
{
    use HasFactory;

    protected $table = 'guitar_types';

    protected $fillable = [
        'name',
    ];

}
