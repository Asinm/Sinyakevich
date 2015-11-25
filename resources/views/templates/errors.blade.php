@if(count($errors)>0)
    Упс!!! найдены следующие ошибки:
    <ul>
        @foreach($errors->all() as $error)
            <li>
                {{$error}}
            </li>
        @endforeach
    </ul>
@endif