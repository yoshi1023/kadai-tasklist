@if (count($errors) > 0)
    <ul>
        @foreach ($errors->all() as $error)
            <!--<li>{{ $error }}</li>-->
            @if ($error == 'The content field is required.')
                <p>
                    {{ 'タスクが入力されていません' }} 
                </p>
            @elseif ($error == 'The status field is required.')
                <p>
                    {{ 'ステータスが入力されていません' }} 
                </p>
            @else
                <p>
                    {{ 'エラー' }} 
                </p>
            @endif
        @endforeach
    </ul>
@endif