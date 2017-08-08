@extends('admin.auth.master')



@section('content')
    <div class="login-box">
        <div class="login-logo">
            <a href="#"><b>  تارنما</b></a>
            <hr>
            <a href="#"><b>فراموشی رمز </b></a>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
            <p class="login-box-msg">لطفا ایمیل خود را وارد کنید</p>
            <form action="{{route('sendResetLinkEmail')}}" method="post">
                {{csrf_field()}}
                <div class="form-group has-feedback {{ $errors->has('email') ? ' has-error': ''}}">
                    <input type="email" class="form-control" name="email" placeholder="ایمیل">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    @if($errors->has('email'))
                        <span class="help-block">{{ $errors->first('email')}}</span>
                    @endif
                </div>
                <div class="row">
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">ارسال</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- /.login-box-body -->
    </div>
@endsection
