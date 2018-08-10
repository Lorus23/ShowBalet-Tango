<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['date','time','show_number','suit','restaurant','customer','customer_contacts','note'];
    //
}
