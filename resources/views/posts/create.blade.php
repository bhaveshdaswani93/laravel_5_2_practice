@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>
    {{-- <form action="/posts" method="post"> --}}
        {!! Form::open(['method'=>'POST','action'=>'PostController@store','files'=>true]) !!}
        <div class="form-group">
            {!! form::label('title','Title') !!}
            {!! form::text('title',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::file('file',['class'=>'form-control']) !!}
        </div>
       <div class="form-group">
            {!! form::submit('Create Post') !!}
       </div>
       <div class="alert alert-danger">
           
           @if (count($errors))
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                
               
           @endif
       </div>
        
    </form>
@endsection()