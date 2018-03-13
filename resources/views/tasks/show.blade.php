@extends('layouts.app')

@section('content')

    <h1>id = {{ $task->id }} 詳細ページ</h1>
    
    <table class="table table-bordered">
            <tr>
                <th>{{ $task->content }}</th>
                <td>{{ $task->status }}</td>
            </tr>
    </table>
    
    <!--<p>{{ $task->content }} : {{ $task->status }}</p>-->
    
    {!! link_to_route('tasks.edit', '編集する', ['id' => $task->id], ['class' => 'btn btn-default']) !!}
    
    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}

@endsection