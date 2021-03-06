@extends('admin.layouts.master')



@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <div class="container">
            @include('admin.layouts.errors')
            <form id="contact" action="{{route('recommend.update',$recommend->id)}}" method="post"
                  enctype="multipart/form-data">
                {{csrf_field()}}
                {{ method_field('PUT') }}
                <div class="row">
                <div style="margin-top: 3px;" class="col-md-3">
                <div class="form-group{{ $errors->has('name') ? ' has-error': ''}}">
                    <fieldset>
                        <label>نام:</label>
                        <input class="form-control m-b" placeholder="نام شخص" value="{{$recommend->name}}"
                               type="text" name="name" tabindex="1"
                               required autofocus>
                    </fieldset>
                    @if($errors->has('name'))
                        <span class="help-block">{{ $errors->first('name')}}</span>
                    @endif
                </div>
                </div>

                <div style="margin-top: 3px;" class="col-md-3">
                <div class="form-group{{ $errors->has('position') ? ' has-error': ''}}">
                    <fieldset>
                        <label>شغل:</label>
                        <input class="form-control m-b" placeholder="موقعیت شغلی" type="text"
                               value="{{$recommend->position}}" name="position"
                               tabindex="1" required autofocus>
                    </fieldset>
                    @if($errors->has('position'))
                        <span class="help-block">{{ $errors->first('position')}}</span>
                    @endif
                </div>
                </div>
                </div>
                <div class="row">
                <div style="margin-top: -10px;" class="col-md-2">
                <div class="form-group{{ $errors->has('company') ? ' has-error': ''}}">
                    <label>شرکت</label>
                    <fieldset>
                        <input class="form-control m-b" placeholder="شرکت" type="text" name="company"
                               value="{{$recommend->company}}"
                               tabindex="1" required autofocus>
                    </fieldset>
                    @if($errors->has('company'))
                        <span class="help-block">{{ $errors->first('company')}}</span>
                    @endif
                </div>
                </div>
                    <div style="position: absolute; top: 110px; right: 355px;" class="col-md-5">
                            <div class="ibox float-e-margins">
                                <div class="form-group{{ $errors->has('photo') ? ' has-error': ''}}">
                                    <div class="col-md-1 axs">
                                    @if(isset($recommend->photo))
                                        <img id="btnrm" style="position: relative; top: -10px; right: -100px;" width="50" height="50" src="{{asset($recommend->photo)}}">
                                    @endif
                                    </div>
                                    <div class="col-md-1 axs2">
                                        <button style="font-family: webmdesign; margin-right: -60px; margin-top: 0px; background-color: #fff; border: 1px solid #e5e6e7; color: #333;" type="button" id="btnremove" class="btn">پاک کردن</button>
                                    </div>
                                    <div class="col-md-1 axs3">
                                        <div class="ibox float-e-margins">
                                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <span class="btn btn-default btn-file"><span
                                                    class="fileinput-new"> بارگذاری عکس</span>
                                           <span class="fileinput-exists"><span class="fileinput-exists"><span
                                                           style="color: #2aca76;">بارگذاری شد</span></span></span>


                                            <input type="file" name="photo" value="{{$recommend->photo}}"
                                                   onchange="readURL1(this)"></span>
                                                </div>
                                                @if($errors->has('photo'))
                                                    <span class="help-block">{{ $errors->first('photo')}}</span>
                                                @endif
                                            </div>
                                        </div>
                                    {{--<div class="col-md-1">--}}
                                        {{--<div style="width: 250px; margin-right: -0px;" class="fileinput fileinput-new input-group" data-provides="fileinput">--}}
                                        {{--<div class="form-control" data-trigger="fileinput">--}}
                                            {{--<p class="fileinput-exists" style="color: #2aca76;">بارگذاری </p>--}}
                                        {{--</div>--}}
                                            {{--<input type="hidden" id="rmPhoto" name="old_pic" value="{{ $recommend->photo }}">--}}
                                            {{--<span style="border: 1px solid #e5e6e7;" class="input-group-addon btn btn-default btn-file">--}}
                                                    {{--<span class="fileinput-new">بارگذاری</span>--}}
                                                    {{--<span class="fileinput-exists">عوض کردن</span>--}}
                                                    {{--<input type="file" name="photo" value="{{$recommend->photo}}" >--}}
                                                {{--</span>--}}
                                        {{--<a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">پاک کردن</a>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                        {{--@if($errors->has('photo'))--}}
                                            {{--<span class="help-block">{{ $errors->first('photo')}}</span>--}}
                                        {{--@endif--}}
                                </div>
                            </div>
                        </div>
                </div>

                <div class="row">
                    <div style="margin-top: -20px;" class="col-md-12">
                <label>توضیحات</label>
                <div class="form-group{{ $errors->has('info') ? ' has-error': ''}}">
                        <textarea style="max-width: 555px; height: 190px; max-height: 190px;" class="form-control m-b textmb" placeholder="توضیحات" type="text" name="info"
                                   tabindex="1" required autofocus>{{$recommend->info}}
                        </textarea>
                    @if($errors->has('info'))
                        <span class="help-block">{{ $errors->first('info')}}</span>
                    @endif
                </div>
                    </div>
                </div>


                        <div style="margin-top: 10px;" class="modal-footer col-md-5 btnup">
                            <button  style="font-family: webmdesign;" type="button" class="btn btn-white" data-dismiss="modal">بستن</button>
                            <button style="font-family: webmdesign;" name="submit" type="submit" id="contact-submit" data-submit="...Sending" class="btn btn-primary">اعمال تغییرات</button>
                        </div>
            </form>
        </div>
    </div>



    <script>
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

@stop