<?php

namespace App\Models;

use App\Models\Borrower;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
  use HasFactory;
  protected $fillable = [
    'book_title',
    'book_category',
    'book_author',
    'borrower_id'


  ];
  public function reader()
  {
    return $this->belongsTo(Borrower::class, 'borrower_id', 'id');
  }
  public function borrower()
  {
    return $this->belongsTo(Borrower::class);
  }
  public function manyBorrowers()
  {
    return $this->belongsToMany(Borrower::class);
  }
}