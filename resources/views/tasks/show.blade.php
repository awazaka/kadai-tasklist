@extends('layouts.app')

@section('content')

    <h1>id = {{ $task->id }} のタスク詳細</h1>

    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <td>{{ $task->id }}</td>
        </tr>
        <tr>
            <th>タスク</th>
            <td>{{ $task->content }}</td>
        </tr>
        <tr>
            <th>状態</th>
            <td>{{ $task->status }}</td>
        </tr>
    </table>
    
    {!! link_to_route('tasks.edit', 'このタスクを編集', ['task' => $task->id], ['class' => 'btn btn-secondary mb-2 mx-auto']) !!}

    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('このタスクを削除', ['class' => 'btn btn-danger mx-auto']) !!}
    {!! Form::close() !!}

@endsection