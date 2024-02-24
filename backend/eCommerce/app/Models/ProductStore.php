<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductStore extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'store_id'
    ];

    public $timestamps = false;
}
