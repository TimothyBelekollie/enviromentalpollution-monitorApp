<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GPSData extends Model
{
    use HasFactory;
    protected $fillable=['longitude','latitude','sensor_data_id'];
}
