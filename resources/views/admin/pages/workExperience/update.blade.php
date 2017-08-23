@extends('admin.layouts.master')



@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <div class="container">
            @include('admin.layouts.errors')
            <form id="contact" action="{{route('work-experience.update',$work->id)}}"
                  method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                {{ method_field('PUT') }}
                <div class="row">
                    <div class="col-md-3" style="margin-top: 3px;">
                <input type="hidden" name="old_pic" value="{{ $work->photo }}">
                <div class="form-group{{ $errors->has('title') ? ' has-error': ''}}">
                    <label>شغل</label>
                    <fieldset>
                        <input class="form-control m-b" placeholder="نام شغل" type="text" value="{{$work->title}}" name="title" tabindex="1"
                               required autofocus>
                    </fieldset>
                    @if($errors->has('title'))
                        <span class="help-block">{{ $errors->first('title')}}</span>
                    @endif
                </div>
                    </div>
                    <div style="margin-top: 3px;" class="col-md-3">
                <div class="form-group{{ $errors->has('company') ? ' has-error': ''}}">
                    <label>شرکت</label>
                    <fieldset>
                        <input class="form-control m-b"  placeholder="شرکت" type="text" name="company" value="{{$work->company}}" tabindex="1"
                               required autofocus>
                    </fieldset>
                    @if($errors->has('company'))
                        <span class="help-block">{{ $errors->first('company')}}</span>
                    @endif
                </div>
                    </div>
                </div>

                {{csrf_field()}}
<div class="row">
                    <div class="form-group">
                        <div class="col-md-3">
                            <label>از تاریخ</label>
                        <div class="form-group{{ $errors->has('start_date') ? ' has-error': ''}}">
                            <div class="input-group">
                                <div data-mdpersiandatetimepickershowing="false" title="" data-original-title="" data-mdpersiandatetimepickerselecteddatetime="{&quot;Year&quot;:1393,&quot;Month&quot;:10,&quot;Day&quot;:10,&quot;Hour&quot;:0,&quot;Minute&quot;:0,&quot;Second&quot;:0}" data-mdpersiandatetimepicker="" style="cursor: pointer;" class="input-group-addon" data-mddatetimepicker="true" data-trigger="click" data-targetselector="#fromDate3" data-groupid="group1" data-fromdate="true" data-enabletimepicker="false" data-placement="left">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </div>
                                <input data-mdpersiandatetimepickershowing="false"
                                       value="{{$work->start_date}}" title="" data-original-title="" data-mdpersiandatetimepickerselecteddatetime="{&quot;Year&quot;:1393,&quot;Month&quot;:10,&quot;Day&quot;:9,&quot;Hour&quot;:0,&quot;Minute&quot;:0,&quot;Second&quot;:0}" data-mdpersiandatetimepicker="" class="form-control" id="fromDate3" placeholder="از تاریخ" data-mddatetimepicker="true" data-trigger="click" data-targetselector="#fromDate1" data-groupid="group1" data-fromdate="true" data-enabletimepicker="false" data-placement="right" name="start_date" type="text">
                                @if($errors->has('start_date'))
                                    <span class="help-block">{{ $errors->first('start_date')}}</span>
                                @endif
                            </div>
                        </div>
                        </div>
                        <div class="col-md-3">
                            <label>تا تاریخ</label>
                            <div class="form-group{{ $errors->has('finish_date') ? ' has-error': ''}}">
                                <div class="input-group">
                                    <div data-mdpersiandatetimepickershowing="false" title="" data-original-title="" data-mdpersiandatetimepickerselecteddatetime="{&quot;Year&quot;:1393,&quot;Month&quot;:10,&quot;Day&quot;:10,&quot;Hour&quot;:0,&quot;Minute&quot;:0,&quot;Second&quot;:0}" data-mdpersiandatetimepicker="" style="cursor: pointer;" class="input-group-addon" data-mddatetimepicker="true" data-trigger="click" data-targetselector="#toDate3" data-groupid="group1" data-todate="true" data-placement="left">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </div>
                                    <input data-mdpersiandatetimepickershowing="false" name="finish_date"
                                           value="{{$work->finish_date}}" title="" data-original-title="" data-mdpersiandatetimepickerselecteddatetime="{&quot;Year&quot;:1393,&quot;Month&quot;:10,&quot;Day&quot;:23,&quot;Hour&quot;:0,&quot;Minute&quot;:0,&quot;Second&quot;:0}" data-mdpersiandatetimepicker="" class="form-control" id="toDate3" placeholder="تا تاریخ" data-mddatetimepicker="true" data-trigger="click" data-targetselector="#toDate3" data-groupid="group1" data-todate="true" data-enabletimepicker="false" data-placement="right" type="text">
                                </div>
                                @if($errors->has('finish_date'))
                                    <span class="help-block">{{ $errors->first('finish_date')}}</span>
                                @endif
                            </div>
                        {{--<div class="form-group{{ $errors->has('finish_date') ? ' has-error': ''}}">--}}
                            {{--<div class="input-group">--}}
                                {{--<div data-mdpersiandatetimepickershowing="false" title="" data-original-title="" data-mdpersiandatetimepickerselecteddatetime="{&quot;Year&quot;:1393,&quot;Month&quot;:10,&quot;Day&quot;:10,&quot;Hour&quot;:0,&quot;Minute&quot;:0,&quot;Second&quot;:0}" data-mdpersiandatetimepicker="" style="cursor: pointer;" class="input-group-addon" data-mddatetimepicker="true" data-trigger="click" data-targetselector="#toDate3" data-groupid="group1" data-todate="true"  data-placement="left">--}}
                                    {{--<span class="glyphicon glyphicon-calendar"></span>--}}
                                {{--</div>--}}
                                {{--<input data-mdpersiandatetimepickershowing="false" name="finish_date"--}}
                                       {{--value="{{$work->finish_date}}" title="" data-original-title="" data-mdpersiandatetimepickerselecteddatetime="{&quot;Year&quot;:1393,&quot;Month&quot;:10,&quot;Day&quot;:23,&quot;Hour&quot;:0,&quot;Minute&quot;:0,&quot;Second&quot;:0}" data-mdpersiandatetimepicker="" class="form-control" id="toDate3" placeholder="تا تاریخ" data-mddatetimepicker="true" data-trigger="click" data-targetselector="#toDate3" data-groupid="group1" data-todate="true" data-enabletimepicker="true" data-placement="right" type="text">--}}
                                {{--@if($errors->has('finish_date'))--}}
                                    {{--<span class="help-block">{{ $errors->first('finish_date')}}</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    </div>
                    </div>
</div>
                    <div class="row">
                        <div style="margin-right: 100px;" class="col-md-4">
                            <label>شهر</label>
                            <div class="form-group{{ $errors->has('city') ? ' has-error': ''}}">
                                <select name="city" class="select2_demo_1 form-control">
                                    <option value="{{$work->city}}">{{$work->city}}</option>
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
                <div class="form-group{{ $errors->has('about') ? ' has-error': ''}}">
                    <label>توضیحات</label>
                    <fieldset>
                        <textarea style="width: 555px; height: 130px; max-height: 130px; max-width: 555px;" placeholder="توضیحات" type="text" name="about" tabindex="1"
                                  required autofocus>{{$work->about}}</textarea>
                    </fieldset>
                    @if($errors->has('about'))
                        <span class="help-block">{{ $errors->first('about')}}</span>
                    @endif
                </div>

                <div style="margin-top: -20px;" class="modal-footer col-md-5">
                    <button  style="font-family: webmdesign;" type="button" class="btn btn-white" data-dismiss="modal">بستن</button>
                    <button style="font-family: webmdesign;" name="submit" type="submit" id="contact-submit" data-submit="...Sending" class="btn btn-primary">اعمال تغییرات</button>
                </div>
            </form>
        </div>
    </div>
    <script src="js/cheouts.js"></script>
    <script src="js/time.js"></script>
@endsection
@section('script')

@stop