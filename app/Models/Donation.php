<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;


        /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'payee_name',
        'payee_email', 	
        'payee_id',	
        'payee_address', 	
        'payer_name', 	
        'payer_email', 	
        'payer_id', 	
        'payer_phone',	
        'payer_address', 	
        'user_id', 
        'amount', 
    ];
}
