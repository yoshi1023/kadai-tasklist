@extends('layouts.app')

@section('content')

    <h1>id = {{ $task->id }} 詳細ページ</h1>
    
    <p>{{ $task->content }} : {{ $task->status }}</p>
    
    {!! link_to_route('tasks.edit', '編集', ['id' => $task->id]) !!}
    
    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除') !!}
    {!! Form::close() !!}

@endsection