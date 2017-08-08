@extends('admin.layouts.master')



@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <div class="container">
            @include('admin.layouts.errors')
            <form id="contact" action="{{route('blog.update',$blog->id)}}" method="post"
                  enctype="multipart/form-data">

                <h3>فرم اصلاح بلاگ</h3>
                <h4>اطلاعات این فرم در صفحه ایندکس شما نمایش داده میشود</h4>

                {{csrf_field()}}
                {{ method_field('PUT') }}
                <fieldset>

                    <div class="form-group{{ $errors->has('title') ? ' has-error': ''}}">
                        <fieldset>
                            <input placeholder="تیتر" type="text" value="{{$blog->title}}" name="title" tabindex="1" required autofocus>
                        </fieldset>
                        @if($errors->has('title'))
                            <span class="help-block">{{ $errors->first('title')}}</span>
                        @endif
                    </div>


                    <div class="form-group{{ $errors->has('description') ? ' has-error': ''}}">
                        <fieldset>
                            <textarea name="description" rows="8" cols="80" placeholder="توضیحات" tabindex="1" required>{{$blog->description}}</textarea>
                        </fieldset>
                        @if($errors->has('description'))
                            <span class="help-block">{{ $errors->first('description')}}</span>
                        @endif
                    </div>

                    <div class="col-xs-4 pull-right">
                        <div class="form-group{{ $errors->has('date') ? ' has-error': ''}}">
                            <fieldset>
                                <label class="control-label" for="datepicker1">تاریخ </label>
                                <input name="date" value="{{$blog->date}}" class="input-small datepicker4" type="text">
                            </fieldset>
                            @if($errors->has('date'))
                                <span class="help-block">{{ $errors->first('date')}}</span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('photo') ? ' has-error': ''}}">
                        <fieldset>
                            <button class="file1"> عکس 1</button>
                            @if(!empty($blog->album[0]->photo))
                                <input type="file" id="file1" name="photo[{{$blog->album[0]->id}}]" value="{{$blog->album[0]->photo}}" onchange="readURL1(this)" style="display:none" >
                                <img style="width: 50px;height: 50px" id="photo1" src="{{asset($blog->album[0]->photo)}}" alt="{{$blog->album[0]->photo}}">
                            @else
                                <input type="file" id="file1" name="photo[]" onchange="readURL1(this)" style="display:none" >
                                <img id="photo1" src="#" alt="عکس 1" />
                            @endif
                        </fieldset>
                        @if($errors->has('photo'))
                            <span class="help-block">{{ $errors->first('photo')}}</span>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('photo') ? ' has-error': ''}}">
                        <fieldset>
                            <button class="file2"> عکس 2</button>
                            @if(!empty($blog->album[1]->photo))
                                <input type="file" id="file2" name="photo[{{$blog->album[1]->id}}]" value="{{$blog->album[1]->photo}}" onchange="readURL2(this)" style="display:none" >
                                <img src="{{asset($blog->album[1]->photo)}}" id="photo2" style="width: 50px;height: 50px" alt="{{$blog->album[1]->photo}}">
                            @else
                                <input type="file" id="file2" name="photo[]"  onchange="readURL2(this)" style="display:none" >
                                <img id="photo2" src="#" alt="عکس 2" />
                            @endif
                        </fieldset>
                        @if($errors->has('photo'))
                            <span class="help-block">{{ $errors->first('photo')}}</span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('photo') ? ' has-error': ''}}">
                        <fieldset>
                            <button  class="file3"> عکس 3</button>
                            @if(!empty($blog->album[2]->photo))
                                <input type="file" id="file3" name="photo[{{$blog->album[2]->id}}]" value="{{$blog->album[2]->photo}}" onchange="readURL3(this)" style="display:none" >
                                <img src="{{asset($blog->album[2]->photo)}}" id="photo3" style="width: 50px;height: 50px" alt="{{$blog->album[2]->photo}}">
                            @else
                                <input type="file" id="file3" name="photo[]" onchange="readURL3(this)" style="display:none" >
                                <img id="photo3" src="#" alt="عکس 3" />
                            @endif
                        </fieldset>
                        @if($errors->has('photo'))
                            <span class="help-block">{{ $errors->first('photo')}}</span>
                        @endif
                    </div>
                    <input type="hidden" name="old_pic[]" value="{{ $blog->album }}">

                    <fieldset>
                        <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">ارسال</button>
                    </fieldset>

            </form>

        </div>
    </div>
@endsection
