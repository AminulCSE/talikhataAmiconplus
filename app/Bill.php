<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $fillable = [
        'showRoomOrAshamet', 'bill_no', 'customer_name', 'customer_phone', 'description', 'total_bill', 'advanced_amount',
    ];

}
