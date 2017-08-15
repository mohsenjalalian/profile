@extends('admin.layouts.master')



@section('content')

    <div class="content-wrapper clearfix">
        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                <h2>دسته بندی</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{route('profile')}}">خانه</a>
                    </li>
                    <li class="active">
                        <strong>دسته بندی</strong>
                    </li>
                </ol>
            </div>
        </div>

        {{--<div class="ibox float-e-margins">--}}
            {{--<div class="ibox-content">--}}
                {{--<div class="form-group">--}}
                    {{--<form id="contact" action="{{route('storeCategory')}}" method="post">--}}
                        {{--{{csrf_field()}}--}}
                        {{--<div class="form-group{{ $errors->has('name') ? ' has-error': ''}}">--}}
                    {{--<label class="font-noraml text-center">لطفا روی کادر زیر کلیک کنید و دسته بندی خود را انتخاب کنید</label>--}}
                    {{--<div>--}}
                        {{--<select data-placeholder="انتخاب کنید" name="name" class="chosen-select" multiple style="width:350px;" tabindex="4">--}}
                            {{--<option value="">Select</option>--}}
                            {{--<option value="United States">United States</option>--}}
                            {{--<option value="United Kingdom">United Kingdom</option>--}}
                            {{--<option value="Afghanistan">Afghanistan</option>--}}
                            {{--<option value="Aland Islands">Aland Islands</option>--}}
                            {{--<option value="Albania">Albania</option>--}}
                            {{--<option value="Algeria">Algeria</option>--}}
                        {{--</select>--}}
                    {{--</div>--}}
                {{--</div>--}}
                        {{--@if($errors->has('name'))--}}
                            {{--<span class="help-block">{{ $errors->first('name')}}</span>--}}
                        {{--@endif--}}
                    {{--</form>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            <div style="margin-top: 50px;" class="col-lg-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        نظرات مدیران
                    </div>

                    <div class="panel-body">
                        <form id="contact" action="{{route('storeCategory')}}" method="post">
                            {{csrf_field()}}
                            <div class="form-group{{ $errors->has('name') ? ' has-error': ''}}">
                                <div class="col-sm-10 col-md-12">
                                    <input type="text" placeholder="نام"
                                           value="{{ Request::old('name') ?: ''}}" class="form-control m-b" name="name" tabindex="1" required autofocus>
                                    @if($errors->has('name'))
                                        <span class="help-block">{{ $errors->first('name')}}</span>
                                    @endif
                                </div>
                            </div>


                            <fieldset class="col-md-12">
                                <button class="btn btn-primary col-md-4" name="submit" type="submit" id="contact-submit" data-submit="...Sending">ارسال</button>
                            </fieldset>

                        </form>
                    </div>
                </div>
            </div>
            <div style="margin-top:20px" class="col-lg-6">
                <div class="ibox float-e-margins">
                    <div class="ibox-content">
                        <input type="text" class="form-control input-sm m-b-xs" id="filter"
                               placeholder="سرچ کردن">

                        <table class="footable table table-stripped" data-page-size="3" data-filter=#filter>
                            <thead>
                            <tr>
                                <th class="text-center">نام</th>
                                <th style="width: 30px;" class="text-center">تغییرات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)

                                <tr>
                                    <td style="padding-top: 22px;" class="text-center">{{$category->name}}</td>

                                    <td style="display: flex;">
                                        <button style="margin-top: 12px; width:30px; height: 30px;" data-toggle="modal" data-href="{{ route('category.edit', $category->id) }}"
                                                data-target="#myModal2" class="btn btn-warning edit">
                                            <i style="margin-right: -3px;" class="fa fa-paint-brush" aria-hidden="true"></i></button>

                                        <p class="text-center">
                                        <form action="{{ route('category.destroy', $category->id) }}" method="POST">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}

                                            <button style="margin-right: 20px; margin-top: 12px; width: 30px; height: 30px;" class="btn btn-danger text-center"><i style="margin-right: -3px;" class="fa fa-trash" aria-hidden="true"></i></button>

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
            {{--<div class="wrapper wrapper-content animated fadeInRight col-md-6">--}}
                {{--<div class="row">--}}
                    {{--<div style="margin-top: 30px;">--}}
                        {{--<div class="ibox float-e-margins">--}}

                            {{--<div class="ibox-content">--}}

                                {{--<div class="table-responsive">--}}
                                    {{--<table class="table table-striped table-bordered table-hover dataTables-example" >--}}
                                        {{--<thead>--}}
                                        {{--<tr>--}}
                                            {{--<th class="text-center">نام</th>--}}
                                            {{--<th style="width: 30px;" class="text-center">تغیرات</th>--}}
                                        {{--</tr>--}}
                                        {{--</thead>--}}
                                        {{--<tbody>--}}
                                        {{--@foreach($categories as $category)--}}

                                            {{--<tr>--}}
                                                {{--<td style="padding-top: 22px;" class="text-center">{{$category->name}}</td>--}}

                                                {{--<td style="display: flex;">--}}
                                                    {{--<button style="margin-top: 12px; width:30px; height: 30px;" data-toggle="modal" data-href="{{ route('category.edit', $category->id) }}"--}}
                                                            {{--data-target="#myModal2" class="btn btn-warning edit">--}}
                                                        {{--<i style="margin-right: -3px;" class="fa fa-paint-brush" aria-hidden="true"></i></button>--}}

                                                    {{--<p class="text-center">--}}
                                                    {{--<form action="{{ route('category.destroy', $category->id) }}" method="POST">--}}
                                                        {{--{{ method_field('DELETE') }}--}}
                                                        {{--{{ csrf_field() }}--}}

                                                        {{--<button style="margin-right: 20px; margin-top: 12px; width: 30px; height: 30px;" class="btn btn-danger text-center"><i style="margin-right: -3px;" class="fa fa-trash" aria-hidden="true"></i></button>--}}

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
        {{--</div>--}}
    {{--</div>--}}
    <div class="modal inmodal" id="myModal2" tabindex="-1" role="dialog"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content animated flipInY">
                <div class="modal-header">
                    <button type="button" class="close"
                            data-dismiss="modal"><span aria-hidden="true">&times;</span><span
                                class="sr-only">Close</span></button>
                    <h4 class="modal-title">ویرایش فرم</h4>
                    <small class="font-bold">این فرم در صفحه اصلی شما نشان
                        داده میشود
                    </small>
                </div>
                <div style="background-color: #fff !important; height:auto" class="modal-body">
                    <div class="container">

                    </div>
                </div>

            </div>
        </div>
    </div>

    @include('admin.layouts.success')
    @include('admin.layouts.errors')
@endsection


@section('scripts')
    $('button.edit').click(function(e){
    e.preventDefault();
    $.get($(this).attr('data-href'),function(data){
    $('#myModal2').find('.modal-body').html(data);
    })
    });
@endsection
