@extends('admin.layouts.master')



@section('content')
    <div class="content-wrapper">

        <div class="container">

            <form id="contact" action="{{route('certification.update',$certificate->id)}}" method="post"
                  enctype="multipart/form-data">
                {{csrf_field()}}
                {{ method_field('PUT') }}
                <input type="hidden" id="rmPhoto" name="old_pic" value="{{ $certificate->photo }}">
                <div class="row">
                    <div style="margin-top: 0px; margin-right: 10px;" class="col-md-3">
                <div class="form-group{{ $errors->has('name') ? ' has-error': ''}}">
                    <label>گواهی</label>
                    <fieldset>
                        <input class="form-control m-b " placeholder="نام گواهی" value="{{$certificate->name}}" type="text" name="name"
                               tabindex="1"
                               required autofocus>
                    </fieldset>
                    @if($errors->has('name'))
                        <span class="help-block">{{ $errors->first('name')}}</span>
                    @endif
                </div>
                    </div>
                    <div class="col-md-2">
                        <p>نوع</p>
                        <div class="form-group{{ $errors->has('type') ? ' has-error': ''}}">
                            <div class="i-checks col-md-4"><label>
                                    <input type="radio" name="type" value="دوره"

                                           tabindex="2"
                                           @if($certificate->type == 'دوره') checked @endif> <i></i>دوره </label>
                            </div>

                            <div class="i-checks col-md-4"><label>
                                    <input type="radio" name="type" value="جایزه"
                                           tabindex="2"
                                           @if($certificate->type == 'جایزه') checked @endif> <i></i> جایزه </label>
                            </div>
                            <div class="i-checks col-md-4"><label>
                                    <input type="radio" name="type" value="گواهی"
                                           tabindex="2"
                                           @if($certificate->type == 'گواهی') checked @endif> <i></i> گواهی </label>
                            </div>
                            @if($errors->has('type'))
                                <span class="help-block">{{ $errors->first('type')}}</span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">

                        <div class="ibox float-e-margins">
                            <div class="form-group{{ $errors->has('photo') ? ' has-error': ''}}">
                                <div style="position: relative; right: 155px; top: -50px;" class="col-md-1">
                                @if(isset($certificate->photo))
                                    <img id="btnrm" style="position: relative; top: 40px; right: -50px;" width="50" height="50" src="{{asset($certificate->photo)}}">
                                @endif
                                </div>
                                <div style="position: relative; right: 135px;" class="col-md-1">
                                    <button style="font-family: webmdesign; margin-right: -60px; margin-top: 0px; background-color: #fff; border: 1px solid #e5e6e7; color: #333;" type="button" id="btnremove" class="btn">پاک کردن</button>
                                </div>
                                <div style="position: relative; right:75px;" class="col-md-1">
                                    <div class="ibox float-e-margins">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <span class="btn btn-default btn-file"><span
                                                    class="fileinput-new"> بارگذاری عکس</span>
                                           <span class="fileinput-exists"><span class="fileinput-exists"><span
                                                           style="color: #2aca76;">بارگذاری شد</span></span></span>


                                <input type="file" id="rmPhoto" value="{{$certificate->photo}}" name="photo"></span>
                                        </div>
                                        @if($errors->has('photo'))
                                            <span class="help-block">{{ $errors->first('photo')}}</span>
                                        @endif
                                    </div>
                                </div>
                                {{--<div style="position: relative; right: 60px;" class="col-md-1">--}}
                                    {{--<div style="width: 280px; margin-right: 15px;" class="fileinput fileinput-new input-group" data-provides="fileinput">--}}
                                        {{--<div class="form-control" data-trigger="fileinput">--}}
                                            {{--<p class="fileinput-exists" style="color: #2aca76;">بارگذاری شد</p>--}}
                                        {{--</div>--}}

                                        {{--<span style="border: 1px solid #e5e6e7;" class="input-group-addon btn btn-default btn-file">--}}
                                                    {{--<span class="fileinput-new">بارگذاری</span>--}}
                                                    {{--<span class="fileinput-exists">عوض کردن</span>--}}
                                                    {{--<input type="file" id="rmPhoto" value="{{$certificate->photo}}" name="photo">--}}
                                                {{--</span>--}}

                                        {{--<a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">پاک کردن</a>--}}
                                    {{--</div>--}}

                                    {{--@if($errors->has('photo'))--}}
                                        {{--<span class="help-block">{{ $errors->first('photo')}}</span>--}}
                                    {{--@endif--}}
                            {{--</div>--}}
                            </div>
                        </div>
                </div>

                <div class="row">
                    <div style="margin-top: 20px;" class="col-md-3">
                        <div class="form-group{{ $errors->has('info') ? ' has-error': ''}}">
                            <fieldset>
                                <label>توضیحات</label>
                        <textarea maxlength="330" class="demo" style="width: 555px; height: 170px; max-width: 555px; max-height: 170px;" class="form-control m-b" placeholder="توضیحات" type="text" name="info" tabindex="1"
                                  required autofocus>{{$certificate->info}}</textarea>
                            </fieldset>
                            @if($errors->has('info'))
                                <span class="help-block">{{ $errors->first('info')}}</span>
                            @endif
                        </div>
                    </div>
                </div>
                <div style="margin-top: -5px;" class="modal-footer col-md-5">
                    <button  style="font-family: webmdesign;" type="button" class="btn btn-white" data-dismiss="modal">بستن</button>
                    <button style="font-family: webmdesign;" name="submit" type="submit" id="contact-submit" data-submit="...Sending" class="btn btn-primary">اعمال تغییرات</button>
                </div>
            </form>
        </div>
    </div>
<script>
    $(document).ready(function () {
        $('.i-checks').iCheck({
            checkboxClass: 'icheckbox_square-green',
            radioClass: 'iradio_square-green',
        });
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

