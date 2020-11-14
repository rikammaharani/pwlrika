<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use App\Book;
use PDF;

class BookController extends Controller
{
  public function index()
  {
  $book = Book::all();
  return view('manage',['book' => $book]);
  }
  public function add()
  {
    return view('addbook');
  }
public function create(Request $request)
{
Book::create([
'title' => $request->title,
'author' => $request->author,
'publication' => $request->publication,
'synopsis'=> $request->synopsis,
'year'=> $request->year
]);
return redirect('/manage');
}     
public function edit($id)
{
$book = Book::find($id);
return view('editbook',['book'=>$book]);
}
public function update($id, Request $request)
{
$book = Book::find($id);
$book->title = $request->title;
$book->author = $request->author;
$book->publication = $request->publication;
$book->synopsis = $request->synopsis;
$book->year = $request->year;
$book->save();
return redirect('/manage');
}
public function delete($id)
{
$book = Book::find($id);
$book->delete();
return redirect('/manage');
}

public function __construct()
{
//$this->middleware('auth');
$this->middleware(function($request, $next){
if(Gate::allows('manage-books')) return $next($request);
abort(403, 'Anda tidak memiliki cukup hak akses');
});
}

public function cetak_pdf(){
  $book = Book::all();
  $pdf = PDF::loadview('books_pdf',['book'=>$book]);
  return $pdf->stream();
 }
}
