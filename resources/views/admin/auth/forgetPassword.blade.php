@extends('admin.auth.master')



@section('content')

    <body style="background-color: #f3f3f4 !important;">
    <div class="passwordBox animated fadeInDown">
        <div class="row">

            <div class="col-md-12">
                <div class="ibox-content">

                    <h2 class="font-bold">فراموشی رمز</h2>

                    <p>
                        لطفا ایمیل خود را وارد کنید
                    </p>

                    <div class="row">

                        <div class="col-lg-12">
                            <form action="{{route('storeAdmin')}}" method="post">
                                {{csrf_field()}}
                                <div class="form-group has-feedback {{ $errors->has('email') ? ' has-error': ''}}">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="ادرس ایمیل">
                                        @if($errors->has('email'))
                                            <span class="help-block">{{ $errors->first('email')}}</span>
                                        @endif
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary block full-width m-b">ارسال</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
@endsection
