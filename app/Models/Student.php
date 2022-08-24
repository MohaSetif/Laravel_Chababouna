<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'surname', 'Dadname', 'DadJob', 'day', 'month', 'year', 'place', 'residence', 'scholar_year', 'Tel'
    ];
    public $timestamps = false;
}

class ABC extends Model {

    const CREATED_AT = null;
    const UPDATED_AT = null;

}