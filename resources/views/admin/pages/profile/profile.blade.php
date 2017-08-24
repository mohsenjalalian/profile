@extends('admin.layouts.master')



@section('content')
    <div class="content-wrapper clearfix">
        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                <h2>پروفایل</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{route('profile')}}">خانه</a>
                    </li>
                    <li class="active">
                        <strong>پروفایل</strong>
                    </li>
                </ol>
            </div>
        </div>

        <div class="content-wrapper">
            <div style="margin-top: 20px;" class="col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        پروفایل
                    </div>

                    @if(count($profiles) == 0)
                        <div class="panel-body">
                            <form id="contact" action="{{route('storeProfile')}}" method="post"
                                  enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="form-group{{ $errors->has('first_name') ? ' has-error': ''}}">
                                    <div class="col-sm-10 col-md-6">
                                        <input type="text" placeholder="نام"
                                               value="{{ Request::old('first_name') ?  : ''}}"
                                               class="form-control m-b" name="first_name"
                                               tabindex="1" required autofocus>
                                        @if($errors->has('first_name'))
                                            <span class="help-block">{{ $errors->first('first_name')}}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('last_name') ? ' has-error': ''}}">
                                    <div class="col-sm-10 col-md-6">
                                        <input type="text" placeholder="نام خانوادگی"
                                               value="{{ Request::old('last_name') ?: ''}}" class="form-control m-b"
                                               name="last_name" tabindex="1" required autofocus>
                                        @if($errors->has('last_name'))
                                            <span class="help-block">{{ $errors->first('last_name')}}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('summary') ? ' has-error': ''}}">
                                    <div class="col-sm-10 col-md-6">
                                        <input type="text" value="{{ Request::old('summary') ?: ''}}"
                                               placeholder="یه خط درباره من ..." class="form-control m-b" name="summary"
                                               tabindex="1" autofocus>
                                        @if($errors->has('summary'))
                                            <span class="help-block">{{ $errors->first('summary')}}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('last_degree') ? ' has-error': ''}}">
                                    <div class="col-sm-10 col-md-6">
                                        <input type="text" value="{{ Request::old('last_degree') ?: ''}}"
                                               placeholder="اخرین مدرک تحصیلی" class="form-control m-b"
                                               name="last_degree"
                                               tabindex="1" required autofocus>
                                        @if($errors->has('last_degree'))
                                            <span class="help-block">{{ $errors->first('last_degree')}}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('birth_place') ? ' has-error': ''}}">
                                    <div class="col-sm-10 col-md-6">
                                        <input type="text" value="{{ Request::old('birth_place') ?: ''}}"
                                               placeholder="محل تولد" class="form-control m-b" name="birth_place"
                                               tabindex="1" required autofocus>
                                        @if($errors->has('birth_place'))
                                            <span class="help-block">{{ $errors->first('birth_place')}}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="container col-md-6">
                                    <div class="form-group">
                                        <div class="form-group{{ $errors->has('birth_day') ? ' has-error': ''}}">
                                            <div class="input-group">
                                                <div data-mdpersiandatetimepickershowing="false" title=""
                                                     data-original-title=""
                                                     data-mdpersiandatetimepickerselecteddatetime="{&quot;Year&quot;:1393,&quot;Month&quot;:10,&quot;Day&quot;:10,&quot;Hour&quot;:0,&quot;Minute&quot;:0,&quot;Second&quot;:0}"
                                                     data-mdpersiandatetimepicker="" style="cursor: pointer;"
                                                     class="input-group-addon" data-mddatetimepicker="true"
                                                     data-trigger="click" data-targetselector="#fromDate1"
                                                     data-groupid="group1" data-fromdate="true"
                                                     data-enabletimepicker="false" data-placement="left">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </div>
                                                <input data-mdpersiandatetimepickershowing="false"
                                                       value="{{ Request::old('birth_day') ?: ''}}"
                                                       placeholder="تاریخ تولد"
                                                       title="" data-original-title=""
                                                       data-mdpersiandatetimepickerselecteddatetime="{&quot;Year&quot;:1393,&quot;Month&quot;:10,&quot;Day&quot;:9,&quot;Hour&quot;:0,&quot;Minute&quot;:0,&quot;Second&quot;:0}"
                                                       data-mdpersiandatetimepicker="" class="form-control"
                                                       id="fromDate1"
                                                       placeholder="از تاریخ" data-mddatetimepicker="true"
                                                       data-trigger="click" data-targetselector="#fromDate1"
                                                       data-groupid="group1" data-fromdate="true"
                                                       data-enabletimepicker="false" data-placement="right"
                                                       name="birth_day"
                                                       type="text">
                                            </div>
                                            @if($errors->has('birth_day'))
                                                <span class="help-block">{{ $errors->first('birth_day')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('job') ? ' has-error': ''}}">
                                    <div class="col-sm-10 col-md-12">
                                        <input type="text" placeholder="شغل" value="{{ Request::old('job') ?: ''}}"
                                               class="form-control m-b" name="job" tabindex="1" required autofocus>
                                        @if($errors->has('job'))
                                            <span class="help-block">{{ $errors->first('job')}}</span>
                                        @endif
                                    </div>
                                </div>

                                <div style="margin-bottom: 0px;" class="col-sm-10 col-md-4">
                                    <p>نوع:</p>
                                    <div class="form-group{{ $errors->has('military') ? ' has-error': ''}}">
                                        <div class="i-checks"><label> <input type="radio" name="military"
                                                                             value="تمام شده"
                                                                             tabindex="1" checked> <i></i>تمام شده
                                            </label>
                                        </div>
                                        <div class="i-checks"><label> <input type="radio" name="military" value="معاف"
                                                                             tabindex="1"> <i></i> معاف </label></div>
                                        <div class="i-checks"><label> <input type="radio" name="military"
                                                                             value="معاف پزشکی"
                                                                             tabindex="1"> <i></i> معافیت پزشکی </label>
                                        </div>
                                        @if($errors->has('military'))
                                            <span class="help-block">{{ $errors->first('military')}}</span>
                                        @endif
                                    </div>
                                </div>
                                <div style="margin-top: 10px" class="col-sm-10 col-md-4">
                                    <p>وضعیت تاهل</p>
                                    <div class="form-group{{ $errors->has('marriage') ? ' has-error': ''}}">
                                        <div class="i-checks"><label> <input type="radio" name="marriage" value="مجرد"
                                                                             tabindex="2" checked> <i></i>مجرد </label>
                                        </div>
                                        <div class="i-checks"><label> <input type="radio" name="marriage" value="متاهل"
                                                                             tabindex="2"> <i></i> متاهل </label></div>
                                        @if($errors->has('marriage'))
                                            <span class="help-block">{{ $errors->first('marriage')}}</span>
                                        @endif
                                    </div>
                                </div>
                                <div style="margin-top: 10px;" class="col-sm-10 col-md-4">
                                    <div class="form-group{{ $errors->has('gender') ? ' has-error': ''}}">
                                        <p>جنسیت</p>
                                        <div class="i-checks"><label> <input type="radio" name="gender" value="مرد"
                                                                             tabindex="2" checked> <i></i>مرد </label>
                                        </div>
                                        <div class="i-checks"><label> <input type="radio" name="gender" value="زن"
                                                                             tabindex="2"> <i></i> زن </label></div>
                                        @if($errors->has('gender'))
                                            <span class="help-block">{{ $errors->first('gender')}}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('about_me') ? ' has-error': ''}}">
                                    <div class="col-sm-10 col-md-12">
                                <textarea style="height: 130px; max-height: 200px; max-width: 470px;" name="about_me"
                                          rows="8" cols="80"
                                          placeholder="درباره من" tabindex="1"
                                          class="form-control m-b">{{ Request::old('about_me') ?: ''}}</textarea>
                                        @if($errors->has('about_me'))
                                            <span class="help-block">{{ $errors->first('about_me')}}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="ibox float-e-margins">
                                        <div class="form-group{{ $errors->has('photo') ? ' has-error': ''}}">
                                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <span class="btn btn-default btn-file"><span
                                                    class="fileinput-new"> بارگذاری عکس</span>
                                           <span class="fileinput-exists"><span class="fileinput-exists"><span
                                                           style="color: #2aca76;">بارگذاری شد</span></span></span>


                                            <input type="file" name="photo" value="{{Request::file('photo')  ?: ''}}"
                                                   onchange="readURL1(this)"></span>
                                                <p style="font-size: 10px;" class="text-center colorpicker">۲۰۰ *
                                                    ۳۷۰</p>
                                            </div>
                                            @if($errors->has('photo'))
                                                <span class="help-block">{{ $errors->first('photo')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="ibox float-e-margins">
                                        <div class="form-group{{ $errors->has('pdf') ? ' has-error': ''}}">
                                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <span class="btn btn-default btn-file"><span
                                                    class="fileinput-new"> بارگذاری pdf</span><span
                                                    class="fileinput-exists"><span class="fileinput-exists"><span
                                                            style="color: #2aca76;">بارگذاری شد</span></span> </span>
                                            <input type="file" value="{{ Request::old('pdf') ?: ''}}" name="pdf"
                                                   onchange="readURL3(this)"></span>
                                            </div>
                                            @if($errors->has('pdf'))
                                                <span class="help-block">{{ $errors->first('pdf')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="ibox float-e-margins">
                                        <div class="form-group{{ $errors->has('cover') ? ' has-error': ''}}">
                                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <span class="btn btn-default btn-file"><span class="fileinput-new"> بارگذاری کاور</span>
                                            <span
                                                    class="fileinput-exists"><span class="fileinput-exists"><span
                                                            style="color: #2aca76;">بارگذاری شد</span></span> </span>
                                            <input value="{{ Request::old('cover') ?: ''}}" type="file" name="cover"
                                                   onchange="readURL2(this)"></span>
                                                <p style="font-size: 10px;" class="-warning text-center">۴۸۰ * ۱۰۰٪</p>
                                            </div>
                                            @if($errors->has('cover'))
                                                <span class="help-block">{{ $errors->first('cover')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <button style="font-family: webmdesign;" class="btn btn-primary col-md-4" name="submit"
                                        type="submit" id="contact-submit"
                                        data-submit="...Sending">
                                    ارسال
                                </button>
                            </form>

                        </div>
                    @endif
                    {{--Update--}}
                    @if(count($profiles) == 1)
                        @foreach($profiles as $profile)
                            <div class="panel-body">
                                <form id="contact" action="{{route('profile.update',$profile->id)}}" method="post"
                                      enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    {{ method_field('PUT') }}

                                    <div class="form-group{{ $errors->has('first_name') ? ' has-error': ''}}">
                                        <div class="col-sm-10 col-md-6">
                                            <input type="text" placeholder="نام" value="{{$profile->first_name}}"
                                                   class="form-control m-b" name="first_name"
                                                   tabindex="1" required autofocus>
                                            @if($errors->has('first_name'))
                                                <span class="help-block">{{ $errors->first('first_name')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group{{ $errors->has('last_name') ? ' has-error': ''}}">
                                        <div class="col-sm-10 col-md-6">
                                            <input type="text" placeholder="نام خانوادگی"
                                                   value="{{$profile->last_name}}" class="form-control m-b"
                                                   name="last_name" tabindex="1" required autofocus>
                                            @if($errors->has('last_name'))
                                                <span class="help-block">{{ $errors->first('last_name')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group{{ $errors->has('summary') ? ' has-error': ''}}">
                                        <div class="col-sm-10 col-md-6">
                                            <input type="text" value="{{$profile->summary}}"
                                                   placeholder="یه خط درباره من ..." class="form-control m-b"
                                                   name="summary"
                                                   tabindex="1" autofocus>
                                            @if($errors->has('company'))
                                                <span class="help-block">{{ $errors->first('company')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group{{ $errors->has('last_degree') ? ' has-error': ''}}">
                                        <div class="col-sm-10 col-md-6">
                                            <input type="text" value="{{$profile->last_degree}}"
                                                   placeholder="اخرین مدرک تحصیلی" class="form-control m-b"
                                                   name="last_degree"
                                                   tabindex="1" required autofocus>
                                            @if($errors->has('last_degree'))
                                                <span class="help-block">{{ $errors->first('last_degree')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group{{ $errors->has('birth_place') ? ' has-error': ''}}">
                                        <div class="col-sm-10 col-md-6">
                                            <input type="text" value="{{$profile->birth_place}}"
                                                   placeholder="محل تولد" class="form-control m-b" name="birth_place"
                                                   tabindex="1" required autofocus>
                                            @if($errors->has('birth_place'))
                                                <span class="help-block">{{ $errors->first('birth_place')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="container col-md-6">
                                        <div class="form-group">
                                            <div class="form-group{{ $errors->has('birth_day') ? ' has-error': ''}}">
                                                <div class="input-group">
                                                    <div data-mdpersiandatetimepickershowing="false" title=""
                                                         data-original-title=""
                                                         data-mdpersiandatetimepickerselecteddatetime="{&quot;Year&quot;:1393,&quot;Month&quot;:10,&quot;Day&quot;:10,&quot;Hour&quot;:0,&quot;Minute&quot;:0,&quot;Second&quot;:0}"
                                                         data-mdpersiandatetimepicker="" style="cursor: pointer;"
                                                         class="input-group-addon" data-mddatetimepicker="true"
                                                         data-trigger="click" data-targetselector="#fromDate1"
                                                         data-groupid="group1" data-fromdate="true"
                                                         data-enabletimepicker="false" data-placement="left">
                                                        <span class="glyphicon glyphicon-calendar"></span>
                                                    </div>
                                                    <input data-mdpersiandatetimepickershowing="false"
                                                           value="{{$profile->birth_day}}" placeholder="تاریخ تولد"
                                                           title="" data-original-title=""
                                                           data-mdpersiandatetimepickerselecteddatetime="{&quot;Year&quot;:1393,&quot;Month&quot;:10,&quot;Day&quot;:9,&quot;Hour&quot;:0,&quot;Minute&quot;:0,&quot;Second&quot;:0}"
                                                           data-mdpersiandatetimepicker="" class="form-control"
                                                           id="fromDate1"
                                                           placeholder="از تاریخ" data-mddatetimepicker="true"
                                                           data-trigger="click" data-targetselector="#fromDate1"
                                                           data-groupid="group1" data-fromdate="true"
                                                           data-enabletimepicker="false" data-placement="right"
                                                           name="birth_day"
                                                           type="text">
                                                </div>
                                                @if($errors->has('birth_day'))
                                                    <span class="help-block">{{ $errors->first('birth_day')}}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('job') ? ' has-error': ''}}">
                                        <div class="col-sm-10 col-md-12">
                                            <input type="text" placeholder="شغل" value="{{$profile->job}}"
                                                   class="form-control m-b" name="job" tabindex="1" required autofocus>
                                            @if($errors->has('job'))
                                                <span class="help-block">{{ $errors->first('job')}}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div style="margin-bottom: 0px;" class="col-sm-10 col-md-4">
                                        <p>نوع:</p>
                                        <div class="form-group{{ $errors->has('military') ? ' has-error': ''}}">
                                            <div class="i-checks"><label> <input type="radio" name="military"
                                                                                 value="تمام شده"
                                                                                 tabindex="1"
                                                                                 @if($profile->military == 'تمام شده') checked @endif> <i></i>تمام شده
                                                </label>
                                            </div>
                                            <div class="i-checks"><label> <input type="radio" name="military"
                                                                                 value="معاف"
                                                                                 tabindex="1"
                                                                                 @if($profile->military == 'معاف') checked @endif> <i></i> معاف </label>
                                            </div>
                                            <div class="i-checks"><label> <input type="radio" name="military"
                                                                                 value="معاف پزشکی"
                                                                                 tabindex="1"
                                                                                 @if($profile->military == 'معاف پزشکی') checked @endif> <i></i> معافیت پزشکی
                                                </label>
                                            </div>
                                            @if($errors->has('military'))
                                                <span class="help-block">{{ $errors->first('military')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div style="margin-top: 10px" class="col-sm-10 col-md-4">
                                        <p>وضعیت تاهل</p>
                                        <div class="form-group{{ $errors->has('marriage') ? ' has-error': ''}}">
                                            <div class="i-checks"><label> <input type="radio" name="marriage"
                                                                                 value="مجرد"
                                                                                 tabindex="2"
                                                                                 @if($profile->marriage == 'مجرد') checked @endif> <i></i>مجرد
                                                </label>
                                            </div>
                                            <div class="i-checks"><label> <input type="radio" name="marriage"
                                                                                 value="متاهل"
                                                                                 tabindex="2"
                                                                                 @if($profile->marriage == 'متاهل') checked @endif> <i></i> متاهل </label>
                                            </div>
                                            @if($errors->has('marriage'))
                                                <span class="help-block">{{ $errors->first('marriage')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div style="margin-top: 10px;" class="col-sm-10 col-md-4">
                                        <div class="form-group{{ $errors->has('gender') ? ' has-error': ''}}">
                                            <p>جنسیت</p>
                                            <div class="i-checks">
                                                <label>
                                                    <input type="radio" name="gender" value="مرد" tabindex="2"
                                                    @if($profile->gender == 'مرد') checked @endif > <i></i>مرد
                                                </label>
                                            </div>
                                            <div class="i-checks"><label> <input type="radio" name="gender" value="زن"
                                                                                 tabindex="2"
                                                                                 @if($profile->gender == 'زن') checked @endif > <i></i> زن </label></div>
                                            @if($errors->has('gender'))
                                                <span class="help-block">{{ $errors->first('gender')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group{{ $errors->has('about_me') ? ' has-error': ''}}">
                                        <div class="col-sm-10 col-md-12">
                                <textarea style="height: 130px; max-width: 470px; max-height: 200px;" name="about_me"
                                          rows="8" cols="80"
                                          placeholder="درباره من" tabindex="1"
                                          class="form-control m-b">{{$profile->about_me}}</textarea>
                                            @if($errors->has('about_me'))
                                                <span class="help-block">{{ $errors->first('about_me')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="ibox float-e-margins">
                                            <div class="form-group{{ $errors->has('photo') ? ' has-error': ''}}">
                                                <img style="width: 50px;height: 50px; position: relative; right: 25px;"
                                                     id="photo1"
                                                     src="{{asset($profile->photo)}}" alt="{{$profile->photo}}">
                                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <span class="btn btn-default btn-file"><span
                                                    class="fileinput-new"> بارگذاری عکس</span>
                                          <span class="fileinput-exists"><span
                                                      style="color: #2aca76;">بارگذاری شد</span></span>
                                            <input type="file" name="photo" value="{{$profile->photo}}"
                                                   onchange="readURL1(this)"></span>

                                                </div>
                                                @if($errors->has('photo'))
                                                    <span class="help-block">{{ $errors->first('photo')}}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="ibox float-e-margins">
                                            <div class="form-group{{ $errors->has('pdf') ? ' has-error': ''}}">
                                                @if(($profile->pdf))
                                                    <i style="font-size: 52px; position: relative; right: 20px;"
                                                       class="fa fa-book"></i>
                                                @else
                                                    <i style="font-size: 52px; position: relative; right: 20px; display: none;"
                                                       class="fa fa-book"></i>
                                                @endif
                                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <span class="btn btn-default btn-file"><span
                                                    class="fileinput-new"> بارگذاری pdf</span><span
                                                    class="fileinput-exists"><span
                                                        style="color: #2aca76;">بارگذاری شد</span></span>
                                            <input type="file" value="{{$profile->pdf}}" name="pdf"
                                                   onchange="readURL3(this)"></span>
                                                </div>
                                                @if($errors->has('pdf'))
                                                    <span class="help-block">{{ $errors->first('pdf')}}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="ibox float-e-margins">
                                            <div class="form-group{{ $errors->has('cover') ? ' has-error': ''}}">
                                                <img style="width: 50px;height: 50px; position: relative; right: 20px;"
                                                     id="photo2"
                                                     src="{{asset($profile->cover)}}" alt="{{$profile->cover}}">
                                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <span class="btn btn-default btn-file"><span class="fileinput-new"> بارگذاری کاور</span><span
                                                    class="fileinput-exists"><span
                                                        style="color: #2aca76;">بارگذاری شد</span></span>
                                            <input value="{{$profile->cover}}" type="file" name="cover"
                                                   onchange="readURL2(this)"></span>
                                                </div>
                                                @if($errors->has('cover'))
                                                    <span class="help-block">{{ $errors->first('cover')}}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <button style="margin-top: 20px; font-family: webmdesign; margin-left: 330px; float: left !important;"
                                            class="btn btn-primary col-md-4" name="submit" type="submit"
                                            id="contact-submit"
                                            data-submit="...Sending">
                                        اصلاح
                                    </button>
                                </form>
                                <form action="{{ route('profile.destroy', $profile->id) }}" method="POST" class="frm">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}

                                    <span class="text-center"><button
                                                style="width: 30px; float: left; height: 33px; margin-top: -34px; margin-left: 290px;"
                                                class="btn btn-danger"><i style="margin-right: -5px" class="fa fa-trash"
                                                                          aria-hidden="true"></i></button></span>

                                </form>

                            </div>
                        @endforeach
                    @endif


                </div>
            </div>
            <div style="margin-top: 20px;" class="col-md-6">
                <div style="min-height: 200px; height: auto;" class="panel panel-primary">
                    <div class="row m-b-lg m-t-lg">
                        <div class="col-md-12">
                            @foreach($profiles as $profile)
                                <div style="height: 200px" class="col-md-12">
                                    @if ($profile->cover)
                                        <img width="100%"
                                             height="100%"
                                             class="m-b-md"
                                             src="{{asset($profile->cover)}}"
                                             alt="{{$profile->cover}}">
                                    @else
                                        <img width="100%"
                                             height="100%"
                                             class="m-b-md"
                                             src="/images/front/background.jpg"
                                             alt="{{$profile->cover}}">
                                    @endif
                                </div>
                                <div style="float: left !important; margin-top: -30px;"
                                     class="profile-image col-md-3 pull-left">
                                    @if ($profile->photo)
                                        <img class="img-circle circle-border m-b-md" src="{{asset($profile->photo)}}"
                                             alt="{{$profile->photo}}">
                                    @else
                                        <img class="img-circle circle-border m-b-md" src="/image/profile.png"
                                             alt="admin">
                                    @endif
                                </div>
                                <div class="profile-info">
                                    <div>
                                        <div>
                                            <h2 style="margin-right: 20px !important; position: relative; top: 10px;">
                                                <span>{{$profile->first_name}}</span>
                                                <span>{{$profile->last_name}}</span>
                                            </h2>
                                            <p style="margin-right: 23px; margin-top: 20px;">{{$profile->job}}</p>

                                            <p style="margin-right: 20px !important; margin-top: 10px !important;"
                                               class="no-margins">{{$profile->summary}}</p>

                                            <p style="margin-right: 20px !important; margin-top: 10px !important; width: 120%;"
                                               class="no-margins">
                                                {{$profile->about_me}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="col-md-6">
                            <table style="margin-right: 30px; margin-top:15px;" class="table small m-b-xs">
                                <tbody>
                                <tr>
                                    <td>
                                        <span>{{$profile->gender}}</span>
                                    </td>
                                    <td>
                                        <span>{{$profile->military}}</span>
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        <span>{{$profile->marriage}}</span>
                                    </td>
                                    <td>
                                        <span>{{$profile->last_degree}}</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span>{{$profile->birth_place}}</span>
                                    </td>
                                    <td>
                                        <span>{{$profile->birth_day}}</span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="col-md-6">

                            <td class="pull-left">
                                @if ($profile->pdf)
                                    <a href="{{asset($profile->pdf)}}" download class="disabled"><i
                                                style="color: #222; float: left; padding-left: 45px; margin-top: 30px; font-size: 20px;"
                                                class="fa fa-book" aria-hidden="true">

                                            <span style="font-family: webmdesign !important; font-size: 14px;">دانلود رزومه</span>
                                        </i>
                                    </a>
                                @else
                                    <a href="{{asset($profile->pdf)}}" download class="disabled">
                                    </a>
                                @endif
                            </td>

                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach


    @include('admin.layouts.success')
    @include('admin.layouts.errors')
@endsection
@section('script')
    <script src="js/cheouts.js"></script>
    <script src="js/time.js"></script>
    <script src="js/plugins/iCheck/icheck.min.js"></script>
    <script>
        $('.i-checks').iCheck({
            checkboxClass: 'icheckbox_square-green',
            radioClass: 'iradio_square-green',
        });
    </script>
@endsection

