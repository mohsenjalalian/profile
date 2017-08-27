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
                            <div class="row">
                                <div  class="col-md-5">
                                    <div class="ibox float-e-margins">
                                        <div class="form-group{{ $errors->has('logo') ? ' has-error': ''}}">
                                            <div style="width: 280px; margin-right: 15px;" class="fileinput fileinput-new input-group" data-provides="fileinput">
                                                <div class="form-control" data-trigger="fileinput">
                                                    <p class="fileinput-exists" style="color: #2aca76;">بارگذاری شد</p>
                                                </div>
                                                <span style="border: 1px solid #e5e6e7;" class="input-group-addon btn btn-default btn-file">
                                                    <span class="fileinput-new">بارگذاری</span>
                                                    <span class="fileinput-exists">عوض کردن</span>
                                                    <input type="file" value="{{ Request::old('logo') ?: ''}}" name="logo">
                                                </span>
                                                <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">پاک کردن</a>
                                            </div>
                                            <p style="font-size: 12px; margin-left: -170px;" class="pull-right colorpicker">۱۰۰ * ۱۰۰</p>
                                            @if($errors->has('logo'))
                                                <span class="help-block">{{ $errors->first('logo')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                            <button style="font-family: webmdesign; margin-top: 10px; margin-left: 90px;" class="btn btn-primary col-md-4" name="submit" type="submit" id="contact-submit"
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
                            <th class="text-center hidden-sm hidden-xs">لوگو</th>
                            <th class="text-center">دانشگاه</th>
                            <th class="text-center">رشته</th>
                            <th class="text-center hidden-sm hidden-xs">گرایش</th>
                            <th class="text-center hidden-sm hidden-xs">سال و ماه شروع</th>
                            <th class="text-center hidden-sm hidden-xs">سال و ماه پایان</th>
                            <th class="text-center">تغییرات</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($educations as $education)
                            <tr>
                                <td style="vertical-align: middle;" class="text-center hidden-sm hidden-xs">
                                    @if(empty($education->logo))
                                        <img style="width: 50px;height: 50px;" src="/images/front/uni.png"
                                             alt="تحصیلات">
                                    @else
                                    <img style="width: 50px;height: 50px;" src="{{asset($education->logo)}}"
                                         alt="{{$education->logo}}">
                                    @endif
                                </td>
                                <td style="vertical-align: middle;" class="text-center">{{$education->university_name}}</td>
                                <td style="vertical-align: middle" class="text-center">{{$education->field}}</td>
                                <td style="vertical-align: middle" class="text-center hidden-sm hidden-xs">{{$education->tendency}}</td>
                                <td style="vertical-align: middle" class="text-center hidden-sm hidden-xs">{{$education->start_date}}</td>
                                <td style="vertical-align: middle" class="text-center hidden-sm hidden-xs">{{$education->finish_date}}</td>
                                <td style="border: none; width: 20px;">
                                        <button style="margin-top: 12px; margin-right: 10px; width:30px; height: 30px;" data-toggle="modal" data-target="#myModal4"
                                                data-href="{{ route('education.edit', $education->id) }}"
                                                 class="btn btn-warning edit md-trigger">
                                            <i style="margin-right: -5px; position: relative; top: -2px;" class="fa fa-paint-brush" aria-hidden="true">
                                            </i>
                                        </button>

                                    <form action="{{ route('education.destroy', $education->id) }}"
                                          method="POST" class="frm">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}

                                        <button style=" margin-top: 2px; margin-right: 10px; width: 30px; height: 30px"
                                                class="btn btn-danger"><i style="margin-right: -4px; position: relative; top: -2px;" class="fa fa-trash"
                                                                          aria-hidden="true"></i></button>

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


@section('script')
    <script src="js/cheouts.js"></script>
    <script src="js/time.js"></script>
@endsection
