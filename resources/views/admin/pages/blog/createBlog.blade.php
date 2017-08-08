@extends('admin.layouts.master')



@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <div class="container">

            <form id="contact" action="{{route('blog.store')}}" method="post" enctype="multipart/form-data">
                <h3>فرم ساخت بلاگ</h3>
                <h4>اطلاعات این فرم در صفحه ایندکس شما نمایش داده میشود</h4>

                {{csrf_field()}}

                <div class="form-group{{ $errors->has('title') ? ' has-error': ''}}">
                    <fieldset>
                        <input placeholder="تیتر" type="text" name="title" tabindex="1" required autofocus>
                    </fieldset>
                    @if($errors->has('title'))
                        <span class="help-block">{{ $errors->first('title')}}</span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('description') ? ' has-error': ''}}">
                    <fieldset>
                        <textarea name="description" rows="8" cols="80" placeholder="توضیحات" tabindex="1" required></textarea>
                    </fieldset>
                    @if($errors->has('description'))
                        <span class="help-block">{{ $errors->first('description')}}</span>
                    @endif
                </div>

                <div class="col-xs-4 pull-right">
                    <div class="form-group{{ $errors->has('date') ? ' has-error': ''}}">
                        <fieldset>
                            <label class="control-label" for="datepicker1">تاریخ </label>
                            <input name="date" class="input-small datepicker4" type="text">
                        </fieldset>
                        @if($errors->has('date'))
                            <span class="help-block">{{ $errors->first('date')}}</span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('photo1') ? ' has-error': ''}}">
                    <fieldset>
                        <button class="file1"> عکس 1</button>
                        <input type="file" id="file1" name="photo[]" onchange="readURL1(this)" style="display:none" >
                        <img id="photo1" src="#" alt="عکس 1" />

                    </fieldset>
                    @if($errors->has('photo1'))
                        <span class="help-block">{{ $errors->first('photo1')}}</span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('photo2') ? ' has-error': ''}}">
                    <fieldset>
                        <button class="file2"> عکس 2</button>
                        <input type="file" id="file2" name="photo[]" onchange="readURL2(this)" style="display:none" >
                        <img id="photo2" src="#" alt="عکس 2" />
                    </fieldset>
                    @if($errors->has('photo2'))
                        <span class="help-block">{{ $errors->first('photo2')}}</span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('photo3') ? ' has-error': ''}}">
                    <fieldset>
                        <button  class="file3"> عکس 3</button>
                        <input type="file" id="file3" name="photo[]" onchange="readURL3(this)" style="display:none" >
                        <img id="photo3" src="#" alt="عکس 3" />
                    </fieldset>
                    @if($errors->has('photo3'))
                        <span class="help-block">{{ $errors->first('photo3')}}</span>
                    @endif
                </div>
                <fieldset>
                    <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">ارسال</button>
                </fieldset>

            </form>

        </div>
    </div>
@endsection
