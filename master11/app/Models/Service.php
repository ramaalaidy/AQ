<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'services'; // Explicitly define the table name  
    // use HasFactory;

    protected $fillable = [
        'type',
        'name',
        'description',
        'price',
        'capacity',
        'availability'
    ];

}
