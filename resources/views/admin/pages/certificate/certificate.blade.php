@extends('admin.layouts.master')



@section('content')
    <div class="content-wrapper clearfix">
        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                <h2>گواهی</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{route('profile')}}">خانه</a>
                    </li>
                    <li class="active">
                        <strong>گواهی</strong>
                    </li>
                </ol>
            </div>
        </div>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">


            <div class="content-wrapper">
                <div style="margin-top: 20px;" class="col-lg-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            افزودن
                        </div>
                        <div class="panel-body">
                            <form id="contact" action="{{route('storeCertificate')}}" method="post"
                                  enctype="multipart/form-data">
                                {{csrf_field()}}

                                <div class="form-group{{ $errors->has('name') ? ' has-error': ''}}">
                                    <div class="col-sm-10 col-md-12">
                                        <input oninvalid="return chek(this)" oninput="return chek2(this)" type="text" placeholder="نام "
                                               value="{{ Request::old('name') ?: ''}}" class="form-control m-b" name="name"
                                               tabindex="1" required autofocus>
                                        @if($errors->has('name'))
                                            <span class="help-block">{{ $errors->first('name')}}</span>
                                        @endif
                                    </div>
                                </div>


                                <div class="form-group{{ $errors->has('info') ? ' has-error': ''}}">
                                    <div class="col-sm-10 col-md-12">
                                        <textarea oninvalid="return chek(this)" oninput="return chek2(this)" style="max-width: 280px; max-height: 70px;" type="text" placeholder="توضیحات" class="form-control m-b" name="info"
                                                  tabindex="1" required autofocus>{{ Request::old('info') ?: ''}}</textarea>
                                        @if($errors->has('info'))
                                            <span class="help-block">{{ $errors->first('info')}}</span>
                                        @endif
                                    </div>
                                </div>


                                <p style="margin-right: 15px;">نوع</p>
                                <div style="margin-right: 15px;" class="form-group{{ $errors->has('type') ? ' has-error': ''}}">
                                    <div class="i-checks"><label> <input type="radio" name="type" value="دوره"

                                                                         tabindex="2" checked> <i></i>دوره </label>
                                    </div>
                                    <div class="i-checks"><label> <input type="radio" name="type" value="جایزه"
                                                                         tabindex="2"> <i></i> جایزه </label></div>
                                    <div class="i-checks"><label> <input type="radio" name="type" value="گواهی"
                                                                         tabindex="2"> <i></i> گواهی </label></div>
                                </div>

                                <div class="row">
                                <div  class="col-md-5">
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
                                            <p style="font-size: 12px; margin-left: -170px;" class="pull-right colorpicker">۵۷۰ * ۵۷۰</p>
                                            @if($errors->has('photo'))
                                                <span class="help-block">{{ $errors->first('photo')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>



                                {{--<div class="row">--}}
                                    {{--<div class="col-md-12">--}}
                                        {{--<div class="ibox float-e-margins">--}}
                                            {{--<div class="col-md-12">--}}
                                                {{--<div class="ibox float-e-margins">--}}
                                                    {{--<div class="form-group{{ $errors->has('photo') ? ' has-error': ''}}">--}}
                                                        {{--<div class="fileinput fileinput-new" data-provides="fileinput">--}}
                                        {{--<span class="btn btn-default btn-file"><span--}}
                                                    {{--class="fileinput-new">بارگذاری</span>--}}
                                            {{--<span class="fileinput-exists"><span--}}
                                                        {{--style="color: #2aca76;">بارگذاری شد</span>--}}
                                            {{--</span>--}}
                                            {{--<input type="file"--}}
                                                   {{--value="{{ Request::old('photo') ?: ''}}" name="photo"></span>--}}

                                                        {{--</div>--}}
                                                        {{--@if($errors->has('photo'))--}}
                                                            {{--<span class="help-block">{{ $errors->first('photo')}}</span>--}}
                                                        {{--@endif--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}

                                        <button style="font-family: webmdesign; margin-top: 70px;" class="btn btn-primary col-md-6" name="submit" type="submit"
                                                id="contact-submit" data-submit="...Sending">ارسال
                                        </button>
                                </div>
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
                                <th class="text-center">عکس</th>
                                <th  class="text-center">نام</th>
                                <th class="text-center">نوع</th>
                                <th class="text-center">توضیحات</th>
                                <th style="width: 30px;" class="text-center">تغییرات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($certificates as $certificate)

                                <tr>
                                    <td style="vertical-align: middle; width: 30px;" class="text-center">
                                        <img style="height: 50px;"
                                             src="{{$certificate->photo}}"
                                             alt="{{$certificate->photo}}"></td>
                                    <td style="vertical-align: middle;"
                                        class="text-center">{{$certificate->name}}</td>
                                    <td style="vertical-align: middle;"
                                        class="text-center">{{$certificate->type}}</td>
                                    <td style="vertical-align: middle;" class="text-center">
                                        {{--<a href="#" title=" {{$certificate->info}}">--}}
                                            <i style="color: #239963; font-size: 22px;" class="fa fa-check"></i>
                                        {{--</a>--}}
                                    </td>
                                    <td style="display: flex; border: none;">
                                        <button style="margin-top: 12px; width:30px; height: 30px;" data-toggle="modal" data-target="#myModal4"
                                                data-href="{{route('certification.edit', $certificate->id)}}"
                                                class="btn btn-warning edit md-trigger">
                                            <i style="margin-right: -5px; position: relative; top: -2px;" class="fa fa-paint-brush" aria-hidden="true">
                                            </i>
                                        </button>

                    </div>
                </div>
            </div>

            <form action="{{ route('certification.destroy', $certificate->id) }}"
                  method="POST">
                {{ method_field('DELETE') }}
                {{ csrf_field() }}

                <button style=" margin-top: 12px; margin-right: 10px; width: 30px; height: 30px"
                        class="btn btn-danger"><i style="margin-right: -4px; position: relative; top: -2px;" class="fa fa-trash"
                                                  aria-hidden="true"></i></button>

            </form>

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
                <div style="background-color: #fff !important; height: 490px;" class="modal-body col-md-12">
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
    <script src="js/plugins/iCheck/icheck.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green'
            });
        });
    </script>
@endsection
