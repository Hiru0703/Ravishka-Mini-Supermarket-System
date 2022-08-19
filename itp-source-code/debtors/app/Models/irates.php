<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class irates extends Model
{
    use HasFactory;

    protected $table='interestirates';
    protected $primaryKey = 'irateid';
    protected $fillable = ['irateid', 'cusmonth1', 'cusmonth2', 'cusmonth3', 'whbmonth1', 'whbmonth2', 'whbmonth3'];
}




