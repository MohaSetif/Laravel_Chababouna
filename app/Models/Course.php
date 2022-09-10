<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'surname', 'sex', 'scholar_year', 'local', 'tel', 'DadTel'
    ];
}

class ABC extends Model {

    const UPDATED_AT = null;

}