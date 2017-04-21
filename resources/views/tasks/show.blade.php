@extends('layouts.app')

@section('content')

    <h1>id : {{ $task->id }} のタスク詳細</h1>
    
    <p>{{ $task->content }} ({{ $task->status }})</p>
    
    {!! link_to_route('tasks.edit', 'タスクの編集', ['id' =>  $task->id]) !!}
    
    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除') !!}
    {!! Form::close() !!}

@endsection