@extends('admin.layouts.master')



@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <div class="container">
            {{--@include('admin.layouts.errors')--}}
            <form id="contact" action="{{route('contact.update',$contact->id)}}"
                  method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                {{ method_field('PUT') }}

                <h3>فرم اصلاح راه های ارتباطی</h3>
                <h4>اطلاعات این فرم در صفحه ایندکس شما نمایش داده میشود</h4>

                <div class="form-group{{ $errors->has('email') ? ' has-error': ''}}">
                    <fieldset>
                        <input placeholder="ایمیل" value="{{$contact->email}}" type="text" name="email" tabindex="1"
                               required autofocus>
                    </fieldset>
                    @if($errors->has('email'))
                        <span class="help-block">{{ $errors->first('email')}}</span>
                    @endif
                </div>


                <div class="form-group{{ $errors->has('phone_number') ? ' has-error': ''}}">
                    <fieldset>
                        <input placeholder="شماره تلفن" value="{{$contact->phone_number}}" type="text"
                               name="phone_number" tabindex="1" required autofocus>
                    </fieldset>
                    @if($errors->has('phone_number'))
                        <span class="help-block">{{ $errors->first('phone_number')}}</span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('mobile') ? ' has-error': ''}}">
                    <fieldset>
                        <input placeholder="تلفن همراه" type="text" name="mobile" value="{{$contact->mobile}}"
                               tabindex="1" required autofocus>
                    </fieldset>
                    @if($errors->has('mobile'))
                        <span class="help-block">{{ $errors->first('mobile')}}</span>
                    @endif
                </div>


                <div class="form-group{{ $errors->has('office_number') ? ' has-error': ''}}">
                    <fieldset>
                        <input placeholder="تلفن دفتر" type="text" name="office_number"
                               value="{{$contact->office_number}}" tabindex="1" required autofocus>
                    </fieldset>
                    @if($errors->has('office_number'))
                        <span class="help-block">{{ $errors->first('office_number')}}</span>
                    @endif
                </div>


                @if(isset($contact->qr_code))
                    <img width="50" height="50" src="{{asset($contact->qr_code)}}">
                @else
                    <h4>شما هیچ عکسی آپلود نکرده اید</h4>
                @endif


                <div class="form-group{{ $errors->has('qr_code') ? ' has-error': ''}}">
                    <fieldset>
                        <button id="upfile1">کد QR</button>
                        <input type="file" id="file1" value="{{$contact->qr_code}}" name="qr_code"
                               style="display:none"/>
                    </fieldset>
                    @if($errors->has('qr_code'))
                        <span class="help-block">{{ $errors->first('qr_code')}}</span>
                    @endif
                </div>


                <fieldset>
                    <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">ارسال</button>
                </fieldset>

            </form>

        </div>
    </div>
@endsection
