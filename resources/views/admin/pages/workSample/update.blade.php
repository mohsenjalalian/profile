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
                <div class="form-group{{ $errors->has('name') ? ' has-error': ''}}">
                    <label>نام</label>
                    <fieldset>
                        <input class="form-control m-b col-md-4" placeholder="نام" value="{{$workSample->name}}" type="text" name="name" tabindex="1"
                               required autofocus>
                    </fieldset>
                    @if($errors->has('name'))
                        <span class="help-block">{{ $errors->first('name')}}</span>
                    @endif
                </div>


                @if(count($categories) > 0)
                    <fieldset>
                        <h5>دسته بند ی</h5>
                        @foreach($categories as $category )
                            <div class="col-md-1">
                            <div class="form-group{{ $errors->has('category_id[]') ? ' has-error': ''}}">
                                        <input type="checkbox"
                                               @if(in_array($category->id, array_keys($ws)))
                                                       checked="checked"
                                               @endif
                                               name="category_id[]"
                                               value="{{$category->id}}">{{$category->name}}<br>
                                    @if($errors->has('category_id[]'))
                                            <span class="help-block">{{ $errors->first('category_id[]')}}</span>
                                        @endif
                                    </div>
                            </div>
                        @endforeach

                    </fieldset>
                @else
                    <p>شما هیچ دسته بندی نساخته اید</p>
                @endif

                @if(count($skills) > 0)
                    <fieldset>
                        <h5>مهارت</h5>
                        @foreach($skills as $skill )
                            <div class="col-md-1">
                        <div class="form-group{{ $errors->has('skill_id[]') ? ' has-error': ''}}">
                            <input type="checkbox"
                                   @if(in_array($skill->id, array_keys($sw)))
                                   checked="checked"
                                   @endif
                                   name="skill_id[]"
                                   value="{{$skill->id}}">{{$skill->name}}<br>
                            @if($errors->has('skill_id[]'))
                                <span class="help-block">{{ $errors->first('skill_id[]')}}</span>
                            @endif
                        </div>
                            </div>
                        @endforeach
                @else
                    <p>شما هیچ مهارتی نساخته اید</p>
                @endif





                        <div class="col-md-12">
                            <div class="form-group{{ $errors->has('photo') ? ' has-error': ''}}">
                            <div class="ibox float-e-margins">
                                <div class="form-group{{ $errors->has('photo') ? ' has-error': ''}}">
                                    @if(isset($workSample->photo))
                                        <img width="50" height="50" src="{{asset($workSample->photo)}}">
                                    @else
                                        <h4>شما هیچ عکسی آپلود نکرده اید</h4>
                                    @endif
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <span class="btn btn-default btn-file"><span
                                                    class="fileinput-new">بارگذاری عکس جدید</span><span class="fileinput-exists"><span
                                                        style="color: #2aca76;">بارگذاری شد</span></span>
                                            <input type="file" value="{{$workSample->photo}}" name="photo"></span>
                                    </div>
                                    @if($errors->has('photo'))
                                        <span class="help-block">{{ $errors->first('photo')}}</span>
                                    @endif
                                </div>
                            </div>
                            </div>
                        </div>
                    </fieldset>



                    <div style="margin-top: 20px;" class="modal-footer col-md-5">
                        <button  style="font-family: webmdesign;" type="button" class="btn btn-white" data-dismiss="modal">بستن</button>
                        <button style="font-family: webmdesign;" name="submit" type="submit" id="contact-submit" data-submit="...Sending" class="btn btn-primary">اعمال تغییرات</button>
                    </div>
            </form>

        </div>
    </div>
@endsection
