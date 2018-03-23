@extends('layouts.app')

@section('content')
    @if (Auth::check())
        <?php $user = Auth::user(); ?>
        {{ $user->name }}
        
        <h1>タスク一覧</h1>
        @if (count($tasks) > 0)
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>タスク</th>
                        <th>ステータス</th>
                    </tr>
                </thead>
                
                <tbody>
                    @foreach ($tasks as $task)
                        <tr>
                            <td>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!}</td>
                            <td>{{ $task->content }}</td>
                            <td>{{ $task->status }}</td>  
                            
                            
                        </tr>
                    @endforeach  
                </tbody>
                
            </table>
            {!! link_to_route('tasks.create', 'タスクの作成', null, ['class' => 'btn btn-lg btn-primary']) !!}
            
        @endif
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>タスクリスト</h1>
                {!! link_to_route('signup.get', 'ユーザー登録', null, ['class' => 'btn btn-lg btn-primary']) !!}
                {!! link_to_route('login.get', 'ログイン', null, ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        </div>
    @endif
    
        
        <!--{!! link_to_route('tasks.create', '新規作成ページ', null, ['class' => 'btn btn-primary']) !!}-->
        
        <!--//ユーザー登録ボタン-->
        <!--{!! link_to_route('signup.get', 'ユーザー登録', null, ['class' => 'btn btn-primary']) !!}-->
@endsection