<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
       public function showAllBooks(){
        return Book::all();
       }
        public function store(Request $request){
        

        return Book::create([
            'book_title' => $request->book_title,
            'book_category' => $request->book_category,
            'book_author' => $request->book_author
            
        ]);
    }
    
    
    public function show($id){
        return Book::findOrfail($id);
        
    }

    
    public function update(Request $request, $id){
      
          return Book::find($id)->update([
            'book_title' => $request->book_title,
            'book_category' => $request->book_category,
            'book_author' => $request->book_author
            
        ]);
        
        
    }
    public function destroy($id){
        return Book::find($id)->delete();

    }
}