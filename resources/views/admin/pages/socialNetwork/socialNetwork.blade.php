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
                                               value="{{ Request::old('twitter') ?: ''}}" class="form-control"
                                               name="twitter"
                                               tabindex="1" autofocus>
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
                                               value="{{ Request::old('facebook') ?: ''}}" class="form-control"
                                               name="facebook"
                                               tabindex="1" autofocus>
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
                                               value="{{ Request::old('instagram') ?: ''}}" class="form-control"
                                               name="instagram"
                                               tabindex="1" autofocus>
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
                                               value="{{ Request::old('telegram') ?: ''}}" class="form-control"
                                               name="telegram"
                                               tabindex="1" autofocus>
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
                                               value="{{ Request::old('google_plus') ?: ''}}" class="form-control"
                                               name="google_plus"
                                               tabindex="1" autofocus>
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
                                               value="{{ Request::old('linkedin') ?: ''}}" class="form-control"
                                               name="linkedin"
                                               tabindex="1" autofocus>
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
                                               class="form-control" name="skype"
                                               value="{{ Request::old('skype') ?: ''}}"
                                               tabindex="1" autofocus>
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
                                               tabindex="1" autofocus>
                                    </div>
                                    @if($errors->has('site'))
                                        <span class="help-block">{{ $errors->first('site')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <button style="min-width: 200px; font-family: webmdesign;" name="submit" type="submit" id="contact-submit"
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
                                                <i class="fa fa-twitter" aria-hidden="true"></i>
                                            </div>
                                            <input type="text" placeholder="تویتر "
                                                   value="{{$social->twitter}}" class="form-control" name="twitter"
                                                   tabindex="1" autofocus>
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
                                                   tabindex="1" autofocus>
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
                                                   tabindex="1" autofocus>
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
                                                   tabindex="1" autofocus>
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
                                                   value="{{$social->google_plus}}" class="form-control"
                                                   name="google_plus"
                                                   tabindex="1" autofocus>
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
                                                   value="{{$social->linkedin}}" class="form-control" name="linkedin"
                                                   tabindex="1" autofocus>
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
                                                   tabindex="1" autofocus>
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
                                                   tabindex="1" autofocus>
                                            @if($errors->has('site'))
                                                <span class="help-block">{{ $errors->first('site')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-4">
                                    <button style="min-width: 170px; font-family: webmdesign;" name="submit" type="submit" id="contact-submit"
                                            data-submit="...Sending" class="btn btn-primary">اصلاح
                                    </button>
                                </div>

                            </form>
                            <form action="{{ route('social-network.destroy', $social->id) }}"
                                  method="POST" class="frm">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <div class="col-md-4">
                                    <button style="margin-top: 4px; width: 30px; height: 33px; position: relative; right: 10px;"
                                            class="btn btn-danger"><i style="margin-right: -4px; position: relative; top: -1px;" class="fa fa-trash"
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
                                @if($social->twitter)
                                    <a style="color: #222222;" href="{{$social->twitter}}" target="_blank">
                                        <button style="width: 40px !important;" type="button"
                                                class="btn btn-info m-r-sm">
                                            <i style="font-size: 18px; margin-right: -2px; vertical-align: middle;"
                                               class="fa fa-twitter"></i>
                                        </button>
                                        تویتر
                                    </a>
                                @else

                                    <button style="width: 40px !important; border: 1px solid #ddd; background-color:#ddd" type="button" class="btn btn-info m-r-sm">
                                        <i style="font-size: 18px; margin-right: -2px; vertical-align: middle;" class="fa fa-twitter"></i>
                                    </button>
                                    تویتر

                                @endif
                            @endforeach
                        </td>
                        <td>
                            @foreach($socials as $social)
                                @if($social->instagram)
                                    <a style="color: #222222;" href="{{$social->instagram}}" target="_blank">
                                        <button style="width: 40px !important;" type="button"
                                                class="btn btn-warning m-r-sm">

                                            <i style="font-size: 18px; margin-right: -2px; vertical-align: middle;;"
                                               class="fa fa-instagram"></i>

                                        </button>
                                        اینستاگرام
                                    </a>
                                @else

                                    <button style="width: 40px !important; border: 1px solid #ddd; background-color:#ddd" type="button"
                                            class="btn btn-warning m-r-sm">

                                        <i style="font-size: 18px; margin-right: -2px; vertical-align: middle;" class="fa fa-instagram"></i>

                                    </button>
                                    اینستاگرام

                                @endif
                            @endforeach
                        </td>
                        <td>
                            @foreach($socials as $social)
                                @if($social->google_plus)
                                <a style="color: #222222;" href="{{$social->google_plus}}" target="_blank">
                                    <button style="width: 40px !important;" type="button" class="btn btn-danger m-r-sm">
                                        <i style="font-size: 18px; margin-right: -2px; vertical-align: middle"
                                           class="fa fa-google-plus"></i>
                                    </button>

                                    گوگل پلاس
                                </a>
                                    @else
                                        <button style="width: 40px !important; border: 1px solid #ddd; background-color:#ddd" type="button" class="btn btn-danger m-r-sm">
                                            <i style="font-size: 18px; margin-right: -2px; vertical-align: middle"
                                               class="fa fa-google-plus"></i>
                                        </button>

                                        گوگل پلاس

                                @endif
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <td>
                            @foreach($socials as $social)
                                @if($social->skype)
                                <a style="color: #222222;" href="{{$social->skype}}" target="_blank">
                                    <button style="width: 40px !important;" type="button"
                                            class="btn btn-primary m-r-sm">
                                        <i style="font-size: 18px; margin-right: -2px; vertical-align: middle;" class="fa fa-skype"></i>
                                    </button>
                                    اسکایپ
                                </a>
                                    @else
                                        <button style="width: 40px !important; border: 1px solid #ddd; background-color:#ddd" type="button"
                                                class="btn btn-primary m-r-sm">
                                            <i style="font-size: 18px; margin-right: -2px; vertical-align: middle;" class="fa fa-skype"></i>
                                        </button>
                                        اسکایپ
                                @endif
                            @endforeach
                        </td>
                        <td>
                            @foreach($socials as $social)
                                @if($social->facebook)
                                <a style="color: #222222;" href="{{$social->facebook}}" target="_blank">
                                    <button style="width: 40px !important;" type="button"
                                            class="btn btn-success m-r-sm">
                                        <i style="font-size: 18px; vertical-align: middle;" class="fa fa-facebook"></i>
                                    </button>
                                    فیس بوک
                                </a>
                                    @else
                                        <button style="width: 40px !important; border: 1px solid #ddd; background-color:#ddd" type="button"
                                                class="btn btn-success m-r-sm">
                                            <i style="font-size: 18px; margin-right: -2px; vertical-align: middle;" class="fa fa-facebook"></i>
                                        </button>
                                        فیس بوک
                                @endif
                            @endforeach
                        </td>

                        <td>
                            @foreach($socials as $social)
                                @if($social->telegram)
                                <a style="color: #222222;" href="{{$social->telegram}}" target="_blank">
                                    <button style="width: 40px !important;" type="button"
                                            class="btn btn-success m-r-sm">
                                        <i style="font-size: 18px; margin-right: -2px; vertical-align: middle;"
                                           class="fa fa-paper-plane"></i>
                                    </button>
                                    تلگرام
                                </a>
                                    @else
                                        <button style="width: 40px !important; border: 1px solid #ddd; background-color:#ddd" type="button"
                                                class="btn btn-success m-r-sm">
                                            <i style="font-size: 18px; margin-right: -2px; vertical-align: middle;"
                                               class="fa fa-paper-plane"></i>
                                        </button>
                                        تلگرام
                                @endif
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <td>
                            @foreach($socials as $social)
                                @if($social->linkedin)
                                <a style="color: #222222;" href="{{$social->linkedin}}" target="_blank">
                                    <button style="width: 40px !important;" type="button" class="btn btn-info m-r-sm">
                                        <i style="font-size: 18px; margin-right: -2px; vertical-align: middle;" class="fa fa-linkedin"></i>
                                    </button>
                                    لینکدین
                                </a>
                                    @else
                                        <button style="width: 40px !important; border: 1px solid #ddd; background-color:#ddd" type="button" class="btn btn-info m-r-sm">
                                            <i style="font-size: 18px; margin-right: -2px; vertical-align: middle;" class="fa fa-linkedin"></i>
                                        </button>
                                        لینکدین
                                @endif
                            @endforeach
                        </td>
                        <td>
                            @foreach($socials as $social)
                                @if($social->site)
                                <a style="color: #222222;" href="{{$social->site}}" target="_blank">
                                    <button style="width: 40px !important;" type="button" class="btn btn-danger m-r-sm">
                                        <i style="font-size: 18px; margin-right: -2px; vertical-align: middle;" class="fa fa-book"></i>
                                    </button>
                                    سایت
                                </a>
                                    @else
                                        <button style="width: 40px !important; border: 1px solid #ddd; background-color:#ddd" type="button" class="btn btn-danger m-r-sm">
                                            <i style="font-size: 18px; margin-right: -2px; vertical-align: middle;" class="fa fa-book"></i>
                                        </button>
                                        سایت
                                @endif
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
