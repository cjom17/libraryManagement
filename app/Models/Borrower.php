<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Book;
class Borrower extends Model
{
    use HasFactory;
      protected $fillable = [
        'borrower_name',
        'borrower_section',
        'borrower_age'
        
        
    ];
    
     public function books(){
        return $this->hasMany(Book::class);
    }
      public function book(){
        return $this->hasOne(Book::class);
    }
     public function manyBooks(){
        return $this->belongsToMany(Book::class);
    }
}