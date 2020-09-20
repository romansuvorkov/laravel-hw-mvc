<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guitar extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand',
        'model',
        'price',
        'type_id'
    ];

    public function guitarType()
    {
        return $this->hasMany(GuitarType::class, 'id', 'type_id');
    }

}
