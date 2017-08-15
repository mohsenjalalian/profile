@extends('admin.layouts.master')



@section('content')

    <div class="content-wrapper clearfix">
        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                <h2>شبکه اجتماعی</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{route('profile')}}">خانه</a>
                    </li>
                    <li class="active">
                        <strong>شبکه اجتماعی</strong>
                    </li>
                </ol>
            </div>
        </div>
        <!-- Content Wrapper. Contains page content -->

        <div style="margin-top: 20px;" class="col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    افزودن
                </div>
                @if(count($socials) == 0)
                <div class="panel-body">
                    <form id="contact" action="{{route('social-network.store')}}" method="post">
                        {{csrf_field()}}

                        <div class="form-group{{ $errors->has('twitter') ? ' has-error': ''}}">
                            <div class="col-md-6">
                                <div class="input-group m-b">
                                    <div class="input-group-addon">
                                        <i class="fa fa-twitter" aria-hidden="true"></i></div>
                                    <input type="text" placeholder="تویتر "
                                           value="{{ Request::old('twitter') ?: ''}}" class="form-control" name="twitter"
                                           tabindex="1"  autofocus>
                                </div>
                                @if($errors->has('twitter'))
                                    <span class="help-block">{{ $errors->first('twitter')}}</span>

                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('facebook') ? ' has-error': ''}}">
                            <div class="col-md-6">
                                <div class="input-group m-b">
                        <span class="input-group-addon">
                            <i class="fa fa-facebook" aria-hidden="true"></i></span>
                                    <input type="text" placeholder="فیس بوک "
                                           value="{{ Request::old('facebook') ?: ''}}" class="form-control" name="facebook"
                                           tabindex="1"  autofocus>
                                </div>
                                @if($errors->has('facebook'))
                                    <span class="help-block">{{ $errors->first('facebook')}}</span>

                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('instagram') ? ' has-error': ''}}">
                            <div class="col-md-6">
                                <div class="input-group m-b">
                        <span class="input-group-addon">
                            <i class="fa fa-instagram" aria-hidden="true"></i></span>
                                    <input type="text" placeholder="اینستاگرام"
                                           value="{{ Request::old('instagram') ?: ''}}" class="form-control" name="instagram"
                                           tabindex="1"  autofocus>
                                </div>
                                @if($errors->has('instagram'))
                                    <span class="help-block">{{ $errors->first('instagram')}}</span>

                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('telegram') ? ' has-error': ''}}">
                            <div class="col-md-6">
                                <div class="input-group m-b">
                        <span class="input-group-addon">
                            <i class="fa fa-paper-plane" aria-hidden="true"></i></span>
                                    <input placeholder="تلگرام" type="text"
                                           value="{{ Request::old('telegram') ?: ''}}" class="form-control" name="telegram"
                                           tabindex="1"  autofocus>
                                </div>
                                @if($errors->has('telegram'))
                                    <span class="help-block">{{ $errors->first('telegram')}}</span>

                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('google_plus') ? ' has-error': ''}}">
                            <div class="col-md-6">
                                <div class="input-group m-b">
                        <span class="input-group-addon">
                            <i class="fa fa-google-plus" aria-hidden="true"></i></span>
                                    <input placeholder="گوگل پلاس" type="text"
                                           value="{{ Request::old('google_plus') ?: ''}}" class="form-control" name="google_plus"
                                           tabindex="1"  autofocus>
                                </div>
                                @if($errors->has('google_plus'))
                                    <span class="help-block">{{ $errors->first('google_plus')}}</span>

                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('linkedin') ? ' has-error': ''}}">
                            <div class="col-md-6">
                                <div class="input-group m-b">
                        <span class="input-group-addon">
                            <i class="fa fa-linkedin-square" aria-hidden="true"></i></span>
                                    <input placeholder="لینکدین" type="text"
                                           value="{{ Request::old('linkedin') ?: ''}}" class="form-control" name="linkedin"
                                           tabindex="1"  autofocus>
                                </div>
                                @if($errors->has('linkedin'))
                                    <span class="help-block">{{ $errors->first('linkedin')}}</span>

                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('skype') ? ' has-error': ''}}">
                            <div class="col-md-6">
                                <div class="input-group m-b">
                        <span class="input-group-addon">
                            <i class="fa fa-skype" aria-hidden="true"></i></span>
                                    <input placeholder="اسکایپ" type="text"
                                           class="form-control" name="skype" value="{{ Request::old('skype') ?: ''}}"
                                           tabindex="1"  autofocus>
                                </div>
                                @if($errors->has('skype'))
                                    <span class="help-block">{{ $errors->first('skype')}}</span>

                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('site') ? ' has-error': ''}}">
                            <div class="col-md-6">
                                <div class="input-group m-b">
                        <span class="input-group-addon">
                            <i class="fa fa-book" aria-hidden="true"></i></span>
                                    <input placeholder="سایت" type="text"
                                           value="{{ Request::old('site') ?: ''}}" class="form-control" name="site"
                                           tabindex="1"  autofocus>
                                </div>
                                @if($errors->has('site'))
                                    <span class="help-block">{{ $errors->first('site')}}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <button style="min-width: 200px" name="submit" type="submit" id="contact-submit"
                                    data-submit="...Sending" class="btn btn-primary">ارسال
                            </button>
                        </div>
                    </form>
                </div>
                @endif


                @if(count($socials) == 1)
                    @foreach($socials as $social)
                <div class="panel-body">
                    <form id="contact" action="{{route('social-network.update',$social->id)}}"
                          method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        {{ method_field('PUT') }}

                        <div class="form-group{{ $errors->has('twitter') ? ' has-error': ''}}">
                            <div class="col-md-6">
                                <div class="input-group m-b">
                                    <div class="input-group-addon">
                                        <i class="fa fa-twitter" aria-hidden="true"></i></div>
                                    <input type="text" placeholder="تویتر "
                                           value="{{$social->twitter}}" class="form-control" name="twitter"
                                           tabindex="1"  autofocus>
                                </div>
                                @if($errors->has('twitter'))
                                    <span class="help-block">{{ $errors->first('twitter')}}</span>

                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('facebook') ? ' has-error': ''}}">
                            <div class="col-md-6">
                                <div class="input-group m-b">
                        <span class="input-group-addon">
                            <i class="fa fa-facebook" aria-hidden="true"></i></span>
                                    <input type="text" placeholder="فیس بوک "
                                           value="{{$social->facebook}}" class="form-control" name="facebook"
                                           tabindex="1"  autofocus>
                                    @if($errors->has('facebook'))
                                        <span class="help-block">{{ $errors->first('facebook')}}</span>

                                    @endif
                                </div>
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('instagram') ? ' has-error': ''}}">
                            <div class="col-md-6">
                                <div class="input-group m-b">
                        <span class="input-group-addon">
                            <i class="fa fa-instagram" aria-hidden="true"></i></span>
                                    <input type="text" placeholder="اینستاگرام"
                                           value="{{$social->instagram}}" class="form-control" name="instagram"
                                           tabindex="1"  autofocus>
                                    @if($errors->has('instagram'))
                                        <span class="help-block">{{ $errors->first('instagram')}}</span>

                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('telegram') ? ' has-error': ''}}">
                            <div class="col-md-6">
                                <div class="input-group m-b">
                        <span class="input-group-addon">
                            <i class="fa fa-paper-plane" aria-hidden="true"></i></span>
                                    <input placeholder="تلگرام" type="text"
                                           value="{{$social->telegram}}" class="form-control" name="telegram"
                                           tabindex="1"  autofocus>
                                    @if($errors->has('telegram'))
                                        <span class="help-block">{{ $errors->first('telegram')}}</span>

                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('google_plus') ? ' has-error': ''}}">
                            <div class="col-md-6">
                                <div class="input-group m-b">
                        <span class="input-group-addon">
                            <i class="fa fa-google-plus" aria-hidden="true"></i></span>
                                    <input placeholder="گوگل پلاس" type="text"
                                           value="{{$social->google_plus}}" class="form-control" name="google_plus"
                                           tabindex="1"  autofocus>
                                    @if($errors->has('google_plus'))
                                        <span class="help-block">{{ $errors->first('google_plus')}}</span>

                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('linkedin') ? ' has-error': ''}}">
                            <div class="col-md-6">
                                <div class="input-group m-b">
                        <span class="input-group-addon">
                            <i class="fa fa-linkedin-square" aria-hidden="true"></i></span>
                                    <input placeholder="لینکدین" type="text"
                                           value="{{$social->linkedin}}"  class="form-control" name="linkedin"
                                           tabindex="1"  autofocus>
                                    @if($errors->has('linkedin'))
                                        <span class="help-block">{{ $errors->first('linkedin')}}</span>

                                    @endif
                                </div>
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('skype') ? ' has-error': ''}}">
                            <div class="col-md-6">
                                <div class="input-group m-b">
                        <span class="input-group-addon">
                            <i class="fa fa-skype" aria-hidden="true"></i></span>
                                    <input placeholder="اسکایپ" type="text"
                                           class="form-control" name="skype" value="{{$social->skype}}"
                                           tabindex="1"  autofocus>
                                    @if($errors->has('skype'))
                                        <span class="help-block">{{ $errors->first('skype')}}</span>

                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('site') ? ' has-error': ''}}">
                            <div class="col-md-6">
                                <div class="input-group m-b">
                        <span class="input-group-addon">
                            <i class="fa fa-book" aria-hidden="true"></i></span>
                                    <input placeholder="سایت" type="text"
                                           value="{{$social->site}}" class="form-control" name="site"
                                           tabindex="1"  autofocus>
                                    @if($errors->has('site'))
                                        <span class="help-block">{{ $errors->first('site')}}</span>
                                    @endif
                                </div>
                            </div>
                        </div>


                            <div class="col-md-6">
                                <button style="min-width: 200px" name="submit" type="submit" id="contact-submit"
                                        data-submit="...Sending" class="btn btn-primary">اصلاح
                                </button>
                            </div>

                    </form>
                    <form action="{{ route('social-network.destroy', $social->id) }}"
                          method="POST">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <div class="col-md-4">
                            <button style="margin-top: 2px; width: 30px; height: 30px; position: relative; right: -30px;"
                                    class="btn btn-danger"><i style="margin-right: -3px;" class="fa fa-trash"
                                                              aria-hidden="true"></i></button>
                        </div>
                    </form>
                </div>
                    @endforeach
                @endif
            </div>
        </div>




        <div style="margin-top: 50px;" class="col-lg-6">
            <div>
                <table class="table">
                    <tbody>
                    <tr>
                        <td>
                            @foreach($socials as $social)
                                <a style="color: #222222;" href="{{$social->google_plus}}">
                                    <button style="width: 40px !important;" type="button" class="btn btn-danger m-r-sm">
                                        <i style="font-size: 18px; vertical-align: middle" class="fa fa-google-plus"></i>
                                    </button>

                                    گوگل پلاس
                                </a>
                            @endforeach
                        </td>
                        <td>
                            @foreach($socials as $social)
                                <a style="color: #222222;" href="{{$social->skype}}">
                                    <button style="width: 40px !important;" type="button" class="btn btn-primary m-r-sm">
                                        <i style="font-size: 18px; vertical-align: middle;" class="fa fa-skype"></i>
                                    </button>
                                    اسکایپ
                                </a>
                            @endforeach
                        </td>
                        <td>
                            @foreach($socials as $social)
                                <a style="color: #222222;" href="{{$social->linkedin}}">
                                    <button style="width: 40px !important;" type="button" class="btn btn-info m-r-sm">
                                        <i style="font-size: 18px; vertical-align: middle;" class="fa fa-linkedin"></i>
                                    </button>
                                    لینکدین
                                </a>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <td>
                            @foreach($socials as $social)
                                <a style="color: #222222;" href="{{$social->twitter}}">
                                    <button style="width: 40px !important;" type="button" class="btn btn-info m-r-sm">
                                        <i style="font-size: 18px; vertical-align: middle;" class="fa fa-twitter"></i>
                                    </button>
                                    تویتر
                                </a>
                            @endforeach
                        </td>
                        <td>
                            @foreach($socials as $social)
                                <a style="color: #222222;" href="{{$social->facebook}}">
                                    <button style="width: 40px !important;" type="button" class="btn btn-success m-r-sm">
                                        <i style="font-size: 18px; vertical-align: middle;" class="fa fa-facebook"></i>
                                    </button>
                                    فیس بوک
                                </a>
                            @endforeach
                        </td>
                        <td>
                            @foreach($socials as $social)
                                <a style="color: #222222;" href="{{$social->telegram}}">
                                    <button style="width: 40px !important;" type="button" class="btn btn-success m-r-sm">
                                        <i style="font-size: 18px; vertical-align: middle;" class="fa fa-paper-plane"></i>
                                    </button>
                                    تلگرام
                                </a>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <td>
                            @foreach($socials as $social)
                                <a style="color: #222222;" href="{{$social->instagram}}">
                                    <button style="width: 40px !important;" type="button" class="btn btn-warning m-r-sm">

                                        <i style="font-size: 18px; vertical-align: middle;" class="fa fa-instagram"></i>

                                    </button>
                                    اینستاگرام
                                </a>
                            @endforeach
                        </td>
                        <td>
                            @foreach($socials as $social)
                                <a style="color: #222222;" href="{{$social->site}}">
                                    <button style="width: 40px !important;" type="button" class="btn btn-danger m-r-sm">
                                        <i style="font-size: 18px; vertical-align: middle;" class="fa fa-book"></i>
                                    </button>
                                    سایت
                                </a>
                            @endforeach
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div>


            </div>
        </div>
    </div>

    @include('admin.layouts.success')
    @include('admin.layouts.errors')

@endsection
