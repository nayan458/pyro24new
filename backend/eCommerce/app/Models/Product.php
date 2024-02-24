<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'modelNumber',
        'name',
        'quantity',
        'price',
        'photo',
        'description'
    ];

    public $timestamps = false;
}
