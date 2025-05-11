<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $table ="services"; 
    protected $fillable = ['name', 'description','availability'];


    public function getAvailabilityAttribute($value)
    {
        return $value ? 'Available' : 'Not Available';
    }

    
    public function users() {
        return $this->hasMany(User::class, 'user_id');
    }

    public function reservations() {
        return $this->hasMany(Reservation::class, 'service_id');
    }
}
