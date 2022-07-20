<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    use HasFactory;

    protected $fillable = [
        'shortDescription',
        'longDescription',
        'phone',
        'photo',
        'property_id',
        'update_at'
    ];
}
