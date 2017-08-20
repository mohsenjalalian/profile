@extends('admin.layouts.master')



@section('content')


    <textarea class="content" name="example"></textarea>
    <div class="content-wrapper clearfix">
        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                <h2>فرم پاسخ</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{route('profile')}}">خانه</a>
                    </li>
                    <li class="active">
                        <strong>فرم پاسخ</strong>
                    </li>
                </ol>
            </div>
        </div>

        <div class="content-wrapper">
        <div class="container">
            <form id="contact" action="{{route('message.store')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div style="margin-top: 40px;" class="col-md-6">
                <div class="form-group{{ $errors->has('email') ? ' has-error': ''}}">
                    <label for="email">ایمیل</label>
                    <fieldset>
                        <input class="form-control m-b"  type="text" name="email" tabindex="1" value="{{$message->email}}" autofocus>
                    </fieldset>
                    @if($errors->has('email'))
                        <span class="help-block">{{ $errors->first('email')}}</span>
                    @endif
                </div>
                </div>
                <div class="btn-toolbar" data-role="editor-toolbar" data-target="#editor">
                    <a class="btn btn-large" data-edit="bold"><i class="icon-bold"></i></a>
                </div>
                <a data-edit="fontName Arial">...</a>
                <input type="text" data-edit="createLink">
                <input type="file" data-edit="insertImage">

                <textarea style="direction: rtl !important;" class="col-md-8"></textarea>

                <div class="form-group{{ $errors->has('answer') ? ' has-error': ''}}">
                    <fieldset >
                        <textarea name="answer"   tabindex="1" required></textarea>
                    </fieldset>
                    @if($errors->has('answer'))
                        <span class="help-block">{{ $errors->first('answer')}}</span>
                    @endif
                </div>
                <fieldset>
                    <button style="font-family: webmdesign;" class="btn btn-primary" name="submit" type="submit" id="contact-submit" data-submit="...Sending">ارسال</button>
                </fieldset>

            </form>

        </div>
    </div>
    </div>
@endsection

@section('script')

    {{--CkEditor--}}
    {{--<script>--}}
        {{--CKEDITOR.replace( 'answer',{--}}
            {{--uiColor: '#2F4050',--}}
            {{--contentsLangDirection : 'rtl',--}}
            {{--width:'95%',--}}
        {{--} );--}}
        {{--//        config.contentsLangDirection = 'rtl',--}}

    {{--</script>--}}
 @endsection