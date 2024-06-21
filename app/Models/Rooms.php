<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rooms extends Model
{
    use HasFactory;
    protected $fillable = [
        'room_description',
        'featured_photo',
        'room_number',
        'room_type',
        'price_per_night',
        'capacity',
        'is_published'
    ];
    public function bookings()
    {
        return $this->hasMany(Boking::class);
    }

}
