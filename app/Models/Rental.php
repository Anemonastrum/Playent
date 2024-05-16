<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    use HasFactory;

    protected $fillable = ['customer_name', 'contact_number', 'playstation_id', 'paket_id'];

    public function playstation()
    {
        return $this->belongsTo(Playstation::class);
    }

    public function paket()
    {
        return $this->belongsTo(Paket::class);
    }
}
