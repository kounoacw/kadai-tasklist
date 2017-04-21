@extends('layouts.app')

@section('content')

    <h1>タスクの追加</h1>
    
    {!! Form::model($task, ['route' => 'tasks.store']) !!}
        {!! Form::label('content', 'タスク:') !!}
        {!! Form::text('content') !!}
        {!! Form::label('status', 'ステータス:') !!}
        {!! Form::text('status') !!}
        {!! Form::submit('登録') !!}
    {!! Form::close() !!}

@endsection