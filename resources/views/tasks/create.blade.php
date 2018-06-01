@extends('layouts.app')

@section('content')

    <h1>create new task</h1>



    {!! Form::model($task, ['route' => 'tasks.store']) !!}

        {!! Form::label('status', 'status:') !!}
        {!! Form::text('status') !!}

        {!! Form::label('content', 'task:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('create') !!}

    {!! Form::close() !!}

@endsection