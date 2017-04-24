@extends('layouts.app')

@section('content')

    <h1>タスク一覧</h1>
    
    @if (count($tasks) > 0)
        <table class="table table-striped">
            <tr>
                <th>id</th>
                <th>タスク名</th>
                <th>ステータス</th>
            </tr>
            @foreach ($tasks as $task)
                <tr>
                    <td>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!}</td>
                    <td>{{ $task->content }}</td>
                    <td>{{ $task->status }}</td>
                </tr>
            @endforeach
        </table>
    @endif

    {!! link_to_route('tasks.create', 'タスクの追加', null, ['class' => 'btn btn-primary']) !!}

@endsection