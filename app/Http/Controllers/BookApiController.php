<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;


class BookApiController extends Controller
{

    /**
     * Display a listing of all resources.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        return response()-> json(Book::all());
    }

    /**
     * Display a listing of one resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()-> json(Book::findOrFail($id));
    }

     /**
     * Create new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
         request()->validate([
            'name' => 'required'
         ]);

         $book = new Book();
         $book->name = request('name');
         $book->author = request('author');

         if($book->save()){
            return response()->json(True);
         }
         else{
            return response()->json(False);
         }
    }
    /**
     * Update existing resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        request()->validate([
            'name' => 'required'
         ]);
         
         $book = Book::findOrFail($id);
         $book->name = request('name');
         $book->author = request('author');

         if($book->save()){
            return response()->json(True);
         }
         else{
            return response()->json([False]);
         }
    }
    /**
     * Destroy resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
       $book = Book::findOrFail(request('id'));
       if($book->delete())
        {
            return response()->json(True);
        }
       else
        {
           return response()->json(False);
        }   
    }
}
