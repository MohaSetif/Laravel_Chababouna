<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Illiterate extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'surname', 'sex', 'day', 'month', 'year', 'place', 'residence', 'photo', 'tel',
    ];
}

class ABC extends Model {

    const UPDATED_AT = null;

}