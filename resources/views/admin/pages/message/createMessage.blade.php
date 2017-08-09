@extends('admin.layouts.master')



@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <div class="container">

            <form id="contact" action="{{route('message.store')}}" method="post" enctype="multipart/form-data">
                <h3>فرم پاسخ</h3>

                {{csrf_field()}}

                <div class="form-group{{ $errors->has('email') ? ' has-error': ''}}">
                    <fieldset>
                        <label for="email">ایمیل</label>
                        <input  type="text" name="email" tabindex="1" value="{{$message->email}}" autofocus>
                    </fieldset>
                    @if($errors->has('email'))
                        <span class="help-block">{{ $errors->first('email')}}</span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('answer') ? ' has-error': ''}}">
                    <fieldset >
                        <textarea name="answer"   tabindex="1" required></textarea>
                    </fieldset>
                    @if($errors->has('answer'))
                        <span class="help-block">{{ $errors->first('answer')}}</span>
                    @endif
                </div>

                <fieldset>
                    <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">ارسال</button>
                </fieldset>

            </form>

        </div>
    </div>
@endsection
