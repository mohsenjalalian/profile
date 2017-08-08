@extends('admin.layouts.master')



@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <div class="container">
            <form id="contact" action="{{route('education.update',$education->id)}}"
                  method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                {{ method_field('PUT') }}

                <h3>فرم اصلاح تحصیلات</h3>
                <h4>اطلاعات این فرم در صفحه ایندکس شما نمایش داده میشود</h4>

                <input type="hidden" name="old_pic" value="{{ $education->photo }}">

                <div class="form-group{{ $errors->has('university_name') ? ' has-error': ''}}">
                    <fieldset>
                        <input placeholder="نام دانشگاه" type="text" value="{{$education->university_name}}"
                               name="university_name" tabindex="1" required autofocus>
                    </fieldset>
                    @if($errors->has('university_name'))
                        <span class="help-block">{{ $errors->first('university_name')}}</span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('field') ? ' has-error': ''}}">
                    <fieldset>
                        <input placeholder="رشته" type="text" name="field" value="{{$education->field}}" tabindex="1"
                               required autofocus>
                    </fieldset>
                    @if($errors->has('field'))
                        <span class="help-block">{{ $errors->first('field')}}</span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('tendency') ? ' has-error': ''}}">
                    <fieldset>
                        <input placeholder="گرایش" type="text" name="tendency" value="{{$education->tendency}}"
                               tabindex="1" required autofocus>
                    </fieldset>
                    @if($errors->has('tendency'))
                        <span class="help-block">{{ $errors->first('tendency')}}</span>
                    @endif
                </div>


                @if(isset($education->logo))
                    <img width="50" height="50" src="{{asset($education->logo)}}">
                @else
                    <h4>شما هیچ عکسی آپلود نکرده اید</h4>
                @endif


                <div class="form-group{{ $errors->has('logo') ? ' has-error': ''}}">
                    <fieldset>
                        <button id="upfile1">لوگوی دانشگاه</button>
                        <input type="file" id="file1" value="{{$education->logo}}" name="logo" style="display:none"/>
                    </fieldset>
                    @if($errors->has('logo'))
                        <span class="help-block">{{ $errors->first('logo')}}</span>
                    @endif
                </div>


                <div class="col-xs-6 pull-right">
                    <div class="form-group{{ $errors->has('start_date') ? ' has-error': ''}}">
                        <fieldset>
                            <label class="control-label" for="datepicker1">ماه و سال شروع</label>
                            <input name="start_date" class="input-small datepicker4" value="{{$education->start_date}}"
                                   type="text">
                        </fieldset>
                        @if($errors->has('start_date'))
                            <span class="help-block">{{ $errors->first('start_date')}}</span>
                        @endif
                    </div>
                </div>


                <div class="col-xs-6 pull-right">
                    <div class="form-group{{ $errors->has('finish_date') ? ' has-error': ''}}">
                        <fieldset>
                            <label class="control-label" for="datepicker1">ماه و سال پایان</label>
                            <input name="finish_date" value="{{$education->finish_date}}"
                                   class="input-small datepicker4" type="text" >
                        </fieldset>
                        @if($errors->has('finish_date'))
                            <span class="help-block">{{ $errors->first('finish_date')}}</span>
                        @endif
                    </div>
                </div>


                <fieldset>
                    <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">ارسال</button>
                </fieldset>

            </form>

        </div>
    </div>
@endsection
