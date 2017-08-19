@extends('admin.layouts.master')



@section('content')
        <div class="content-wrapper clearfix">
        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                <h2>نظرات مدیران</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{route('profile')}}">خانه</a>
                    </li>
                    <li class="active">
                        <strong>نظرات مدیران</strong>
                    </li>
                </ol>
            </div>
        </div>
        <div style="margin-top: 20px;" class="col-lg-4">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    افزودن
                </div>
                <div class="panel-body">
                    <form id="contact" action="{{route('recommend.store')}}" enctype="multipart/form-data"
                          method="post">
                        {{csrf_field()}}
                        <div class="form-group{{ $errors->has('name') ? ' has-error': ''}}">
                            <div class="col-sm-10 col-md-12">
                                <input oninvalid="return chek(this)" oninput="return chek2(this)" type="text" placeholder="نام شخص"
                                       value="{{ Request::old('name') ?: ''}}" class="form-control m-b" name="name"
                                       tabindex="1" required="required" autofocus>
                                @if($errors->has('name'))
                                    <span class="help-block">{{ $errors->first('name')}}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('position') ? ' has-error': ''}}">
                            <div class="col-sm-10 col-md-12">
                                <input oninvalid="return chek(this)" oninput="return chek2(this)"  type="text" placeholder="موقعیت شغلی"
                                       value="{{ Request::old('position') ?: ''}}" class="form-control m-b" name="position"
                                       tabindex="1" required="required" autofocus>
                                @if($errors->has('position'))
                                    <span class="help-block">{{ $errors->first('position')}}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('company') ? ' has-error': ''}}">
                            <div class="col-sm-10 col-md-12">
                                <input oninvalid="return chek(this)" oninput="return chek2(this)"  type="text" placeholder="شرکت"
                                       value="{{ Request::old('company') ?: ''}}" class="form-control m-b" name="company"
                                       tabindex="1" required="required" autofocus>
                                @if($errors->has('company'))
                                    <span class="help-block">{{ $errors->first('company')}}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('info') ? ' has-error': ''}}">
                            <div class="col-sm-10 col-md-12">
                                <textarea oninvalid="return chek(this)" oninput="return chek2(this)"  style="height: 60px; max-width: 280px; max-height: 90px;" type="text" placeholder="توضیحات"
                                          class="form-control m-b" name="info" tabindex="1" required
                                          autofocus>{{ Request::old('info') ?: ''}}</textarea>
                                @if($errors->has('info'))
                                    <span class="help-block">{{ $errors->first('info')}}</span>
                                @endif
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="ibox float-e-margins">
                                    <div class="form-group{{ $errors->has('photo') ? ' has-error': ''}}">
                                        <div style="width: 280px; margin-right: 15px;" class="fileinput fileinput-new input-group" data-provides="fileinput">
                                            <div class="form-control" data-trigger="fileinput">
                                                <p class="fileinput-exists" style="color: #2aca76;">بارگذاری شد</p>
                                            </div>
                                            <span style="border: 1px solid #e5e6e7;" class="input-group-addon btn btn-default btn-file">
                                                    <span class="fileinput-new">بارگذاری</span>
                                                    <span class="fileinput-exists">عوض کردن</span>
                                                    <input type="file" value="{{ Request::old('photo') ?: ''}}" name="photo">
                                                </span>
                                            <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">پاک کردن</a>
                                        </div>
                                        <p style="font-size: 12px; margin-left: 15px;" class="pull-right colorpicker">۱۰۰ * ۱۰۰</p>
                                        @if($errors->has('photo'))
                                            <span class="help-block">{{ $errors->first('photo')}}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{--<div class="col-md-6">--}}
                            {{--<div class="ibox float-e-margins">--}}
                                {{--<div class="form-group{{ $errors->has('photo') ? ' has-error': ''}}">--}}
                                    {{--<div class="fileinput fileinput-new" data-provides="fileinput">--}}
                                        {{--<span class="btn btn-default btn-file"><span class="fileinput-new">بارگذاری</span><span class="fileinput-exists"><span--}}
                                                        {{--style="color: #2aca76;">بارگذاری شد</span></span>--}}
                                            {{--<input type="file" value="{{ Request::old('photo') ?: ''}}" name="photo"></span>--}}
                                    {{--</div>--}}
                                    {{--@if($errors->has('photo'))--}}
                                        {{--<span class="help-block">{{ $errors->first('photo')}}</span>--}}
                                    {{--@endif--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            <fieldset>
                                <button style="font-family: webmdesign; margin-right: 20px;" class="btn btn-primary col-md-4" name="submit" type="submit" id="contact-submit"
                                        data-submit="...Sending">ارسال
                                </button>
                            </fieldset>
                        {{--</div>--}}

                    </form>
                </div>
            </div>
        </div>
            <div style="margin-top:20px" class="col-lg-8">
                <div class="ibox float-e-margins">
        <div class="ibox-content">
            <input type="text" class="form-control input-sm m-b-xs" id="filter"
                   placeholder="سرچ کردن">

            <table class="footable table table-stripped" data-page-size="3" data-filter=#filter>
                <thead>
                <tr>
                    <th class="text-center">عکس</th>
                    <th class="text-center">نام</th>
                    <th class="text-center">شغل</th>
                    <th class="text-center">شرکت</th>
                    <th class="text-center">توضیحات</th>
                    <th style="width: 20px;" class="text-center">تغییرات</th>
                </tr>
                </thead>
                <tbody>
                @foreach($recommends as $recommend)
                    <tr>
                        <td style="vertical-align: middle; width: 50px;" class="text-center">
                            {{--<i style="font-size: 25px; color: #239963;" class="fa fa-check"></i>--}}
                            <img style="width: 50px;height: 50px" src="{{$recommend->photo}}" alt="{{$recommend->photo}}"></td>

                        <td style=" vertical-align: middle; width: 100px;" class="text-center">{{$recommend->name}}</td>

                        <td style="vertical-align: middle; width: 100px;" class="text-center">
                            {{--<i style="color: #239963; font-size: 25px;" class="fa fa-check"></i>--}}
                            {{$recommend->position}}
                        </td>
                        <td style="vertical-align: middle; width: 100px;" class="text-center">
                            {{--<i style="color: #239963; font-size: 25px;" class="fa fa-check"></i>--}}
                            {{$recommend->company}}
                        </td>

                        <td style="text-align: center; vertical-align: middle; width: 30px">
                            <i style="color: #239963; font-size: 22px;" class="fa fa-check"></i>
                                {{--<span class="tooltiptext text-justify">{{$recommend->info}}</span>--}}
                        </td>
                        <td style="border: none; display: flex; width: 20px;">
                            {{--<a style="margin-top: 12px; width:30px; height: 30px;" data-modal="modal-13" data-target="modal-13"--}}
                                    {{--data-href="{{route('recommend.edit',$recommend->id)}}"--}}
                                    {{--class="btn btn-warning edit md-trigger">--}}
                                {{--<i style="margin-right: -3px;" class="fa fa-paint-brush" aria-hidden="true">--}}
                                {{--</i>--}}
                            {{--</a>--}}
                            {{--<a href="{{route('recommend.edit',$recommend->id)}}" class="edit">--}}
                                <button style="margin-top: 12px; width:30px; height: 30px;" data-toggle="modal" data-target="#myModal4"
                                        data-href="{{route('recommend.edit',$recommend->id)}}"
                                       class="btn btn-warning edit md-trigger">
                                    <i style="margin-right: -5px; position: relative; top: -2px;" class="fa fa-paint-brush" aria-hidden="true">
                                    </i>
                                </button>
                            {{--</a>--}}
                            <form action="{{ route('recommend.destroy', $recommend->id) }}"
                                  method="POST">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                    {{--<div class="col-lg-6 h-100 p-lg">--}}
                                        {{--<button class="btn btn-warning btn-sm demo3">Run example</button>--}}
                                    {{--</div>--}}

                            <div class="text-center">
                                <button style=" margin-top: 12px; margin-right: 10px; width: 30px; height: 30px" type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal6">
                                    <i style="margin-right: -4px; position: relative; top: -2px;" class="fa fa-trash"
                                       aria-hidden="true"></i>
                                </button>
                            {{--<button style=" margin-top: 12px; margin-right: 10px; width: 30px; height: 30px"--}}
                                    {{--class="btn btn-danger"><i style="margin-right: -4px; position: relative; top: -2px;" class="fa fa-trash"--}}
                                                                    {{--aria-hidden="true"></i></button>--}}
                            </div>
                            </form>
                        </td>
                    </tr>

                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <td colspan="5">
                        <ul class="pagination pull-right"></ul>
                    </td>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>
    </div>
    </div>

        <div class="modal inmodal fade" id="myModal6" tabindex="-1" role="dialog"  aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    </div>
                    <div class="modal-body">
                        <p class="text-center">مطمن هستی که میخوای پاک کنی</p>
                    </div>
                    <div class="modal-footer">
                        <form action="{{ route('recommend.destroy', $recommend->id) }}"
                              method="POST">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <div class="text-center">
                                <button style=" margin-top: 12px; margin-right: 10px; width: 30px; height: 30px"
                                class="btn btn-danger"><i style="margin-right: -4px; position: relative; top: -2px;" class="fa fa-trash"
                                aria-hidden="true"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        {{--<div class="wrapper wrapper-content animated fadeInRight col-md-8">--}}
            {{--<div class="row">--}}
                {{--<div style="margin-top: 0px;">--}}
                    {{--<div class="ibox float-e-margins">--}}

                        {{--<div class="ibox-content">--}}

                            {{--<div class="table-responsive">--}}
                                {{--<table class="table table-striped table-bordered table-hover dataTables-example">--}}
                                    {{--<thead>--}}
                                    {{--<tr>--}}
                                        {{--<th class="text-center">عکس</th>--}}
                                        {{--<th class="text-center">نام</th>--}}
                                        {{--<th class="text-center">شرکت</th>--}}
                                        {{--<th class="text-center">سمت</th>--}}
                                        {{--<th class="text-center">توضیحات</th>--}}
                                        {{--<th style="width: 20px;" class="text-center">تغییرات</th>--}}
                                    {{--</tr>--}}
                                    {{--</thead>--}}
                                    {{--<tbody>--}}
                                    {{--@foreach($recommends as $recommend)--}}

                                        {{--<tr>--}}
                                            {{--<td style="vertical-align: middle;" class="text-center"><img style="width: 50px;height: 50px" src="{{$recommend->photo}}"--}}
                                                                                                         {{--alt="{{$recommend->photo}}"></td>--}}
                                            {{--<td style=" vertical-align: middle;" class="text-center">{{$recommend->name}}</td>--}}
                                            {{--<td style="vertical-align: middle;" class="text-center">{{$recommend->position}}</td>--}}
                                            {{--<td style="vertical-align: middle;" class="text-center">{{$recommend->company}}</td>--}}
                                            {{--<td class="text-justify">{{$recommend->info}}</td>--}}

                                            {{--<td style="display: flex; border: none;">--}}
                                                {{--<a href="{{route('recommend.edit',$recommend->id)}}" class="edit">--}}
                                                {{--<button style="margin-top: 12px; width:30px; height: 30px;" data-toggle="modal"--}}
                                                        {{--data-href="{{route('recommend.edit',$recommend->id)}}"--}}
                                                        {{--data-target="#myModal2" class="btn btn-warning edit">--}}
                                                    {{--<i style="margin-right: -3px;" class="fa fa-paint-brush" aria-hidden="true">--}}
                                                    {{--</i>--}}
                                                {{--</button>--}}
                                                {{--</a>--}}
                                                {{--<form action="{{ route('recommend.destroy', $recommend->id) }}"--}}
                                                      {{--method="POST">--}}
                                                    {{--{{ method_field('DELETE') }}--}}
                                                    {{--{{ csrf_field() }}--}}

                                                    {{--<button style="margin-right: 10px; margin-top: 12px; width: 30px; height: 30px"--}}
                                                            {{--class="btn btn-danger"><i style="margin-right: -3px" class="fa fa-trash"--}}
                                                                                      {{--aria-hidden="true"></i></button>--}}

                                                {{--</form>--}}
                                            {{--</td>--}}
                                        {{--</tr>--}}

                                    {{--@endforeach--}}

                                    {{--</tbody>--}}

                                {{--</table>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}



    <div class="modal inmodal" id="myModal4" tabindex="-1" role="dialog"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content animated fadeIn">
                <div class="modal-header">
                    <button type="button" class="close"
                            data-dismiss="modal"><span aria-hidden="true">&times;</span><span
                                class="sr-only">Close</span></button>
                    <h4 class="modal-title">ویرایش فرم</h4>
                    <small class="font-bold">این فرم در صفحه اصلی شما نشان
                        داده میشود
                    </small>
                </div>
                <div style="background-color: #fff !important; height: 470px;" class="modal-body col-md-12">
                    <div class="container">

                    </div>
                </div>

            </div>
        </div>
    </div>
        {{--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal4">--}}
            {{--Basic fadeIn effect--}}
        {{--</button>--}}
        {{--<div class="modal inmodal" id="myModal4" tabindex="-1" role="dialog"  aria-hidden="true">--}}
            {{--<div class="modal-dialog">--}}
                {{--<div class="modal-content animated fadeIn">--}}
                    {{--<div class="modal-header">--}}
                        {{--<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>--}}
                        {{--<i class="fa fa-clock-o modal-icon"></i>--}}
                        {{--<h4 class="modal-title">Modal title</h4>--}}
                        {{--<small>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</small>--}}
                    {{--</div>--}}
                    {{--<div class="modal-body">--}}
                        {{--<p><strong>Lorem Ipsum is simply dummy</strong> text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown--}}
                            {{--printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,--}}
                            {{--remaining essentially unchanged.</p>--}}
                    {{--</div>--}}
                    {{--<div class="modal-footer">--}}
                        {{--<button type="button" class="btn btn-white" data-dismiss="modal">Close</button>--}}
                        {{--<button type="button" class="btn btn-primary">Save changes</button>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}

        {{--</div>--}}

        {{--<div class="md-modal md-effect-13" id="modal-13">--}}
            {{--<div class="md-content">--}}
                {{--<h3>Modal Dialog</h3>--}}
            {{--</div>--}}
        {{--</div>--}}

        {{--<div class="container">--}}

        {{--</div>--}}
        {{--<div class="md-overlay"></div>--}}




    @include('admin.layouts.success')
    @include('admin.layouts.errors')
@endsection
