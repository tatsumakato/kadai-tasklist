@extends('layouts.app')

@section('content')
    
    @if (Auth::check())

    <h1>edit id: {{ $task->id }}</h1>

    <div class="row col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
    {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}
        <div class="form-group">
        {!! Form::label('status', 'status:') !!}
        {!! Form::text('status', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
        {!! Form::label('content', 'task:') !!}
        {!! Form::text('content', null, ['class' => 'form-control']) !!}
        </div>
        {!! Form::submit('update', ['class' => 'btn btn-default']) !!}

    {!! Form::close() !!}
        </div>
    </div>
    
    @else 
            <div class="center jumbotron">
            <div class="text-center">
                <h1>Welcome to the Task List</h1>
                {!! link_to_route('signup.get', 'Sign up now!', null, ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        </div>
    @endif


@endsection