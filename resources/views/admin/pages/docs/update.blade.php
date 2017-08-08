@extends('admin.layouts.master')



@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <div class="container">
            <form id="contact" action="{{route('docs.update',$docs->id)}}"
                  method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                {{ method_field('PUT') }}

                <h3>فرم اصلاح مقالات و کتب</h3>
                <h4>اطلاعات این فرم در صفحه ایندکس شما نمایش داده میشود</h4>
                <input type="hidden" name="old_pic" value="{{ $docs->photo }}">

                <div class="form-group{{ $errors->has('name') ? ' has-error': ''}}">
                    <fieldset>
                        <input placeholder="نام کتاب" type="text" name="name" value="{{$docs->name}}" tabindex="1"
                               required autofocus>
                    </fieldset>
                    @if($errors->has('name'))
                        <span class="help-block">{{ $errors->first('name')}}</span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('published_place') ? ' has-error': ''}}">
                    <fieldset>
                        <input placeholder="شرکت انتشاراتی" type="text" value="{{$docs->published_place}}"
                               name="published_place" tabindex="1" required autofocus>
                    </fieldset>
                    @if($errors->has('published_place'))
                        <span class="help-block">{{ $errors->first('published_place')}}</span>
                    @endif
                </div>

                <div class="col-xs-6 pull-right">
                    <div class="form-group{{ $errors->has('published_year') ? ' has-error': ''}}">
                        <fieldset>
                            <label class="control-label" for="datepicker1">تاریخ انتشار</label>
                            <input name="published_year" value="{{$docs->published_year}}"
                                   class="input-small datepicker4" type="text">
                        </fieldset>
                        @if($errors->has('published_year'))
                            <span class="help-block">{{ $errors->first('published_year')}}</span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('link') ? ' has-error': ''}}">
                    <fieldset>
                        <input placeholder="لینک به مقاله" type="text" value="{{$docs->link}}" name="link" tabindex="1"
                                autofocus>
                    </fieldset>
                    @if($errors->has('link'))
                        <span class="help-block">{{ $errors->first('link')}}</span>
                    @endif
                </div>

                @if(isset($docs->photo))
                    <img width="50" height="50" src="{{asset($docs->photo)}}">
                @else
                    <h4>شما هیچ عکسی آپلود نکرده اید</h4>
                @endif

                <div class="form-group{{ $errors->has('photo') ? ' has-error': ''}}">
                    <fieldset>
                        <button id="upfile1">عکس</button>
                        <input type="file" id="file1" value="{{$docs->photo}}" name="photo" style="display:none"/>
                    </fieldset>
                    @if($errors->has('photo'))
                        <span class="help-block">{{ $errors->first('photo')}}</span>
                    @endif
                </div>

                <fieldset>
                    <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">ارسال</button>
                </fieldset>
            </form>

        </div>
    </div>
@endsection
