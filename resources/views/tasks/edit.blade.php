@extends('layouts.app')

@section('content')

    <h1>edit id: {{ $task->id }}</h1>

    <div class="row">
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

@endsection