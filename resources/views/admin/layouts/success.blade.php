@if(Session::has('success'))
    <div style="position: fixed; top: 580px; width: 300px; right: 1030px; z-index: 100000;" class="alert alert-success alert-dismissable col-md-4">
        <button style="margin-top: 5px;" aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
        {{Session::get('success')}}
    </div>
@endif
