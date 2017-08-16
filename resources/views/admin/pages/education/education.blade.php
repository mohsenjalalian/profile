@extends('admin.layouts.master')



@section('content')
    <div class="content-wrapper clearfix">
        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                <h2>تحصیلات</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{route('profile')}}">خانه</a>
                    </li>
                    <li class="active">
                        <strong>تحصیلات</strong>
                    </li>
                </ol>
            </div>
        </div>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            <div style="margin-top: 20px;" class="col-lg-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        افزودن
                    </div>
                    <div class="panel-body">
                        <form id="contact" action="{{route('storeEducation')}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}

                            <div class="form-group{{ $errors->has('university_name') ? ' has-error': ''}}">
                                <div class="col-sm-10 col-md-12">
                                    <input oninvalid="return chek(this)" oninput="return chek2(this)" type="text" placeholder="نام دانشگاه"
                                           value="{{ Request::old('university_name') ?: ''}}" class="form-control m-b"
                                           name="university_name" tabindex="1" required>
                                    @if($errors->has('university_name'))
                                        <span class="help-block">{{ $errors->first('university_name')}}</span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group{{ $errors->has('field') ? ' has-error': ''}}">
                                <div class="col-sm-10 col-md-12">
                                    <input oninvalid="return chek(this)" oninput="return chek2(this)" type="text" placeholder="رشته"
                                           value="{{ Request::old('field') ?: ''}}" class="form-control m-b" name="field" tabindex="1"
                                           required autofocus>
                                    @if($errors->has('field'))
                                        <span class="help-block">{{ $errors->first('field')}}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('tendency') ? ' has-error': ''}}">
                                <div class="col-sm-10 col-md-12">
                                    <input oninvalid="return chek(this)" oninput="return chek2(this)" type="text" placeholder="گرایش"
                                           value="{{ Request::old('tendency') ?: ''}}" class="form-control m-b" name="tendency"
                                           tabindex="1" required autofocus>
                                    @if($errors->has('tendency'))
                                        <span class="help-block">{{ $errors->first('tendency')}}</span>
                                    @endif
                                </div>
                            </div>


                            <div class="container col-md-12">
                                <div class="form-group">
                                    <div class="form-group{{ $errors->has('start_date') ? ' has-error': ''}}">
                                        <div class="input-group">
                                            <div data-mdpersiandatetimepickershowing="false" title="" data-original-title="" data-mdpersiandatetimepickerselecteddatetime="{&quot;Year&quot;:1393,&quot;Month&quot;:10,&quot;Day&quot;:10,&quot;Hour&quot;:0,&quot;Minute&quot;:0,&quot;Second&quot;:0}" data-mdpersiandatetimepicker="" style="cursor: pointer;" class="input-group-addon" data-mddatetimepicker="true" data-trigger="click" data-targetselector="#fromDate1" data-groupid="group1" data-fromdate="true" data-enabletimepicker="false" data-placement="left">
                                                <span class="glyphicon glyphicon-calendar"></span>
                                            </div>
                                            <input data-mdpersiandatetimepickershowing="false" value="{{ Request::old('start_date') ?: ''}}"  title="" data-original-title="" data-mdpersiandatetimepickerselecteddatetime="{&quot;Year&quot;:1393,&quot;Month&quot;:10,&quot;Day&quot;:9,&quot;Hour&quot;:0,&quot;Minute&quot;:0,&quot;Second&quot;:0}" data-mdpersiandatetimepicker="" class="form-control" id="fromDate1" placeholder="از تاریخ" data-mddatetimepicker="true" data-trigger="click" data-targetselector="#fromDate1" data-groupid="group1" data-fromdate="true" data-enabletimepicker="false" data-placement="right" name="start_date" type="text">
                                        </div>
                                        @if($errors->has('start_date'))
                                            <span class="help-block">{{ $errors->first('start_date')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group{{ $errors->has('finish_date') ? ' has-error': ''}}">
                                        <div class="input-group">
                                            <div data-mdpersiandatetimepickershowing="false" title="" data-original-title="" data-mdpersiandatetimepickerselecteddatetime="{&quot;Year&quot;:1393,&quot;Month&quot;:10,&quot;Day&quot;:10,&quot;Hour&quot;:0,&quot;Minute&quot;:0,&quot;Second&quot;:0}" data-mdpersiandatetimepicker="" style="cursor: pointer;" class="input-group-addon" data-mddatetimepicker="true" data-trigger="click" data-targetselector="#toDate1" data-groupid="group1" data-todate="true" data-placement="left">
                                                <span class="glyphicon glyphicon-calendar"></span>
                                            </div>
                                            <input data-mdpersiandatetimepickershowing="false" name="finish_date"
                                                   value="{{ Request::old('finish_date') ?: ''}}" title="" data-original-title="" data-mdpersiandatetimepickerselecteddatetime="{&quot;Year&quot;:1393,&quot;Month&quot;:10,&quot;Day&quot;:23,&quot;Hour&quot;:0,&quot;Minute&quot;:0,&quot;Second&quot;:0}" data-mdpersiandatetimepicker="" class="form-control" id="toDate1" placeholder="تا تاریخ" data-mddatetimepicker="true" data-trigger="click" data-targetselector="#toDate1" data-groupid="group1" data-todate="true" data-enabletimepicker="false" data-placement="right" type="text">
                                        </div>
                                        @if($errors->has('finish_date'))
                                            <span class="help-block">{{ $errors->first('finish_date')}}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                            <div style="margin-right: 15px;" class="col-md-6">
                                <div class="ibox float-e-margins">
                                    <div class="form-group{{ $errors->has('logo') ? ' has-error': ''}}">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <span class="btn btn-default btn-file"><span class="fileinput-new">بارگذاری</span><span class="fileinput-exists"><span
                                                        style="color: #2aca76;">بارگذاری شد</span></span>
                                            <input type="file" value="{{ Request::old('logo') ?: ''}}" name="logo"></span>

                                        </div>
                                        @if($errors->has('logo'))
                                            <span class="help-block">{{ $errors->first('logo')}}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            </div>
                            <button class="btn btn-primary col-md-4" name="submit" type="submit" id="contact-submit"
                                    data-submit="...Sending">ارسال
                            </button>

                        </form>
                    </div>
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
                            <th class="text-center">لوگو</th>
                            <th class="text-center">دانشگاه</th>
                            <th class="text-center">رشته</th>
                            <th class="text-center">گرایش</th>
                            <th class="text-center">سال و ماه شروع</th>
                            <th class="text-center">سال و ماه پایان</th>
                            <th class="text-center">تغییرات</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($educations as $education)
                            <tr>
                                <td style="vertical-align: middle;" class="text-center">
                                    <img style="width: 50px;height: 50px;" src="{{asset($education->logo)}}"
                                         alt="{{$education->logo}}"></td>
                                <td style="vertical-align: middle;" class="text-center">{{$education->university_name}}</td>
                                <td style="vertical-align: middle" class="text-center">{{$education->field}}</td>
                                <td style="vertical-align: middle" class="text-center">{{$education->tendency}}</td>
                                <td style="vertical-align: middle" class="text-center">{{$education->start_date}}</td>
                                <td style="vertical-align: middle" class="text-center">{{$education->finish_date}}</td>
                                <td style="border: none; width: 20px;">
                                    <div style="margin-top: -20px;">
                                        <button style="margin-top: 16px; width:30px; height: 30px;" data-toggle="modal"
                                                data-href="{{ route('education.edit', $education->id) }}"
                                                data-target="#myModal2" class="btn btn-warning edit">
                                            <i style="margin-right: -3px;" class="fa fa-paint-brush" aria-hidden="true">
                                            </i>
                                    </div>

                                    <form action="{{ route('education.destroy', $education->id) }}"
                                          method="POST">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}

                                        <button style=" margin-top: 3px; width: 30px; height: 30px"
                                                class="btn btn-danger"><i style="margin-right: -3px"
                                                                          class="fa fa-trash"
                                                                          aria-hidden="true"></i>
                                        </button>

                                    </form>
                                </td>
                            </tr>
                        @endforeach

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
        {{--<div class="wrapper wrapper-content animated fadeInRight col-md-8">--}}
            {{--<div class="row">--}}
                {{--<div style="margin-top: 10px;">--}}
                    {{--<div class="ibox float-e-margins">--}}

                        {{--<div class="ibox-content">--}}

                            {{--<div class="table-responsive">--}}
                                {{--<table class="table table-striped table-bordered table-hover dataTables-example">--}}
                                    {{--<thead>--}}
                                    {{--@include('admin.layouts.success')--}}
                                    {{--@include('admin.layouts.errors')--}}
                                    {{--<tr>--}}
                                        {{--<th class="text-center">لوگو</th>--}}
                                        {{--<th class="text-center">دانشگاه</th>--}}
                                        {{--<th class="text-center">رشته</th>--}}
                                        {{--<th class="text-center">گرایش</th>--}}
                                        {{--<th class="text-center">سال و ماه شروع</th>--}}
                                        {{--<th class="text-center">سال و ماه پایان</th>--}}
                                        {{--<th class="text-center">تغییرات</th>--}}
                                    {{--</tr>--}}
                                    {{--</thead>--}}
                                    {{--<tbody>--}}
                                    {{--@foreach($educations as $education)--}}
                                        {{--<tr>--}}
                                            {{--<td style="vertical-align: middle;" class="text-center">--}}
                                                {{--<img style="width: 50px;height: 50px;" src="{{asset($education->logo)}}"--}}
                                                     {{--alt="{{$education->logo}}"></td>--}}
                                            {{--<td style="vertical-align: middle;" class="text-center">{{$education->university_name}}</td>--}}
                                            {{--<td style="vertical-align: middle" class="text-center">{{$education->field}}</td>--}}
                                            {{--<td style="vertical-align: middle" class="text-center">{{$education->tendency}}</td>--}}
                                            {{--<td style="vertical-align: middle" class="text-center">{{$education->start_date}}</td>--}}
                                            {{--<td style="vertical-align: middle" class="text-center">{{$education->finish_date}}</td>--}}
                                            {{--<td style="display: flex;">--}}
                                                {{--<div style="margin-top: -20px;" class="modal-footer col-md-6">--}}
                                                    {{--<button style="margin-top: 16px; width:30px; height: 30px;" data-toggle="modal"--}}
                                                            {{--data-href="{{ route('education.edit', $education->id) }}"--}}
                                                            {{--data-target="#myModal2" class="btn btn-warning edit">--}}
                                                        {{--<i style="margin-right: -3px;" class="fa fa-paint-brush" aria-hidden="true">--}}
                                                        {{--</i>--}}
                                                {{--</div>--}}

                                                {{--<form action="{{ route('education.destroy', $education->id) }}"--}}
                                                      {{--method="POST">--}}
                                                    {{--{{ method_field('DELETE') }}--}}
                                                    {{--{{ csrf_field() }}--}}

                                                        {{--<button style="margin-right: 10px; margin-top: 12px; width: 30px; height: 30px"--}}
                                                                {{--class="btn btn-danger"><i style="margin-right: -3px"--}}
                                                                                          {{--class="fa fa-trash"--}}
                                                                                          {{--aria-hidden="true"></i>--}}
                                                        {{--</button>--}}

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
                <div style="background-color: #fff !important; height:auto;" class="modal-body">
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
