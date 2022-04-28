<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'brand',
        'os',
        'processor',
        'display',
        'memory',
        'battery',
        'price',
    ];

    protected $hidden = ['created_at', 'updated_at'];
}
