@extends('admin.layouts.master')



@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <div class="container">

            <form id="contact" action="{{route('storeCertificate')}}" method="post" enctype="multipart/form-data">
                <h3>فرم گواهی های اخذ شده</h3>
                <h4>اطلاعات این فرم در صفحه ایندکس شما نمایش داده میشود</h4>

                {{csrf_field()}}

                <div class="form-group{{ $errors->has('name') ? ' has-error': ''}}">
                    <fieldset>
                        <input placeholder="نام گواهی" type="text" name="name"
                               value="{{ Request::old('name') ?: ''}}" tabindex="1" required autofocus>
                    </fieldset>
                    @if($errors->has('name'))
                        <span class="help-block">{{ $errors->first('name')}}</span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('info') ? ' has-error': ''}}">
                    <fieldset>
                        <input  placeholder="توضیحات" type="text" name="info"
                               value="{{ Request::old('info') ?: ''}}" tabindex="1" required autofocus>
                    </fieldset>
                    @if($errors->has('info'))
                        <span class="help-block">{{ $errors->first('info')}}</span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('photo') ? ' has-error': ''}}">
                    <fieldset>
                        <button id="upfile1">عکس</button>
                        <input type="file" id="file1"
                               value="{{ Request::old('photo') ?: ''}}" name="photo" style="display:none"/>
                    </fieldset>
                    @if($errors->has('photo'))
                        <span class="help-block">{{ $errors->first('photo')}}</span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('type') ? ' has-error': ''}}">
                    <fieldset>
                        <p>نوع</p>
                        <input type="radio" name="type" value="دوره"  tabindex="2" checked>دوره<br>
                        <input type="radio" name="type" value="جایزه" tabindex="2">جایزه<br>
                        <input type="radio" name="type" value="گواهی" tabindex="2">گواهی<br>
                    </fieldset>
                    @if($errors->has('type'))
                        <span class="help-block">{{ $errors->first('type')}}</span>
                    @endif
                </div>


                <fieldset>
                    <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">ارسال
                    </button>
                </fieldset>

            </form>

        </div>
    </div>
@endsection
