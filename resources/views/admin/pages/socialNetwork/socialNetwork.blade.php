@extends('admin.layouts.master')



@section('content')


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">


        <!-- Content Header (Page header) -->


        <div class="col-md-6">
            <div class="ibox ">
                <div class="ibox-title"><h5> فرم شبکه اجتماعی</h5></div>
                <div class="ibox-content">

                    <form id="contact" action="{{route('social-network.store')}}" method="post">
                        <h3>فرم شبکه های اجتماعی</h3>
                        <h4>اطلاعات این فرم در صفحه ایندکس شما نمایش داده میشود</h4>
                        {{csrf_field()}}

                        <div class="form-group{{ $errors->has('twitter') ? ' has-error': ''}}">
                            <div class="col-md-6">
                                <div class="input-group m-b">
                                    <div class="input-group-addon">
                                        <i class="fa fa-twitter" aria-hidden="true"></i></div>
                                    <input type="text" placeholder="تویتر " class="form-control" name="twitter"
                                           tabindex="1" required autofocus>
                                    @if($errors->has('twitter'))
                                        <span class="help-block">{{ $errors->first('twitter')}}</span>

                                    @endif
                                </div>
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('facebook') ? ' has-error': ''}}">
                            <div class="col-md-6">
                                <div class="input-group m-b">
                        <span class="input-group-addon">
                            <i class="fa fa-facebook" aria-hidden="true"></i></span>
                                    <input type="text" placeholder="فیس بوک " class="form-control" name="facebook"
                                           tabindex="1" required autofocus>
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
                                    <input type="text" placeholder="اینستاگرام" class="form-control" name="instagram"
                                           tabindex="1" required autofocus>
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
                                    <input placeholder="تلگرام" type="text" class="form-control" name="telegram"
                                           tabindex="1" required autofocus>
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
                                    <input placeholder="گوگل پلاس" type="text" class="form-control" name="google_plus"
                                           tabindex="1" required autofocus>
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
                                    <input placeholder="لینکدین" type="text" class="form-control" name="linkedin"
                                           tabindex="1" required autofocus>
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
                                    <input placeholder="اسکایپ" type="text" class="form-control" name="skype"
                                           tabindex="1" required autofocus>
                                    @if($errors->has('skype'))
                                        <span class="help-block">{{ $errors->first('skype')}}</span>

                                    @endif
                                </div>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <button style="min-width: 200px" name="submit" type="submit" id="contact-submit"
                                    data-submit="...Sending" class="btn btn-primary">ارسال
                            </button>
                        </div>


                    </form>

                    @foreach($socials as $social)


                        <form action="{{ route('social-network.destroy', $social->id) }}"
                              method="POST">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <div class="col-md-4">
                                <button style="min-width: 150px" class="btn btn-danger">پاک کردن</button>
                            </div>

                            <div class="col-md-4">
                                <a href="{{route('social-network.edit',$social->id)}}">
                                    <button style="min-width: 150px" class="btn btn-warning">اصلاح</button>
                                </a>

                            </div>
                        </form>
                    @endforeach
                    <span>.</span>

                </div>
            </div>
        </div>


        <div class="col-md-6">
            <div class="ibox ">
                <div class="ibox-title"><h5> شبکه اجتماعی</h5></div>
                <div class="ibox-content">


                    @foreach($socials as $social)
                        <a href="{{$social->twitter}}">
                            <div class="col-lg-3">
                                <div class="widget style1 navy-bg">
                                    <div class="row">
                                        <div class="col-xs-4">
                                            <i style="font-size: 50px" class="fa fa-twitter" aria-hidden="true"></i>
                                        </div>
                                        <div class="col-xs-8 text-right">
                                            <span> توییتر </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach

                    @foreach($socials as $social)
                        <a href="{{$social->facebook}}">
                            <div class="col-lg-3">
                                <div class="widget style1 navy-bg">
                                    <div class="row">
                                        <div class="col-xs-4">
                                            <i style="font-size: 50px" class="fa fa-twitter" aria-hidden="true"></i>
                                        </div>
                                        <div class="col-xs-8 text-right">
                                            <span> فیسبوک </span>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach

                    @foreach($socials as $social)
                        <a href="{{$social->instagram}}">
                            <div class="col-lg-3">
                                <div class="widget style1 navy-bg">
                                    <div class="row">
                                        <div class="col-xs-4">
                                            <i style="font-size: 50px" class="fa fa-twitter" aria-hidden="true"></i>
                                        </div>
                                        <div class="col-xs-8 text-right">
                                            <span> اینستاگرام </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach


                    @foreach($socials as $social)
                        <a href="{{$social->telegram}}">
                            <div class="col-lg-3">
                                <div class="widget style1 navy-bg">
                                    <div class="row">
                                        <div class="col-xs-4">
                                            <i style="font-size: 50px" class="fa fa-twitter" aria-hidden="true"></i>
                                        </div>
                                        <div class="col-xs-8 text-right">
                                            <span> تلگرام </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach
                    @foreach($socials as $social)
                        <a href="{{$social->google_plus}}">
                            <div class="col-lg-3">
                                <div class="widget style1 navy-bg">
                                    <div class="row">
                                        <div class="col-xs-4">
                                            <i style="font-size: 50px" class="fa fa-twitter" aria-hidden="true"></i>
                                        </div>
                                        <div class="col-xs-8 text-right">
                                            <span> گوگل پلاس </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach

                    @foreach($socials as $social)
                        <a href="{{$social->linkedin}}">
                            <div class="col-lg-3">
                                <div class="widget style1 navy-bg">
                                    <div class="row">
                                        <div class="col-xs-4">
                                            <i style="font-size: 50px" class="fa fa-twitter" aria-hidden="true"></i>
                                        </div>
                                        <div class="col-xs-8 text-right">
                                            <span> لینکدین </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach

                    @foreach($socials as $social)
                        <a href="{{$social->skype}}">
                            <div class="col-lg-3">
                                <div class="widget style1 navy-bg">
                                    <div class="row">
                                        <div class="col-xs-4">
                                            <i style="font-size: 50px" class="fa fa-twitter" aria-hidden="true"></i>
                                        </div>
                                        <div class="col-xs-8 text-right">
                                            <span> اسکایپ </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach


                    <span>.</span>


                </div>
            </div>
        </div>
    </div>


    {{--@include('admin.layouts.success')--}}
    {{--@include('admin.layouts.errors')--}}


    {{--<!-- Main content -->--}}
    {{--<section class="invoice" style="direction: rtl">--}}


    {{--<!-- Table row -->--}}
    {{--<div class="row">--}}
    {{--<div class="col-xs-12 table-responsive">--}}
    {{--<table class="table table-striped">--}}
    {{--<thead>--}}
















    {{--@foreach($socials as $social)--}}
    {{--<a href="{{$social->facebook}}">--}}
    {{--<div class="col-lg-3">--}}
    {{--<div class="widget style1 navy-bg">--}}
    {{--<div class="row">--}}
    {{--<div class="col-xs-4">--}}
    {{--<i style="font-size: 50px" class="fa fa-twitter" aria-hidden="true"></i>--}}
    {{--</div>--}}
    {{--<div class="col-xs-8 text-right">--}}
    {{--<span> فیسبوک </span>--}}


    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</a>--}}
    {{--@endforeach--}}

    {{--@foreach($socials as $social)--}}
    {{--<a href="{{$social->instagram}}">--}}
    {{--<div class="col-lg-3">--}}
    {{--<div class="widget style1 navy-bg">--}}
    {{--<div class="row">--}}
    {{--<div class="col-xs-4">--}}
    {{--<i style="font-size: 50px" class="fa fa-twitter" aria-hidden="true"></i>--}}
    {{--</div>--}}
    {{--<div class="col-xs-8 text-right">--}}
    {{--<span> اینستاگرام </span>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</a>--}}
    {{--@endforeach--}}



    {{--@foreach($socials as $social)--}}
    {{--<a href="{{$social->telegram}}">--}}
    {{--<div class="col-lg-3">--}}
    {{--<div class="widget style1 navy-bg">--}}
    {{--<div class="row">--}}
    {{--<div class="col-xs-4">--}}
    {{--<i style="font-size: 50px" class="fa fa-twitter" aria-hidden="true"></i>--}}
    {{--</div>--}}
    {{--<div class="col-xs-8 text-right">--}}
    {{--<span> تلگرام </span>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</a>--}}
    {{--@endforeach--}}


    {{--@foreach($socials as $social)--}}
    {{--<a href="{{$social->google_plus}}">--}}
    {{--<div class="col-lg-3">--}}
    {{--<div class="widget style1 navy-bg">--}}
    {{--<div class="row">--}}
    {{--<div class="col-xs-4">--}}
    {{--<i style="font-size: 50px" class="fa fa-twitter" aria-hidden="true"></i>--}}
    {{--</div>--}}
    {{--<div class="col-xs-8 text-right">--}}
    {{--<span> گوگل پلاس </span>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</a>--}}
    {{--@endforeach--}}


    {{--@foreach($socials as $social)--}}
    {{--<a href="{{$social->linkedin}}">--}}
    {{--<div class="col-lg-3">--}}
    {{--<div class="widget style1 navy-bg">--}}
    {{--<div class="row">--}}
    {{--<div class="col-xs-4">--}}
    {{--<i style="font-size: 50px" class="fa fa-twitter" aria-hidden="true"></i>--}}
    {{--</div>--}}
    {{--<div class="col-xs-8 text-right">--}}
    {{--<span> لینکدین </span>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</a>--}}
    {{--@endforeach--}}






    {{--</thead>--}}


    {{--@foreach($socials as $social)--}}


    {{--<form action="{{ route('social-network.destroy', $social->id) }}"--}}
    {{--method="POST">--}}
    {{--{{ method_field('DELETE') }}--}}
    {{--{{ csrf_field() }}--}}
    {{--<div class="col-md-4">--}}
    {{--<button style="min-width: 150px" class="btn btn-danger">پاک کردن</button>--}}
    {{--</div>--}}

    {{--<div class="col-md-4">--}}
    {{--<a href="{{route('social-network.edit',$social->id)}}">--}}
    {{--<button style="min-width: 150px" class="btn btn-warning">اصلاح</button>--}}
    {{--</a>--}}

    {{--</div>--}}
    {{--</form>--}}
    {{--@endforeach--}}

    {{--</table>--}}


    {{--</section>--}}

    {{--</div>--}}


    {{--</div>--}}





@endsection
