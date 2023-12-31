<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'slug',
        'description',
        'logo_image',
        'cover_image',
        'status'
    ];
}
