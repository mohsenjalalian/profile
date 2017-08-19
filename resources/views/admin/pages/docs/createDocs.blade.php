@extends('admin.layouts.master')



@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <div class="container">

            <form id="contact" action="{{route('storeDocs')}}" method="post" enctype="multipart/form-data">
                <h3>فرم مقالات و کتب</h3>
                <h4>اطلاعات این فرم در صفحه ایندکس شما نمایش داده میشود</h4>

                {{csrf_field()}}

                <div class="form-group{{ $errors->has('name') ? ' has-error': ''}}">
                    <fieldset>
                        <input placeholder="نام کتاب" type="text" name="name"
                               value="{{ Request::old('name') ?: ''}}" tabindex="1" required autofocus>
                    </fieldset>
                    @if($errors->has('name'))
                        <span class="help-block">{{ $errors->first('name')}}</span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('published_place') ? ' has-error': ''}}">
                    <fieldset>
                        <input placeholder="شرکت انتشاراتی"
                               value="{{ Request::old('published_place') ?: ''}}" type="text" name="published_place" tabindex="1" required
                               autofocus>
                    </fieldset>
                    @if($errors->has('published_place'))
                        <span class="help-block">{{ $errors->first('published_place')}}</span>
                    @endif
                </div>


                <div class="col-xs-4 pull-right">
                    <div class="form-group{{ $errors->has('published_year') ? ' has-error': ''}}">
                        <fieldset>
                            <label class="control-label" for="datepicker1">تاریخ انتشار</label>
                            <input name="published_year"
                                   value="{{ Request::old('published_year') ?: ''}}" class="input-small datepicker4" type="text">
                        </fieldset>
                        @if($errors->has('published_year'))
                            <span class="help-block">{{ $errors->first('published_year')}}</span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('link') ? ' has-error': ''}}">
                    <fieldset>
                        <input placeholder="لینک به مقاله" type="text"
                               value="{{ Request::old('link') ?: ''}}"   name="link" tabindex="1" required autofocus>
                    </fieldset>
                    @if($errors->has('link'))
                        <span class="help-block">{{ $errors->first('link')}}</span>
                    @endif
                </div>
                <div class="row">
                    <div class="col-lg-12">
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
                                <p style="font-size: 12px; margin-left: 15px;" class="pull-right colorpicker">۱۰۰ * ۱۰۰</p>
                                @if($errors->has('photo'))
                                    <span class="help-block">{{ $errors->first('photo')}}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>


                {{--<div class="form-group{{ $errors->has('photo') ? ' has-error': ''}}">--}}
                    {{--<fieldset>--}}
                        {{--<button id="upfile1">عکس</button>--}}
                        {{--<input type="file" id="file1"--}}
                               {{--value="{{ Request::old('photo') ?: ''}}" name="photo" style="display:none"/>--}}
                    {{--</fieldset>--}}
                    {{--@if($errors->has('photo'))--}}
                        {{--<span class="help-block">{{ $errors->first('photo')}}</span>--}}
                    {{--@endif--}}
                {{--</div>--}}

                <fieldset>
                    <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">ارسال</button>
                </fieldset>

            </form>

        </div>
    </div>
@endsection
