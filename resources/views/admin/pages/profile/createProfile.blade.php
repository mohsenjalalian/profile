@extends('admin.layouts.master')



@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <div class="container">
            <form id="contact" action="{{route('storeProfile')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <h3>فرم پروفایل</h3>
                <h4>اطلاعات این فرم در صفحه ایندکس شما نمایش داده میشود</h4>

                <div class="form-group{{ $errors->has('first_name') ? ' has-error': ''}}">
                    <fieldset>
                        <input placeholder="نام" type="text" name="first_name" tabindex="1" required autofocus>
                    </fieldset>
                    @if($errors->has('first_name'))
                        <span class="help-block">{{ $errors->first('first_name')}}</span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('last_name') ? ' has-error': ''}}">
                    <fieldset>
                        <input placeholder="نام خانوادگی" type="text" name="last_name" tabindex="1" required autofocus>
                    </fieldset>
                    @if($errors->has('last_name'))
                        <span class="help-block">{{ $errors->first('last_name')}}</span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('summary') ? ' has-error': ''}}">
                    <fieldset>
                        <input placeholder="یک خط درباره من" type="text" name="summary" tabindex="1" required autofocus>
                    </fieldset>
                    @if($errors->has('summary'))
                        <span class="help-block">{{ $errors->first('summary')}}</span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('about_me') ? ' has-error': ''}}">
                    <fieldset>
                        <textarea name="about_me" rows="8" cols="80" placeholder="درباره من" tabindex="1"
                                  required></textarea>
                    </fieldset>
                    @if($errors->has('about_me'))
                        <span class="help-block">{{ $errors->first('about_me')}}</span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('last_degree') ? ' has-error': ''}}">
                    <fieldset>
                        <input placeholder="آخرین مدرک تحصیلی" type="text" name="last_degree" tabindex="1" required
                               autofocus>
                    </fieldset>
                    @if($errors->has('last_degree'))
                        <span class="help-block">{{ $errors->first('last_degree')}}</span>
                    @endif
                </div>


                <div class="col-xs-4 pull-right">
                    <div class="form-group{{ $errors->has('birth_day') ? ' has-error': ''}}">
                        <fieldset>
                            <label class="control-label" for="datepicker1">تاریخ تولد</label>
                            <input name="birth_day" class="input-small datepicker4" tabindex="1" type="text">
                        </fieldset>
                        @if($errors->has('birth_day'))
                            <span class="help-block">{{ $errors->first('birth_day')}}</span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('marriage') ? ' has-error': ''}}">
                    <fieldset>
                        <p>وضعیت تاهل</p>
                        <input type="radio" name="marriage" value="مجرد" tabindex="2" checked>مجرد<br>
                        <input type="radio" name="marriage" value="متاهل" tabindex="2">متاهل<br>
                    </fieldset>
                    @if($errors->has('marriage'))
                        <span class="help-block">{{ $errors->first('marriage')}}</span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('military') ? ' has-error': ''}}">
                    <fieldset>
                        <p>وضعیت خدمت</p>
                        <input type="radio" name="military" value="تمام شده" tabindex="2" checked>به اتمام رسیده<br>
                        <input type="radio" name="military" value="معاف" tabindex="2">معافیت<br>
                        <input type="radio" name="military" value="معاف پزشکی" tabindex="2">معافیت پزشکی<br>
                    </fieldset>
                    @if($errors->has('military'))
                        <span class="help-block">{{ $errors->first('military')}}</span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('birth_place') ? ' has-error': ''}}">
                    <fieldset>
                        <input placeholder="محل تولد" type="text" name="birth_place" tabindex="1" required autofocus>
                    </fieldset>
                    @if($errors->has('birth_place'))
                        <span class="help-block">{{ $errors->first('birth_place')}}</span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('gender') ? ' has-error': ''}}">
                    <fieldset>
                        <p>جنسیت</p>
                        <input type="radio" name="gender" value="مرد" tabindex="2" checked>مرد<br>
                        <input type="radio" name="gender" value="زن" tabindex="2">زن<br>
                    </fieldset>
                    @if($errors->has('gender'))
                        <span class="help-block">{{ $errors->first('gender')}}</span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('job') ? ' has-error': ''}}">
                    <fieldset>
                        <input placeholder="شغل" type="text" name="job" tabindex="1" required autofocus>
                    </fieldset>
                    @if($errors->has('job'))
                        <span class="help-block">{{ $errors->first('job')}}</span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('photo') ? ' has-error': ''}}">
                    <fieldset>
                        <button class="file1">عکس پروفایل</button>
                        <input type="file" id="file1" name="photo" onchange="readURL1(this)" style="display:none"/>
                        <img id="photo1" src="#" alt="عکس 1"/>
                    </fieldset>
                    @if($errors->has('photo'))
                        <span class="help-block">{{ $errors->first('photo')}}</span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('cover') ? ' has-error': ''}}">
                    <fieldset>
                        <button class="file2">عکس کاور</button>
                        <input type="file" id="file2" name="cover" onchange="readURL2(this)" style="display:none"/>
                        <img id="photo2" src="#" alt="عکس 2"/>
                    </fieldset>
                    @if($errors->has('cover'))
                        <span class="help-block">{{ $errors->first('cover')}}</span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('pdf') ? ' has-error': ''}}">
                    <fieldset>
                        <button class="file3">آپلود PDF</button>
                        <input type="file" id="file3" name="pdf" onchange="readURL3(this)" style="display:none"/>
                        <img id="photo3" src="#" alt="عکس 3"/>
                    </fieldset>
                    @if($errors->has('pdf'))
                        <span class="help-block">{{ $errors->first('pdf')}}</span>
                    @endif
                </div>

                <fieldset>
                    <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">ارسال</button>
                </fieldset>

            </form>
            <br>
            <br>
            <br>
            <br>
        </div>
    </div>
@endsection
