@if(!empty($errors->all()))
    <div class="ui bottom attached warning  message">
        @foreach($errors->all() as $error)

            <li style="list-style: none;"><i class="frown icon"></i> {{$error}}</li>
        @endforeach
    </div>
@endif
