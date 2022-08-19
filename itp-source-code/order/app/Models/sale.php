<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $fillable = [
        'sale_id',
        'name',
        'email',
        'address',
        'payment_details',
        'items',
        'total',
        'status'
    ];

    protected $casts = [
        'address' => 'array',
        'payment_details' => 'array',
        'items' => 'array'
    ];
}
