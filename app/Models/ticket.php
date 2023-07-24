<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ticket extends Model
{
    use HasFactory;
    protected $fillable = [
        'passenger_id', 
	'amount', 
    'discount',
	'start_station', 
	'end_station', 
	'start_time', 
	'end_time', 
	'train_id', 
	'train_name', 
	'seat_cat', 
	'seats', 
    ];
}
