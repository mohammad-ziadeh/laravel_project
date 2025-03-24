<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Booking extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable =['user_id','name','email','date','time','message','numberofpeople','price','state'];


    public function user(){
        return $this->belongsTo(User::class);
    }

    public function ourtipcrud(){
        return $this->belongsToMany(Ourtripcrud::class, 'ourtripcrud_booking', 'bookings_id','ourtripcruds_id');
    }
}
