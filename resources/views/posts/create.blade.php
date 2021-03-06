@extends('main')

@section('title' ,'|new create')


@section('content')

    <div class="row">



	<div class="col-md-8 col-md-offset-2">

			<h1>create new post</h1>
			<hr>


				{!! Form::open(array('route' => 'posts.store')) !!}

				{{ Form::label('title','Title:' )}}
				{{ Form::text('title',null,array('class' => 'form-control')) }}

				{{ Form::label('body','Post Body:' )}}

				{{ Form::textarea('body',null,array('class'=>'form-control')) }}

				{{ Form::submit('create post',array('class'=> 'btn btn-success btn-lg btn-block', 'style'=>'margin-top:20px;'))}}
   
               {!! Form::close() !!}

	</div>
    </div>

    @endsection