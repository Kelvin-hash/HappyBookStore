<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookDetails extends Model
{
    use HasFactory;
    private $guard =['id'];

    public function books(){
        return $this->belongsTo(Book::class);
    }
}
