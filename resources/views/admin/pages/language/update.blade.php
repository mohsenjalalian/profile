@extends('admin.layouts.master')



@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <div class="container">

            <form id="contact" action="{{route('language.update',$language->id)}}" method="post">
                {{csrf_field()}}
                {{ method_field('PUT') }}
                <div class="form-group{{ $errors->has('name') ? ' has-error': ''}}">
                    <label>نام</label>
                    <fieldset>
                        <input class="form-control m-b col-md-3" placeholder="نام زبان" value="{{$language->name}}" type="text" name="name" tabindex="1"
                               required autofocus>
                    </fieldset>
                    @if($errors->has('name'))
                        <span class="help-block">{{ $errors->first('name')}}</span>
                    @endif
                </div>
<div class="row">
                <div class="col-md-1">
                    <div class="form-group{{ $errors->has('reading') ? ' has-error': ''}}">
                        <select name="reading" class="select2_demo_1 form-control">
                            <option value="{{$language->reading}}">{{$language->reading}}</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                        @if($errors->has('reading'))
                            <span class="help-block">{{ $errors->first('reading')}}</span>
                        @endif
                    </div>
                </div>

                    <div class="col-md-1">
                        <div class="form-group{{ $errors->has('writing') ? ' has-error': ''}}">
                            <select name="writing" class="select2_demo_1 form-control">
                            <option value="{{$language->writing}}">{{$language->writing}}</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    @if($errors->has('writing'))
                        <span class="help-block">{{ $errors->first('writing')}}</span>
                    @endif
                </div>
                    </div>
                 <div class="col-md-1">
                <div class="form-group{{ $errors->has('speaking') ? ' has-error': ''}}">
                        <select name="speaking" class="select2_demo_1 form-control">
                            <option value="{{$language->speaking}}">{{$language->speaking}}</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    @if($errors->has('speaking'))
                        <span class="help-block">{{ $errors->first('speaking')}}</span>
                    @endif
                </div>
                 </div>
                <div class="col-md-1">
                <div class="form-group{{ $errors->has('listening') ? ' has-error': ''}}">
                            <select name="listening" class="select2_demo_1 form-control">
                            <option value="{{$language->listening}}">{{$language->listening}}</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    @if($errors->has('listening'))
                        <span class="help-block">{{ $errors->first('listening')}}</span>
                    @endif
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
