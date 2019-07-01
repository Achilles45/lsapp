@extends('layout.app')
@section('content')
    <h2>Create Post</h2><br />
    {!! Form::open(['action'=> 'PostsController@store', 'method'=>'POST']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', '', ['class'=>'form-control', 'placeholder'=>'Title'])}}
            </div>
            <div class="form-group">
                {{Form::label('body', 'Body')}}
                {{Form::textarea('body', '', ['class'=>'form-control', 'placeholder'=>'Body', 'id'=>'article-ckeditor'])}}
                </div>
                {{Form::submit('submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}  
@endsection