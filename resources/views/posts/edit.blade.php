@extends('layouts.app')
@section('content')

<h1>Edit Post</h1>
{{-- <form action="/posts/{{$post->id}}" method="post" > --}}
    {!! Form::model($post,['action'=>['PostController@update',$post->id],'method'=>'PUT']) !!}
       <div class="form-group">
            {!! Form::label('title','Title') !!}
            {!! Form::text('title',null,['class'=>'form-control']) !!}
       </div>
       <div class="form-group">
            {!! Form::submit('Edit',['class'=>'btn btn-info']) !!}
       </div>


{!! Form::close() !!}
<form action="{{route('posts.destroy',$post->id)}}" method="post">
    {!! Form::open(['action'=>['PostController@destroy',$post->id],'method'=>'DELETE']) !!}
       

    <div class="form-group">
        {!! Form::submit('Delete') !!}
    </div>
    
</form>

@endsection