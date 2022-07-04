<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuctionCenter extends Model
{
    protected $fillable = [
        'company',
        'location',
        'street',
        'house_nr',
        'city',
        'postal_code'
    ];

    use HasFactory;
}
