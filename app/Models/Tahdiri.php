<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tahdiri extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'surname', 'sex', 'job', 'DadJob', 'MomJob', 'day', 'month', 'year', 'place', 'residence', 'photo', 'level', 'local', 'tel'
    ];
}
