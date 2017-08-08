@extends('admin.layouts.master')



@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <div class="container">
            <form id="contact" action="{{route('work-sample.store')}}" method="post" enctype="multipart/form-data">
                <h3>فرم نمونه کار</h3>
                <h4>اطلاعات این فرم در صفحه ایندکس شما نمایش داده میشود</h4>

                {{csrf_field()}}

                <div class="form-group{{ $errors->has('name') ? ' has-error': ''}}">
                <fieldset>
                    <input placeholder="نام" type="text" name="name" tabindex="1" required autofocus>
                </fieldset>
                    @if($errors->has('name'))
                        <span class="help-block">{{ $errors->first('name')}}</span>
                    @endif
                </div>


                @if(count($categories) > 0)
                <fieldset>
                    <p>دسته بند ی</p>
                    @foreach($categories as $category )
                        <div class="form-group{{ $errors->has('category_id[]') ? ' has-error': ''}}">
                    <input type="checkbox" name="category_id[]" value="{{$category->id}}">{{$category->name}}<br>
                            @if($errors->has('category_id[]'))
                                <span class="help-block">{{ $errors->first('category_id[]')}}</span>
                            @endif
                        </div>
                    @endforeach
                </fieldset>
                    @else
                    <p>شما هیچ دسته بندی نساخته اید</p>
                @endif

                @if(count($skills) > 0)
                    <fieldset>
                        <p>مهارت</p>
                        @foreach($skills as $skill )
                            <div class="form-group{{ $errors->has('skill_id[]') ? ' has-error': ''}}">
                            <input type="checkbox" name="skill_id[]" value="{{$skill->id}}">{{$skill->name}}<br>
                                @if($errors->has('skill_id[]'))
                                    <span class="help-block">{{ $errors->first('skill_id[]')}}</span>
                                @endif
                            </div>
                        @endforeach
                    </fieldset>
                @else
                    <p>شما هیچ مهارتی نساخته اید</p>
                @endif

                <div class="form-group{{ $errors->has('photo') ? ' has-error': ''}}">
                <fieldset>
                    <button id="upfile1">عکس  </button>
                    <input type="file" id="file1"  name="photo" style="display:none" />
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
