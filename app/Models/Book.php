<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    private $guard =['id'];

    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function bookdetails(){
        return $this->hasOne(BookDetails::class);
    }
}
