<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ourtripcrud extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable=['title','image','duration','availability','location','description','reviews_count','price'];

    public function booking(){
        return $this->belongsToMany(Booking::class, 'ourtripcrud_booking', 'bookings_id','ourtripcruds_id');
    }
}