<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    // public function getImageAttribute($value)
    // {
    //     return env('APP_URL') . '/storage/' . $value;
    // }
    
    public function getPortfolioAttribute($value)
    {
        return $value ? true : false;
    }
}
