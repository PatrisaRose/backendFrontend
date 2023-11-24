<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tablazat extends Model
{
    use HasFactory;

    protected $primaryKey = 'elsodlegeskulcs';

     protected $fillable = [
        'name',
        'country',
        'city',
        'zipcode',
        'address',
    ];
}
