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
                <div class="form-group{{ $errors->has('name') ? ' has-error': ''}}">
                    <fieldset>
                        <input class="form-control m-b col-md-3" placeholder="نام گواهی" value="{{$certificate->name}}" type="text" name="name"
                               tabindex="1"
                               required autofocus>
                    </fieldset>
                    @if($errors->has('name'))
                        <span class="help-block">{{ $errors->first('name')}}</span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('info') ? ' has-error': ''}}">
                    <fieldset>
                        <textarea style="width: 400px; height: 100px;" class="form-control m-b" placeholder="توضیحات" type="text" name="info" tabindex="1"
                                  required autofocus>{{$certificate->info}}</textarea>
                    </fieldset>
                    @if($errors->has('info'))
                        <span class="help-block">{{ $errors->first('info')}}</span>
                    @endif
                </div>

                <p>نوع</p>
                <div class="form-group{{ $errors->has('type') ? ' has-error': ''}}">
                    <div class="i-checks col-md-1"><label>
                            <input type="radio" name="type" value="دوره"

                                                         tabindex="2" checked> <i></i>دوره </label>
                    </div>
                    <div class="i-checks col-md-1"><label>
                            <input type="radio" name="type" value="جایزه"
                                                         tabindex="2"> <i></i> جایزه </label></div>
                    <div class="i-checks col-md-1"><label>
                            <input type="radio" name="type" value="گواهی"
                                                         tabindex="2"> <i></i> گواهی </label></div>
                    @if($errors->has('type'))
                        <span class="help-block">{{ $errors->first('type')}}</span>
                    @endif
                </div>

                    <div class="ibox float-e-margins">
                        @if(isset($certificate->photo))
                            <img width="50" height="50" src="{{asset($certificate->photo)}}">
                        @else
                            <h4>شما هیچ عکسی آپلود نکرده اید</h4>
                        @endif
                        <div class="form-group{{ $errors->has('photo') ? ' has-error': ''}}">
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <span class="btn btn-default btn-file"><span class="fileinput-new">بارگذاری</span><span class="fileinput-exists"><span
                                                        style="color: #2aca76;">بارگذاری شد</span>
                                            </span>
                                            <input type="file" value="{{$certificate->photo}}" name="photo"></span>
                            </div>
                            @if($errors->has('photo'))
                                <span class="help-block">{{ $errors->first('photo')}}</span>
                            @endif
                        </div>
                    </div>
                <div style="margin-top: -20px;" class="modal-footer col-md-5">
                    <button type="button" class="btn btn-white" data-dismiss="modal">بستن</button>
                    <button name="submit" type="submit" id="contact-submit" data-submit="...Sending"
                            class="btn btn-primary">اعمال تغییرات
                    </button>
                </div>

            </form>

        </div>
    </div>
@endsection
