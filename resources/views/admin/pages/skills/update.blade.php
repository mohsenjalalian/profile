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
                        <div style="margin-top: 10px; margin-right: 15px; width: 280px;"
                             class="ibox float-e-margins">
                            <div class="form-group">
                                <label class="font-noraml text-center"></label>
                                <lable style="margin-right: 13px; margin-bottom: 10px;">نوع مهارت</lable>
                                <select oninvalid="return chek(this)" oninput="return chek2(this)"
                                        style="width: 230px; margin-right: 15px;" name="type_id"
                                        class="select2_demo_1 form-control">
                                    <option  value="{{$skills->type->id}}">
                                        {{$skills->type->name}}
                                    </option>
                                @foreach($types as $type)
                                      @if($type->id !== $skills->type->id)
                                        <option value="{{$type->id}}">{{$type->name}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
<div style="margin-top: 25px;" class="col-md-3">
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
                        <lable style="margin-right: 7px; margin-bottom: 10px;">امتیاز</lable>

                        <select name="point" class="select2_demo_1 form-control" >

                            <option value="1" @if($skills->point == 1) selected @endif>1</option>
                            <option value="2" @if($skills->point == 2) selected @endif>2</option>
                            <option value="3" @if($skills->point == 3) selected @endif>3</option>
                            <option value="4" @if($skills->point == 4) selected @endif>4</option>
                            <option value="5" @if($skills->point == 5) selected @endif>5</option>
                        </select>
                    @if($errors->has('point'))
                        <span class="help-block">{{ $errors->first('point')}}</span>
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
