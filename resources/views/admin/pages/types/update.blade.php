@extends('admin.layouts.master')



@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <div class="container">
            @include('admin.layouts.errors')
            <form id="contact" action="{{route('types.update',$skills->id)}}" method="post">
                {{csrf_field()}}
                {{ method_field('PUT') }}
                <div class="row">
                <div style="margin-top: 10px; margin-right: 70px;" class="col-md-4">
                <div class="form-group{{ $errors->has('name') ? ' has-error': ''}}">
                    <label>نام</label>
                    <fieldset>
                        <input class="form-control m-b" placeholder="نام " type="text" name="name" value="{{$skills->name}}" tabindex="1"
                               required autofocus>
                    </fieldset>
                    @if($errors->has('name'))
                        <span class="help-block">{{ $errors->first('name')}}</span>
                    @endif
                </div>
                    </div>
                </div>
                <div style="margin-top: 20px; width: 550px;" class="modal-footer col-md-5">
                    <button  style="font-family: webmdesign;" type="button" class="btn btn-white" data-dismiss="modal">بستن</button>
                    <button style="font-family: webmdesign;" name="submit" type="submit" id="contact-submit" data-submit="...Sending" class="btn btn-primary">اعمال تغییرات</button>
                </div>
            </form>

        </div>
    </div>
@endsection
