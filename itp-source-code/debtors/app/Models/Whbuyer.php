<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Whbuyer extends Model
{
    protected $table = 'whbuyers';
    protected $primaryKey = 'recordNo';
    protected $fillable = ['D_CID', 'whName', 'whPlan','whAmount','whIrate','wh_D_Amount','wh_T_Amount','whBuydate'];
}





