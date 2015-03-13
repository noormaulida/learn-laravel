@extends('layout')

@section('content')

<div class='container'>

<h3>Edit book</h3>

  {{ Form::open(array('action' => 'BookController@update')) }}

 {{Form::hidden('id', $book->id)}}

 {{Form::label('title', 'Title') }}

 {{Form::text('title', $book->title , array('class' => 'form-control'))}}

 {{Form::label('author', 'Author') }}

 {{Form::text('author', $book->author , array('class' => 'form-control'))}}

 {{Form::label('description', 'Description') }}

 {{Form::textarea('description', $book->description , array('class' => 'form-control'))}}

 {{Form::label('price', 'Price') }}

 {{Form::text('price', $book->price , array('class' => 'form-control'))}}

 {{Form::submit('Update', array('class' => 'btn btn-primary')) }}

 {{ Form::close() }}

 </div>

 @stop