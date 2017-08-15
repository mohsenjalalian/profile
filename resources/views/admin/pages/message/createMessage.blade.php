    @extends('admin.layouts.master')



@section('content')
    {{--<form>--}}
        {{--<input name="title" type="text" placeholder="Title?" />--}}
        {{--<textarea name="content" data-provide="markdown" rows="10"></textarea>--}}
        {{--<hr/>--}}
        {{--<button type="submit" class="btn">Submit</button>--}}
    {{--</form>--}}
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <div class="container">

            <form id="contact" action="{{route('message.store')}}" method="post" enctype="multipart/form-data">
                <h3>فرم پاسخ</h3>

                {{csrf_field()}}

                <div class="form-group{{ $errors->has('email') ? ' has-error': ''}}">
                    <fieldset>
                        <label for="email">ایمیل</label>
                        <input class="form-control m-b col-md-6"  type="text" name="email" tabindex="1" value="{{$message->email}}" autofocus>
                    </fieldset>
                    @if($errors->has('email'))
                        <span class="help-block">{{ $errors->first('email')}}</span>
                    @endif
                </div>
                {{--<div class="btn-toolbar" data-role="editor-toolbar" data-target="#editor">--}}
                    {{--<a class="btn btn-large" data-edit="bold"><i class="icon-bold"></i></a>--}}
                {{--</div>--}}
                {{--<a data-edit="fontName Arial">...</a>--}}
                {{--<input type="text" data-edit="createLink">--}}
                {{--<input type="file" data-edit="insertImage">--}}

                {{--<textarea style="direction: rtl !important;" class="col-md-8"></textarea>--}}

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

@section('script')

    {{--CkEditor--}}
    <script>
        CKEDITOR.replace( 'answer',{
            uiColor: '#2F4050',
            contentsLangDirection : 'rtl',
            width:'95%',
        } );
        //        config.contentsLangDirection = 'rtl',

    </script>
 @endsection