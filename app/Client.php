<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = ['name', 'last_name', 'email', 'phone_number', 'credit_card'];
    
}
