@extends('admin.layouts.master')



@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <div class="container">
            @include('admin.layouts.errors')
            <form id="contact" action="{{route('skills.update',$skills->id)}}" method="post">
                {{csrf_field()}}
                {{ method_field('PUT') }}
                <div class="row">
                    <div style="margin-top: 20px;" class="col-md-3">
                <div class="form-group{{ $errors->has('type') ? ' has-error': ''}}">
                    <label>نوع</label>
                    <fieldset>
                        <input class="form-control m-b" placeholder="نوع" type="text" value="{{$skills->type}}" name="type" tabindex="1" required
                               autofocus>
                    </fieldset>
                    @if($errors->has('type'))
                        <span class="help-block">{{ $errors->first('type')}}</span>
                    @endif
                </div>
                    </div>
<div style="margin-top: 20px;" class="col-md-3">
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
                <div class="row">
                    <div style="margin-right: 100px;" class="col-md-4">
                <div class="form-group{{ $errors->has('point') ? ' has-error': ''}}">
                    <div class="form-group{{ $errors->has('point') ? ' has-error': ''}}">
                        <select name="point" class="select2_demo_1 form-control">
                            <option value="{{$skills->point}}">{{$skills->point}}</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    @if($errors->has('point'))
                        <span class="help-block">{{ $errors->first('point')}}</span>
                    @endif
                </div>

                </div>
                    </div>
                </div>
                <div style="margin-top: 20px;" class="modal-footer col-md-5">
                    <button  style="font-family: webmdesign;" type="button" class="btn btn-white" data-dismiss="modal">بستن</button>
                    <button style="font-family: webmdesign;" name="submit" type="submit" id="contact-submit" data-submit="...Sending" class="btn btn-primary">اعمال تغییرات</button>
                </div>
            </form>

        </div>
    </div>
@endsection
