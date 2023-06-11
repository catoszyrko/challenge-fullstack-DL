<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deal extends Model
{
    use HasFactory;
    
    protected $fillable = [
        "internalName",
        "title",
        "metacriticLink",
        "dealID",
        "storeID",
        "gameID",
        "salePrice",
        "normalPrice",
        "isOnSale",
        "savings",
        "metacriticScore",
        "steamRatingText",
        "steamRatingPercent",
        "steamRatingCount",
        "steamAppID",
        "releaseDate",
        "lastChange",
        "dealRating",
        "thumb"
    ];
}
