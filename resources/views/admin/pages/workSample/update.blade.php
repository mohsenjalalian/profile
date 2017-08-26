@extends('admin.layouts.master')
@section('content')
    <div class="content-wrapper">
        <div class="container">
            @include('admin.layouts.errors')
            <form id="contact" action="{{route('work-sample.update',$workSample->id)}}"
                  method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                {{ method_field('PUT') }}
                <input type="hidden" id="rmPhoto" name="old_pic" value="{{ $workSample->photo }}">
                <div class="row">
                    <div class="col-md-3">
                <div class="form-group{{ $errors->has('name') ? ' has-error': ''}}">
                    <label>نام</label>
                    <fieldset>
                        <input class="form-control m-b"
                               placeholder="نام"
                               value="{{$workSample->name}}" type="text" name="name" tabindex="1"
                                autofocus>
                    </fieldset>
                    @if($errors->has('name'))
                        <span class="help-block">{{ $errors->first('name')}}</span>
                    @endif
                </div>
                    </div>
                    <div class="col-md-3">
                    <div class="form-group{{ $errors->has('link') ? ' has-error': ''}}">
                        <label>لینک</label>
                        <fieldset>
                            <input class="form-control m-b" placeholder="نام"
                                   value="{{$workSample->link}}" type="text" name="link" tabindex="1"
                                    autofocus>
                        </fieldset>
                        @if($errors->has('link'))
                            <span class="help-block">{{ $errors->first('link')}}</span>
                        @endif
                    </div>
                </div>
                </div>
                <div class="row">
                    <div class="col-md-1">
                    @if(isset($workSample->photo))
                        <img id="btnrm" width="50" height="50" src="{{asset($workSample->photo)}}">
                    @endif
                    </div>
                    <div style="margin-right: 0px;" class="col-md-1">
                    <button style="font-family: webmdesign; margin-right: 0px; margin-top: 0px; background-color: #fff; border: 1px solid #e5e6e7; color: #333;" type="button" id="btnremove" class="btn">پاک کردن</button>
                    </div>
                    <div style="margin-right: 0px;" class="col-md-1">
                        <div style=" margin-top: 0px;" class="ibox float-e-margins">
                            <div class="form-group{{ $errors->has('photo') ? ' has-error': ''}}">
                                    <div style="width: 280px; margin-right: 15px;" class="fileinput fileinput-new input-group" data-provides="fileinput">
                                    <div class="form-control" data-trigger="fileinput">
                                        <p class="fileinput-exists" style="color: #2aca76;">بارگذاری شد</p>
                                    </div>

                                    <span style="border: 1px solid #e5e6e7;" class="input-group-addon btn btn-default btn-file">
                                                    <span class="fileinput-new">بارگذاری</span>
                                                    <span class="fileinput-exists">عوض کردن</span>
                                                    <input type="file" id="rmPhoto" value="{{$workSample->photo}}" name="photo">
                                                </span>
                                        <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">پاک کردن</a>

                                </div>
                                @if($errors->has('photo'))
                                    <span class="help-block">{{ $errors->first('photo')}}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>


                @if(count($categories) > 0)
                    <p style="position:relative; height: 22px; top: 0px; right: 15px;">دسته بندی</p>
                    <div style="margin-top: 0px;"
                         class="form-group{{ $errors->has('category_id[]') ? ' has-error': ''}}">
                        <div style=" position: relative; top: -20px; margin-right: 15px; width: 520px;"
                             class="ibox float-e-margins">
                            <div class="form-group">
                                <label class="font-noraml text-center"></label>
                                <div>
                                    <select data-placeholder="" name="category_id[]"
                                            class="chosen-select" multiple
                                            style="width:350px;" tabindex="4">
                                        @if(!$workSample->category->isEmpty())
                                        @foreach($workSample->category as $cat)
                                            {{--{{dump($workSample->category)}}--}}
                                            <option name="category_id[]"
                                                    value="{{$cat->id}}" selected>{{$cat->name}}</option>
                                            @foreach($categories as $category )
                                                @if($category->id != $cat->id)
                                                    <option name="category_id[]"
                                                            value="{{$category->id}}">{{$category->name}}</option>
                                                @endif
                                            @endforeach
                                        @endforeach
                                        @else
                                            @foreach($categories as $category)
                                                <option name="category_id[]"
                                                        value="{{$category->id}}">{{$category->name}}</option>
                                             @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                        </div>
                        @if($errors->has('category_id[]'))
                            <span class="help-block">{{ $errors->first('category_id[]')}}</span>
                        @endif
                    </div>
                @else
                    <p class="text-center">شما هیچ دسته بندی نساخته اید</p>
                @endif

                @if(count($skills) > 0)
                    <p style="position: relative; top: -20px; right: 15px;">مهارت ها</p>
                    <div class="form-group{{ $errors->has('skill_id[]') ? ' has-error': ''}}">
                        <div style="margin-top: -30px; margin-right: 15px; width: 520px; "
                             class="ibox float-e-margins">
                            <div class="form-group">
                                <label class="font-noraml text-center"></label>
                                <div>
                                    <select data-placeholder="" name="skill_id[]"
                                            class="chosen-select" multiple
                                            style="width:330px;" tabindex="4">
                                        @if(!$workSample->skills->isEmpty())
                                        @foreach($workSample->skills as $val)
                                            <option name="skill_id[]"
                                                    value="{{$val->id}}" selected>{{$val->name}}</option>
                                        @foreach($skills as $skill)
                                        @if($skill->id != $val->id)
                                            <option name="skill_id[]"
                                                    value="{{$skill->id}}">{{$skill->name}}</option>
                                        @endif
                                        @endforeach
                                        @endforeach
                                         @else
                                            @foreach($skills as $skill)
                                                    <option name="skill_id[]"
                                                            value="{{$skill->id}}">{{$skill->name}}</option>

                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                        </div>
                        @if($errors->has('skill_id[]'))
                            <span class="help-block">{{ $errors->first('skill_id[]')}}</span>
                        @endif
                    </div>
                @else
                    <p class="text-center">شما هیچ دسته بندی نساخته اید</p>
                @endif

                    <div style="margin-top: 20px;" class="modal-footer col-md-5">
                        <button  style="font-family: webmdesign;" type="button" class="btn btn-white" data-dismiss="modal">بستن</button>
                        <button style="font-family: webmdesign;" name="submit" type="submit" id="contact-submit" data-submit="...Sending" class="btn btn-primary">اعمال تغییرات</button>
                    </div>
            </form>

        </div>
    </div>

    <script src="js/plugins/chosen/chosen.jquery.js"></script>
    <script src="js/plugins/iCheck/icheck.min.js"></script>
    <script src="js/plugins/footable/footable.all.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.footable').footable();
            $('.footable2').footable();
            $('.chosen-select').chosen({width: "100%"});
        });

        $(document).ready(function(){
            $('#btnremove').click(function(){
                $('#rmPhoto').attr("value", "");
            });
        });
    </script>
    <script>
        $(document).ready(function () {
            $("#btnremove").click(function () {
                $("#btnrm").fadeOut(2000)
            });
        });
    </script>

@endsection

@section('script')
@endsection
