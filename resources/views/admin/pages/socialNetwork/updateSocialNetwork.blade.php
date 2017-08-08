@extends('admin.layouts.master')



@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <div class="container">
            <form id="contact" action="{{route('social-network.update',$social->id)}}"
                  method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                {{ method_field('PUT') }}

                <h3>فرم شبکه های اجتماعی</h3>
                <h4>اطلاعات این فرم در صفحه ایندکس شما نمایش داده میشود</h4>

                <div class="form-group{{ $errors->has('twitter') ? ' has-error': ''}}">
                    <fieldset>
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                        <input placeholder="توییتر" value="{{$social->twitter}}" type="text" name="twitter" tabindex="1"
                               required autofocus>
                    </fieldset>
                    @if($errors->has('twitter'))
                        <span class="help-block">{{ $errors->first('twitter')}}</span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('facebook') ? ' has-error': ''}}">
                    <fieldset>
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                        <input placeholder="فیس بوک " value="{{$social->facebook}}" type="text" name="facebook"
                               tabindex="1" required autofocus>
                    </fieldset>
                    @if($errors->has('facebook'))
                        <span class="help-block">{{ $errors->first('facebook')}}</span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('instagram') ? ' has-error': ''}}">
                    <fieldset>
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                        <input placeholder="اینستاگرام" value="{{$social->instagram}}" type="text" name="instagram"
                               tabindex="1" required autofocus>
                    </fieldset>
                    @if($errors->has('instagram'))
                        <span class="help-block">{{ $errors->first('instagram')}}</span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('telegram') ? ' has-error': ''}}">
                    <fieldset>
                        <i class="fa fa-telegram" aria-hidden="true"></i>
                        <input placeholder="تلگرام" value="{{$social->telegram}}" type="text" name="telegram"
                               tabindex="1" required autofocus>
                    </fieldset>
                    @if($errors->has('telegram'))
                        <span class="help-block">{{ $errors->first('telegram')}}</span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('google_plus') ? ' has-error': ''}}">
                    <fieldset>
                        <i class="fa fa-google-plus" aria-hidden="true"></i>
                        <input placeholder="گوگل پلاس" value="{{$social->google_plus}}" type="text" name="google_plus"
                               tabindex="1" required autofocus>
                    </fieldset>
                    @if($errors->has('google_plus'))
                        <span class="help-block">{{ $errors->first('google_plus')}}</span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('linkedin') ? ' has-error': ''}}">
                    <fieldset>
                        <i class="fa fa-linkedin-square" aria-hidden="true"></i>
                        <input placeholder="لینکدین" value="{{$social->linkedin}}" type="text" name="linkedin"
                               tabindex="1" required autofocus>
                    </fieldset>
                    @if($errors->has('linkedin'))
                        <span class="help-block">{{ $errors->first('linkedin')}}</span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('skype') ? ' has-error': ''}}">
                    <fieldset>
                        <i class="fa fa-skype" aria-hidden="true"></i>
                        <input placeholder="اسکایپ" value="{{$social->skype}}" type="text" name="skype" tabindex="1"
                               required autofocus>
                    </fieldset>
                    @if($errors->has('skype'))
                        <span class="help-block">{{ $errors->first('skype')}}</span>
                    @endif
                </div>


                <fieldset>
                    <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">ارسال</button>
                </fieldset>

            </form>

        </div>
    </div>
@endsection
