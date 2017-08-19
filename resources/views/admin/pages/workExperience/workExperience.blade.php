@extends('admin.layouts.master')



@section('content')
    <div class="content-wrapper clearfix">
        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                <h2>سوابق کاری</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{route('profile')}}">خانه</a>
                    </li>
                    <li class="active">
                        <strong>سوابق کاری</strong>
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
                    <form id="contact" action="{{route('work-experience.store')}}" method="post">
                        {{csrf_field()}}


                        <div class="form-group{{ $errors->has('title') ? ' has-error': ''}}">
                            <div class="col-sm-10 col-md-12">
                                <input oninvalid="return chek(this)" oninput="return chek2(this)" type="text"
                                       placeholder="نام شغل"
                                       value="{{ Request::old('title') ?: ''}}" class="form-control m-b" name="title"
                                       tabindex="1" required autofocus>
                                @if($errors->has('name'))
                                    <span class="help-block">{{ $errors->first('name')}}</span>
                                @endif
                            </div>
                        </div>

                        <div class="container col-md-12">
                            <div class="form-group">
                                <div class="form-group{{ $errors->has('start_date') ? ' has-error': ''}}">
                                    <div class="input-group">
                                        <div data-mdpersiandatetimepickershowing="false" title="" data-original-title=""
                                             data-mdpersiandatetimepickerselecteddatetime="{&quot;Year&quot;:1393,&quot;Month&quot;:10,&quot;Day&quot;:10,&quot;Hour&quot;:0,&quot;Minute&quot;:0,&quot;Second&quot;:0}"
                                             data-mdpersiandatetimepicker="" style="cursor: pointer;"
                                             class="input-group-addon" data-mddatetimepicker="true" data-trigger="click"
                                             data-targetselector="#fromDate1" data-groupid="group1" data-fromdate="true"
                                             data-enabletimepicker="false" data-placement="left">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </div>
                                        <input data-mdpersiandatetimepickershowing="false"
                                               value="{{ Request::old('start_date') ?: ''}}" title=""
                                               data-original-title=""
                                               data-mdpersiandatetimepickerselecteddatetime="{&quot;Year&quot;:1393,&quot;Month&quot;:10,&quot;Day&quot;:9,&quot;Hour&quot;:0,&quot;Minute&quot;:0,&quot;Second&quot;:0}"
                                               data-mdpersiandatetimepicker="" class="form-control" id="fromDate1"
                                               placeholder="از تاریخ" data-mddatetimepicker="true" data-trigger="click"
                                               data-targetselector="#fromDate1" data-groupid="group1"
                                               data-fromdate="true" data-enabletimepicker="false" data-placement="right"
                                               name="start_date" type="text">
                                    </div>
                                    @if($errors->has('start_date'))
                                        <span class="help-block">{{ $errors->first('start_date')}}</span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('finish_date') ? ' has-error': ''}}">
                                    <div class="input-group">
                                        <div data-mdpersiandatetimepickershowing="false" title="" data-original-title=""
                                             data-mdpersiandatetimepickerselecteddatetime="{&quot;Year&quot;:1393,&quot;Month&quot;:10,&quot;Day&quot;:10,&quot;Hour&quot;:0,&quot;Minute&quot;:0,&quot;Second&quot;:0}"
                                             data-mdpersiandatetimepicker="" style="cursor: pointer;"
                                             class="input-group-addon" data-mddatetimepicker="true" data-trigger="click"
                                             data-targetselector="#toDate1" data-groupid="group1" data-todate="true"
                                             data-placement="left">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </div>
                                        <input data-mdpersiandatetimepickershowing="false" name="finish_date"
                                               value="{{ Request::old('finish_date') ?: ''}}" title=""
                                               data-original-title=""
                                               data-mdpersiandatetimepickerselecteddatetime="{&quot;Year&quot;:1393,&quot;Month&quot;:10,&quot;Day&quot;:23,&quot;Hour&quot;:0,&quot;Minute&quot;:0,&quot;Second&quot;:0}"
                                               data-mdpersiandatetimepicker="" class="form-control" id="toDate1"
                                               placeholder="تا تاریخ" data-mddatetimepicker="true" data-trigger="click"
                                               data-targetselector="#toDate1" data-groupid="group1" data-todate="true"
                                               data-enabletimepicker="false" data-placement="right" type="text">
                                    </div>
                                    @if($errors->has('finish_date'))
                                        <span class="help-block">{{ $errors->first('finish_date')}}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('company') ? ' has-error': ''}}">
                            <div class="col-sm-10 col-md-12">
                                <input oninvalid="return chek(this)" oninput="return chek2(this)" type="text"
                                       placeholder="شرکت"
                                       value="{{ Request::old('company') ?: ''}}" class="form-control m-b"
                                       name="company" tabindex="1" required autofocus>
                                @if($errors->has('company'))
                                    <span class="help-block">{{ $errors->first('company')}}</span>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group{{ $errors->has('city') ? ' has-error': ''}}">
                                    <select oninvalid="return chek(this)" oninput="return chek2(this)"
                                            style="width: 279px; margin-right: 15px;" name="city"
                                            class="select2_demo_1 form-control">
                                        <option value="{{ Request::old('city') ?: '0'}}">استان را انتخاب کنید</option>
                                        <option value="آذربایجان شرقی">آذربایجان شرقی</option>
                                        <option value="آذربایجان غربی">آذربایجان غربی</option>
                                        <option value="اردبیل">اردبیل</option>
                                        <option value="اصفهان">اصفهان</option>
                                        <option value="البرز">البرز</option>
                                        <option value="ایلام">ایلام</option>
                                        <option value="بوشهر">بوشهر</option>
                                        <option value="تهران">تهران</option>
                                        <option value="چهارمحال بختیاری">چهارمحال بختیاری</option>
                                        <option value="خراسان جنوبی">خراسان جنوبی</option>
                                        <option value="خراسان رضوی">خراسان رضوی</option>
                                        <option value="خراسان شمالی">خراسان شمالی</option>
                                        <option value="خوزستان">خوزستان</option>
                                        <option value="زنجان">زنجان</option>
                                        <option value="سمنان">سمنان</option>
                                        <option value="سیستان و بلوچستان">سیستان و بلوچستان</option>
                                        <option value="فارس">فارس</option>
                                        <option value="قزوین">قزوین</option>
                                        <option value="قم">قم</option>
                                        <option value="کردستان">کردستان</option>
                                        <option value="کرمان">کرمان</option>
                                        <option value="کرمانشاه">کرمانشاه</option>
                                        <option value="کهکیلویه و بویراحمد">کهکیلویه و بویراحمد</option>
                                        <option value="گلستان">گلستان</option>
                                        <option value="گیلان">گیلان</option>
                                        <option value="لرستان">لرستان</option>
                                        <option value="مازندران">مازندران</option>
                                        <option value="مرکزی">مرکزی</option>
                                        <option value="هرمزگان">هرمزگان</option>
                                        <option value="همدان">همدان</option>
                                        <option value="یزد">یزد</option>
                                    </select>
                                    @if($errors->has('city'))
                                        <span class="help-block">{{ $errors->first('city')}}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group{{ $errors->has('about') ? ' has-error': ''}}">
                                <div class="col-sm-10 col-md-12">
                                <textarea oninvalid="return chek(this)" oninput="return chek2(this)"
                                          style="height: 70px; margin-right: 15px; max-height: 70px; max-width: 280px;"
                                          type="text"
                                          value="{{ Request::old('about') ?: ''}}" name="about" placeholder="توضیحات"
                                          tabindex="1" required autofocus
                                          class="form-control m-b"></textarea>
                                    @if($errors->has('about'))
                                        <span class="help-block">{{ $errors->first('about')}}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <fieldset>
                            <button style="font-family: webmdesign;" class="btn btn-primary col-md-4" name="submit"
                                    type="submit" id="contact-submit" data-submit="...Sending">ارسال
                            </button>
                        </fieldset>
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
                            <th class="text-center">موقعیت</th>
                            <th class="text-center">شرکت</th>
                            <th class="text-center">شهر</th>
                            <th class="text-center">سال شروع</th>
                            <th class="text-center">سال پایان</th>
                            <th class="text-center">توضیحات</th>
                            <th style="width: 20px;" class="text-center">تغییرات</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($workExperiences as $workExperience)

                            <tr>
                                <td style="vertical-align: middle;" class="text-center">{{$workExperience->title}}</td>
                                <td style="vertical-align: middle;"
                                    class="text-center">{{$workExperience->company}}</td>
                                <td style="vertical-align: middle;" class="text-center">{{$workExperience->city}}</td>
                                <td style="vertical-align: middle;"
                                    class="text-center">{{$workExperience->start_date}}</td>
                                <td style="vertical-align: middle;"
                                    class="text-center">{{$workExperience->finish_date}}</td>
                                <td style="vertical-align: middle;" class="text-center">
                                    <i style="color: #239963; font-size: 22px;" class="fa fa-check"></i>
                                </td>

                                <td style="border: none; text-align: center; width: 10px;">
                                    <button style="margin-top: 12px; width:30px; height: 30px;" data-toggle="modal"
                                            data-target="#myModal4"
                                            data-href="{{route('work-experience.edit',$workExperience->id)}}"
                                            class="btn btn-warning edit md-trigger">
                                        <i style="margin-right: -5px; position: relative; top: -2px;"
                                           class="fa fa-paint-brush" aria-hidden="true">
                                        </i>
                                    </button>
                                    <form action="{{ route('work-experience.destroy',$workExperience->id) }}"
                                          method="POST" class="frm">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button style="margin-top: 0px;  width: 30px; height: 30px;"
                                                class="btn btn-danger"><i
                                                    style="margin-right: -4px; position: relative; top: -2px;"
                                                    class="fa fa-trash"
                                                    aria-hidden="true"></i></button>
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

    @include('admin.layouts.success')
    @include('admin.layouts.errors')
@endsection


@section('script')
    <script src="js/cheouts.js"></script>
    <script src="js/time.js"></script>
@endsection
