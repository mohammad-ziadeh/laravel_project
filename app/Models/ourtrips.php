<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ourtrips extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'ourtrips';

    protected $fillable =['category','duration','date','month','min_price','max_price','rating'];
}
