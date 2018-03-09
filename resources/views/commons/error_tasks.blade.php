@if (count($errors) > 0)
    <ul>
        @foreach ($errors->all() as $error)
            <!--<li>{{ $error }}</li>-->
            @if ($error == 'The content field is required.')
                <li>
                    {{ '文字が入力されていません' }} 
                </li>
            @endif
        @endforeach
    </ul>
@endif