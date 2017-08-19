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
                <div class="row">
                    <div style="margin-top: 0px; margin-right: 150px;" class="col-md-3">
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
                </div>
                <div class="row">
                    <div class="col-md-2">
                <p>نوع</p>
                <div class="form-group{{ $errors->has('type') ? ' has-error': ''}}">
                    <div class="i-checks col-md-4"><label>
                            <input type="radio" name="type" value="دوره"

                                                         tabindex="2" checked> <i></i>دوره </label>
                    </div>

                    <div class="i-checks col-md-4"><label>
                            <input type="radio" name="type" value="جایزه"
                                                         tabindex="2"> <i></i> جایزه </label>
                    </div>
                    <div class="i-checks col-md-4"><label>
                            <input type="radio" name="type" value="گواهی"
                                                         tabindex="2"> <i></i> گواهی </label>
                    </div>
                    @if($errors->has('type'))
                        <span class="help-block">{{ $errors->first('type')}}</span>
                    @endif
                </div>
                    </div>

                    <div style="position: absolute; top: 73px; right: 255px;" class="col-md-5">
                        <div class="ibox float-e-margins">
                            <div class="form-group{{ $errors->has('photo') ? ' has-error': ''}}">
                                @if(isset($certificate->photo))
                                    <img style="position: relative; top: 40px; right: -50px;" width="50" height="50" src="{{asset($certificate->photo)}}">
                                @else
                                    <h4 style="width: 200px;">شما هیچ عکسی آپلود نکرده اید</h4>
                                @endif
                                <div style="width: 280px; margin-right: 15px;" class="fileinput fileinput-new input-group" data-provides="fileinput">
                                    <div class="form-control" data-trigger="fileinput">
                                        <p class="fileinput-exists" style="color: #2aca76;">بارگذاری شد</p>
                                    </div>
                                    <span style="border: 1px solid #e5e6e7;" class="input-group-addon btn btn-default btn-file">
                                                    <span class="fileinput-new">بارگذاری</span>
                                                    <span class="fileinput-exists">عوض کردن</span>
                                                    <input type="file" value="{{$certificate->photo}}" name="photo">
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

{{--<div style="margin-top: 15px;" class="col-md-3">--}}
                    {{--<div class="ibox float-e-margins">--}}
                        {{--<div class="form-group{{ $errors->has('photo') ? ' has-error': ''}}">--}}
                            {{--@if(isset($certificate->photo))--}}
                                {{--<img width="50" height="50" src="{{asset($certificate->photo)}}">--}}
                            {{--@else--}}
                                {{--<h4 style="width: 200px;">شما هیچ عکسی آپلود نکرده اید</h4>--}}
                            {{--@endif--}}
                            {{--<div class="fileinput fileinput-new" data-provides="fileinput">--}}
                                        {{--<span style="margin-top: 10px;" class="btn btn-default btn-file"><span class="fileinput-new">بارگذاری عکس جدید</span><span class="fileinput-exists"><span--}}
                                                        {{--style="color: #2aca76;">بارگذاری شد</span>--}}
                                            {{--</span>--}}
                                            {{--<input type="file" value="{{$certificate->photo}}" name="photo"></span>--}}
                            {{--</div>--}}
                            {{--@if($errors->has('photo'))--}}
                                {{--<span class="help-block">{{ $errors->first('photo')}}</span>--}}
                            {{--@endif--}}
                        {{--</div>--}}
                    {{--</div>--}}
{{--</div>--}}

                <div class="row">
                    <div style="margin-top: 20px;" class="col-md-3">
                        <div class="form-group{{ $errors->has('info') ? ' has-error': ''}}">
                            <fieldset>
                                <label>توضیحات</label>
                        <textarea style="width: 555px; height: 170px; max-width: 555px; max-height: 170px;" class="form-control m-b" placeholder="توضیحات" type="text" name="info" tabindex="1"
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


@endsection
@section('scripts')
    <script src="js/plugins/iCheck/icheck.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green'
            });
        });
    </script>
@endsection
