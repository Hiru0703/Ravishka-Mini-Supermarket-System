<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DebtRCustomers extends Model
{
    use HasFactory;

    protected $table='debtrcustomers';
    protected $primaryKey = 'rcusrecordNo';
    protected $fillable = ['rcusD_CID', 'rcusName', 'rcusPlan','rcusAmount','rcusIrate','rcus_D_Amount','rcus_T_Amount','rcusBuydate'];

}
