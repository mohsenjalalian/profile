@if(count($errors))
    <div class="alert alert-danger">
        <ul>
            <!--Loop through all errors-->
            @foreach($errors->all() as $error)

                {{$error}} <br>

            @endforeach
        </ul>
    </div>
@endif