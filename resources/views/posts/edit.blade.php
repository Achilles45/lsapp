@extends('layout.app')
@section('content')
    <h2>Edit Post</h2><br />
    {!! Form::open(['action'=> ['PostsController@update', $post->id], 'method'=>'POST']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', $post->title, ['class'=>'form-control', 'placeholder'=>'Title'])}}
            </div>
            <div class="form-group">
                {{Form::label('body', 'Body')}}
                {{Form::textarea('body', $post->body, ['class'=>'form-control', 'placeholder'=>'Body', 'id'=>'article-ckeditor'])}}
                </div>
                {{Form::hidden('_method','PUT')}}
                {{Form::submit('submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}  
@endsection