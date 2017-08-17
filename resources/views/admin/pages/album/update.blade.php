@extends('admin.layouts.master')



@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <div class="container">

            <form id="contact" action="{{route('album.update',$album->id)}}" method="post"
                  enctype="multipart/form-data">
                <h3>فرم اصلاح آلبوم عکس</h3>
                <h4>اطلاعات این فرم در صفحه ایندکس شما نمایش داده میشود</h4>

                {{csrf_field()}}
                {{ method_field('PUT') }}
                <input type="hidden" name="old_pic" value="{{ $album->photo }}">
                <h3>فرم پروفایل</h3>
                <h4>اطلاعات این فرم در صفحه ایندکس شما نمایش داده میشود</h4>
                <fieldset>
                    <img width="50" height="50" src="{{asset('../'.$album->photo)}}">

                    <div class="form-group{{ $errors->has('photo') ? ' has-error': ''}}">
                        <fieldset>
                            <button id="upfile1">عکس پروفایل</button>
                            <input type="file" id="file1" name="photo" style="display:none"
                                   value="{{ old('photo') }}"/>
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
