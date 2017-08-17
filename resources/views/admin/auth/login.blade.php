@extends('admin.auth.master')



@section('content')
    <body style="background-color: #f3f3f4 !important;">
    <div class="loginColumns animated fadeInDown">
        <div class="row">

            <div class="col-md-6">
                <h2 class="font-bold">تارنما</h2>

                <p>
                    لورم ایپسوم یک سایت گرافیکی است که در زمینه وب مشغول به کار است لورم ایپسوم برای طراح های گرافیکی طراحی شده
                </p>

                <p>
                    لورم ایپسوم یک سایت گرافیکی است که در زمینه وب مشغول به کار است لورم ایپسوم برای طراح های گرافیکی طراحی شده لورم ایپسوم یک سایت گرافیکی است که در زمینه وب مشغول به کار است لورم ایپسوم برای طراح های گرافیکی طراحی شده
                </p>

                <p>
                    لورم ایپسوم یک سایت گرافیکی است که در زمینه وب مشغول به کار است لورم ایپسوم برای طراح های گرافیکی طراحی شده
                </p>

            </div>
            <div class="col-md-6">
                <div class="ibox-content">
                    <form action="{{route('storeAdmin')}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group has-feedback {{ $errors->has('email') ? ' has-error': ''}}">
                            <div class="form-group">
                                <input name="email" placeholder="ایمیل" class="form-control" required="">
                                @if($errors->has('email'))
                                    <span class="help-block">{{ $errors->first('email')}}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group has-feedback {{ $errors->has('password') ? ' has-error': ''}}">
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="Password" required="">
                                @if($errors->has('password'))
                                    <span class="help-block">{{ $errors->first('password')}}</span>
                                @endif
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary block full-width m-b">ورود</button>

                        <a href="{{route('showLinkRequestForm')}}">
                            <small>رمز عبور خود را فراموش کرده اید؟</small>
                        </a>

                    </form>
                    <p class="m-t">
                    <p id="hiden" style="color: #222; margin-top: 30px;" class="text-center">Design By<a href="http://cotint.ir"
                                                                                                          target="_blank"><span
                                    style="color: #239963; margin-left: 10px;"><strong>CO </strong></span><strong>|</strong><span
                                    style="color:#222;"><strong> tint</strong></span></a></p>
                    </p>
                </div>
            </div>
        </div>
    </div>
    </body>
@endsection


