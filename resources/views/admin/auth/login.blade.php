@extends('admin.auth.master')



@section('content')
    <div class="login-box">
        <div class="login-logo">
            <a href="#"><b>تارنما</b></a>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
            <p class="login-box-msg">لطفا ایمیل و رمز عبور خود را وارد کنید</p>
            <form action="{{route('storeAdmin')}}" method="post">
                {{csrf_field()}}
                <div class="form-group has-feedback {{ $errors->has('email') ? ' has-error': ''}}">
                    <input type="email" class="form-control" name="email" placeholder="ایمیل">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    @if($errors->has('email'))
                        <span class="help-block">{{ $errors->first('email')}}</span>
                    @endif
                </div>
                <div class="form-group has-feedback {{ $errors->has('password') ? ' has-error': ''}}">
                    <input type="password" class="form-control" name="password" placeholder="رمز عبور">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    @if($errors->has('password'))
                        <span class="help-block">{{ $errors->first('password')}}</span>
                    @endif
                </div>
                <div class="row">

                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">ورود</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
            <hr>
            <div class="social-auth-links text-center">

                <a href="{{route('showLinkRequestForm')}}" class="btn btn-block btn-social btn-google btn-flat">
رمز عبور خود را فراموش کرده اید؟
                </a>
            </div>
            <!-- /.social-auth-links -->

        </div>
        <!-- /.login-box-body -->
    </div>
@endsection
