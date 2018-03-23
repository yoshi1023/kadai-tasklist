<ul class="media-list">

@foreach ($tasks as $task)
    <?php $user = $task->user; ?>
    <li class="media">
        <div class="media-left">
            <img class="media-object img-rounded" src="{{ Gravatar::src($user->email, 120) }}" alt="">
        </div>
        <div class="media-body">
            <div>
                <p>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!}</p>
                <p>{!! link_to_route('users.show', $user->name, ['id' => $user->id]) !!}
                <span class="text-muted">posted at {{ $task->created_at }}</span> </p>
            </div>
            <div>
                <p>タスク: {!! nl2br(e($task->content)) !!}</p>
                <p>ステータス: {!! nl2br(e($task->status)) !!}</p>
                
                
            </div>
        </div>
    </li>
@endforeach
</ul>
{!! $tasks->render() !!}