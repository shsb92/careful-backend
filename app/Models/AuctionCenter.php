<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuctionCenter extends Model
{
    use HasFactory;

    protected $fillable = [
        'company',
        'location',
        'street',
        'house_nr',
        'city',
        'postal_code'
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'auction_centers';
}
