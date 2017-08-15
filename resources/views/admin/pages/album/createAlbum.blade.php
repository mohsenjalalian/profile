@extends('admin.layouts.master')



@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <div class="container">

            <form id="contact" action="{{route('storeAlbum')}}" method="post" enctype="multipart/form-data">
                <h3>فرم آلبوم عکس</h3>
                <h4>اطلاعات این فرم در صفحه ایندکس شما نمایش داده میشود</h4>

                {{csrf_field()}}

                <div class="form-group{{ $errors->has('photo') ? ' has-error': ''}}">
                    <fieldset>
                        <button id="upfile1">عکس</button>
                        <input type="file" id="file1"
                               value="{{ Request::old('photo') ?: ''}}" name="photo" style="display:none" >
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
