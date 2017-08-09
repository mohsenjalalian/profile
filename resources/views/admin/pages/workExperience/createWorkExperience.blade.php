@extends('admin.layouts.master')



@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <div class="container">
            <form id="contact" action="{{route('work-experience.store')}}" method="post">
                <h3>فرم سوابق کاری</h3>
                <h4>اطلاعات این فرم در صفحه ایندکس شما نمایش داده میشود</h4>

                <div class="form-group{{ $errors->has('title') ? ' has-error': ''}}">
                    <fieldset>
                        <input placeholder="نام شغل" type="text" name="title"
                               value="{{ Request::old('title') ?: ''}}" tabindex="1" required autofocus>
                    </fieldset>
                    @if($errors->has('title'))
                        <span class="help-block">{{ $errors->first('title')}}</span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('company') ? ' has-error': ''}}">
                    <fieldset>
                        <input placeholder="شرکت" type="text" name="company"
                               value="{{ Request::old('company') ?: ''}}" tabindex="1" required autofocus>
                    </fieldset>
                    @if($errors->has('company'))
                        <span class="help-block">{{ $errors->first('company')}}</span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('city') ? ' has-error': ''}}">
                    <select name="city">
                        <option value="0">استان را انتخاب کنید</option>
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


                {{csrf_field()}}

                <div class="col-xs-6 pull-right">
                    <div class="form-group{{ $errors->has('start_date') ? ' has-error': ''}}">
                        <fieldset>
                            <label class="control-label" for="datepicker1">ماه و سال شروع</label>
                            <input name="start_date" value="{{ Request::old('start_date') ?: ''}}" class="input-small datepicker4" type="text">
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
                            <input name="finish_date" class="input-small datepicker4"
                                   value="{{ Request::old('finish_date') ?: ''}}" type="text">
                        </fieldset>
                        @if($errors->has('finish_date'))
                            <span class="help-block">{{ $errors->first('finish_date')}}</span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('about') ? ' has-error': ''}}">
                    <fieldset>
                        <input placeholder="توضیحات" type="text" name="about"
                               value="{{ Request::old('about') ?: ''}}" tabindex="1" required autofocus>
                    </fieldset>
                    @if($errors->has('about'))
                        <span class="help-block">{{ $errors->first('about')}}</span>
                    @endif
                </div>

                <fieldset>
                    <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">ارسال</button>
                </fieldset>

            </form>

        </div>
    </div>
@endsection
