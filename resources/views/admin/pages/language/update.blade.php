@extends('admin.layouts.master')



@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <div class="container">

            <form id="contact" action="{{route('language.update',$language->id)}}" method="post">
                {{csrf_field()}}
                {{ method_field('PUT') }}

                <h3>فرم اصلاح زبان های خارجی</h3>
                <h4>اطلاعات این فرم در صفحه ایندکس شما نمایش داده میشود</h4>

                <div class="form-group{{ $errors->has('name') ? ' has-error': ''}}">
                    <fieldset>
                        <input placeholder="نام زبان" value="{{$language->name}}" type="text" name="name" tabindex="1"
                               required autofocus>
                    </fieldset>
                    @if($errors->has('name'))
                        <span class="help-block">{{ $errors->first('name')}}</span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('reading') ? ' has-error': ''}}">
                    <fieldset>
                        <p>سطح توانایی خواندن</p>
                        <select name="reading">
                            <option value="{{$language->reading}}">{{$language->reading}}</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </fieldset>
                    @if($errors->has('reading'))
                        <span class="help-block">{{ $errors->first('reading')}}</span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('writing') ? ' has-error': ''}}">
                    <fieldset>
                        <p>سطح توانایی نوشتن</p>
                        <select name="writing">
                            <option value="{{$language->writing}}">{{$language->writing}}</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </fieldset>
                    @if($errors->has('writing'))
                        <span class="help-block">{{ $errors->first('writing')}}</span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('speaking') ? ' has-error': ''}}">
                    <fieldset>
                        <p>سطح توانایی صحبت کردن</p>
                        <select name="speaking">
                            <option value="{{$language->speaking}}">{{$language->speaking}}</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </fieldset>
                    @if($errors->has('speaking'))
                        <span class="help-block">{{ $errors->first('speaking')}}</span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('listening') ? ' has-error': ''}}">
                    <fieldset>
                        <p>سطح توانایی گوش دادن</p>
                        <select name="listening">
                            <option value="{{$language->listening}}">{{$language->listening}}</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </fieldset>
                    @if($errors->has('listening'))
                        <span class="help-block">{{ $errors->first('listening')}}</span>
                    @endif
                </div>

                <fieldset>
                    <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">ارسال</button>
                </fieldset>
            </form>

        </div>
    </div>
@endsection
