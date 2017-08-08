@extends('admin.layouts.master')



@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <div class="container">
            @include('admin.layouts.errors')
            <form id="contact" action="{{route('work-sample.update',$workSample->id)}}"
                  method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                {{ method_field('PUT') }}
                <input type="hidden" name="old_pic" value="{{ $workSample->photo }}">

                <h3>فرم اصلاح نمونه کار</h3>
                <h4>اطلاعات این فرم در صفحه ایندکس شما نمایش داده میشود</h4>

                <div class="form-group{{ $errors->has('name') ? ' has-error': ''}}">
                    <fieldset>
                        <input placeholder="نام" value="{{$workSample->name}}" type="text" name="name" tabindex="1"
                               required autofocus>
                    </fieldset>
                    @if($errors->has('name'))
                        <span class="help-block">{{ $errors->first('name')}}</span>
                    @endif
                </div>

                @if(count($categories) > 0)
                    <fieldset>
                        <h5>دسته بند ی</h5>
                        @foreach($workSample->category as $cat)
                            دسته بندی انتخاب شده    {{$cat->name}}

                            <br>
                        @endforeach

                        @foreach($categories as $category )
                            @foreach($workSample->category as $cat)
                                @if($cat->name !== $category->name)
                                    <div class="form-group{{ $errors->has('category_id[]') ? ' has-error': ''}}">
                                        <input type="checkbox" name="category_id[]"
                                               value="{{$category->id}}">{{$category->name}}<br>
                                        @if($errors->has('category_id[]'))
                                            <span class="help-block">{{ $errors->first('category_id[]')}}</span>
                                        @endif
                                    </div>
                                @endif
                            @endforeach
                        @endforeach

                    </fieldset>
                @else
                    <p>شما هیچ دسته بندی نساخته اید</p>
                @endif

                @if(count($skills) > 0)
                    <fieldset>
                        <h5>مهارت</h5>
                        @foreach($workSample->skills as $skill)
                            دسته بندی انتخاب شده    {{$skill->name}}
                            <br>
                            @foreach($skills as $skill2 )
                                @if($skill->name !== $skill2->name)
                                    <div class="form-group{{ $errors->has('skill_id[]') ? ' has-error': ''}}">
                                        <input type="checkbox" name="skill_id[]"
                                               value="{{$skill2->id}}">{{$skill2->name}}<br>
                                        @if($errors->has('skill_id[]'))
                                            <span class="help-block">{{ $errors->first('skill_id[]')}}</span>
                                        @endif
                                    </div>
                                @endif
                            @endforeach
                        @endforeach

                    </fieldset>
                @else
                    <p>شما هیچ مهارتی نساخته اید</p>
                @endif


                @if(isset($workSample->photo))
                    <img width="50" height="50" src="{{asset($workSample->photo)}}">
                @else
                    <h4>شما هیچ عکسی آپلود نکرده اید</h4>
                @endif

                <div class="form-group{{ $errors->has('photo') ? ' has-error': ''}}">
                    <fieldset>
                        <button id="upfile1">عکس</button>
                        <input type="file" id="file1" value="{{$workSample->photo}}" name="photo" style="display:none"/>
                    </fieldset>
                    @if($errors->has('photo'))
                        <span class="help-block">{{ $errors->first('photo')}}</span>
                    @endif
                </div>

                <fieldset>
                    <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">ارسال</button>
                </fieldset>
            </form>

        </div>
    </div>
@endsection
