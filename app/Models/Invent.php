<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invent extends Model
{
    use HasFactory;

    protected $fillable = ['device_name', 'device_model', 'device_type'];
}
