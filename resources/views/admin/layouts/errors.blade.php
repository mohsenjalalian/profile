@if(count($errors))
    <div style="position: fixed; top: 580px; width: 300px; right: 1050px; z-index: 100000;"
         class="alert alert22 alert-danger alert-dismissable col-md-4">
        <button style="margin-top: 5px;" aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
        @foreach($errors->all() as $error)
            {{$error}} <br>
        @endforeach
    </div>
@endif