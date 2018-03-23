@if (count($errors) > 0)
    <ul>
        @foreach ($errors->all() as $error)
            <!--<li>{{ $error }}</li>-->
            @if ($error == 'The content field is required.')
                <p>
                    <div class="alert alert-danger" role="alert">{{ 'タスクが入力されていません' }} </div>
                    <!--{{ 'タスクが入力されていません' }} -->
                </p>
            @elseif ($error == 'The status field is required.')
                <p>
                    <div class="alert alert-danger" role="alert">{{ 'ステータスが入力されていません' }}  </div>
                    <!--{{ 'ステータスが入力されていません' }} -->
                </p>
            @else
                <p>
                    <div class="alert alert-danger" role="alert">{{ $error }}  </div>
                </p>
            @endif
        @endforeach
    </ul>
@endif