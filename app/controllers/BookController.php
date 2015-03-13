<?php

class BookController extends BaseController {
	public function store(){

		$book = new Book;

		$book->title       = Input::get('title');;
		$book->author      = Input::get('author');;
		$book->description = Input::get('description');;
		$book->price       = Input::get('price');;

		$book->save();
		 return View::make('newbook');

  }
  
	public function edit($id)
	{
	   $book = Book::find($id);
	   return View::make('editbook')->with('book', $book);
	}
	
	public function booklist() {
	   $books = Book::all();
	   return View::make('listbook')->with('booksdata', $books);
	}
	
	public function newbook() {
		return View::make('newbook');
	}
	
	public function delete($id)
    {
      $book = Book::find($id);
      $book->delete();
      return Redirect::to('booklist');
    }
	
	 public function update()
	 {
		 $id   = Input::get('id');
		 $book = Book::find($id);

		 $book->title       = Input::get('title');
		 $book->author      = Input::get('author');
		 $book->description = Input::get('description');
		 $book->price       = Input::get('price');

		 $book->save();
		 
		 $books = Book::all();
		 return View::make('listbook')->with('booksdata', $books);
	 }
}

?>