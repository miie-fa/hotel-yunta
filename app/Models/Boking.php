<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Boking extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'checkin_date',
        'checkout_date',
        'night',
        'adult',
        'children',
        'subtotal',
    ];
    // Definisikan relasi dengan model Room
    public function room()
    {
        return $this->belongsTo(Rooms::class);
    }
    // Definisikan relasi dengan model User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
