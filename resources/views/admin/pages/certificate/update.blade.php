@extends('admin.layouts.master')



@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <div class="container">

            <form id="contact" action="{{route('certification.update',$certificate->id)}}" method="post"
                  enctype="multipart/form-data">
                {{csrf_field()}}
                {{ method_field('PUT') }}
                <input type="hidden" name="old_pic" value="{{ $certificate->photo }}">
                <h3>فرم اطلاح گواهی</h3>
                <h4>اطلاعات این فرم در صفحه ایندکس شما نمایش داده میشود</h4>

                <div class="form-group{{ $errors->has('name') ? ' has-error': ''}}">
                    <fieldset>
                        <input placeholder="نام گواهی" value="{{$certificate->name}}" type="text" name="name"
                               tabindex="1"
                               required autofocus>
                    </fieldset>
                    @if($errors->has('name'))
                        <span class="help-block">{{ $errors->first('name')}}</span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('info') ? ' has-error': ''}}">
                    <fieldset>
                        <input placeholder="توضیحات" type="text" name="info" value="{{$certificate->info}}" tabindex="1"
                               required autofocus>
                    </fieldset>
                    @if($errors->has('info'))
                        <span class="help-block">{{ $errors->first('info')}}</span>
                    @endif
                </div>

                @if(isset($certificate->photo))
                    <img width="50" height="50" src="{{asset($certificate->photo)}}">
                @else
                    <h4>شما هیچ عکسی آپلود نکرده اید</h4>
                @endif

                <div class="form-group{{ $errors->has('photo') ? ' has-error': ''}}">
                    <fieldset>
                        <button id="upfile1">عکس</button>
                        <input type="file" id="file1" name="photo" style="display:none"
                               value="{{$certificate->photo}}"/>
                    </fieldset>
                    @if($errors->has('photo'))
                        <span class="help-block">{{ $errors->first('photo')}}</span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('type') ? ' has-error': ''}}">
                    <fieldset>
                        <p>نوع</p>
                        <input type="radio" name="type" value="دوره" tabindex="2" checked>دوره<br>
                        <input type="radio" name="type" value="جایزه" tabindex="2">جایزه<br>
                        <input type="radio" name="type" value="گواهی" tabindex="2">گواهی<br>
                    </fieldset>
                    @if($errors->has('type'))
                        <span class="help-block">{{ $errors->first('type')}}</span>
                    @endif
                </div>


                <fieldset>
                    <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">ارسال</button>
                </fieldset>

            </form>

        </div>
    </div>
@endsection
