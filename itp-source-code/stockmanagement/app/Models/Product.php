<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{


    protected $table = 'productvf';
    //protected $primaryKey = 'itemcodevf';
    protected $fillable = ['itemcodevf', 'itemnamevf', 'dateoftakenvf','quantityvf','priceperunitvf'];
}
