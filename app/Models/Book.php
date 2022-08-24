<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = [
        'copies', 'note', 'parts', 'publication', 'documentation', 'review', 'writer_name', 'title', 'field', 'insert_date'
    ];
    public $timestamps = false;
}

class ABC extends Model {

    const CREATED_AT = null;
    const UPDATED_AT = null;

}
