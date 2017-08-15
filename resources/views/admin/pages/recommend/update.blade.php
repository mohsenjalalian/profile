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
                <input type="hidden" name="old_pic" value="{{ $recommend->photo }}">
<div class="row">
    <div class="col-md-3">
                <div class="form-group{{ $errors->has('name') ? ' has-error': ''}}">
                    <fieldset>
                        <input class="form-control m-b" placeholder="نام شخص" value="{{$recommend->name}}"
                               type="text" name="name" tabindex="1"
                               required autofocus>
                    </fieldset>
                    @if($errors->has('name'))
                        <span class="help-block">{{ $errors->first('name')}}</span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('position') ? ' has-error': ''}}">
                    <fieldset>
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
                <div class="form-group{{ $errors->has('company') ? ' has-error': ''}}">
                    <fieldset>
                        <input class="form-control m-b col-md-3" placeholder="شرکت" type="text" name="company"
                               value="{{$recommend->company}}"
                               tabindex="1" required autofocus>
                    </fieldset>
                    @if($errors->has('company'))
                        <span class="help-block">{{ $errors->first('company')}}</span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('info') ? ' has-error': ''}}">
                    <fieldset>
                        <textarea class="form-control m-b col-md-4" placeholder="توضیحات" type="text" name="info"
                                   tabindex="1" required autofocus>
                            {{$recommend->info}}
                        </textarea>
                    </fieldset>
                    @if($errors->has('info'))
                        <span class="help-block">{{ $errors->first('info')}}</span>
                    @endif
                </div>


                <div class="col-md-12">
                    @if(isset($recommend->photo))
                        <img width="50" height="50" src="{{asset($recommend->photo)}}">
                    @else
                        <h4>شما هیچ عکسی آپلود نکرده اید</h4>
                    @endif
                    <div class="ibox float-e-margins">
                        <div class="form-group{{ $errors->has('photo') ? ' has-error': ''}}">
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <span class="btn btn-default btn-file"><span
                                                    class="fileinput-new">بارگذاری</span><span class="fileinput-exists"><span
                                                        style="color: #2aca76;">بارگذاری شد</span></span>
                                            <input type="file" value="{{$recommend->photo}}" name="photo"></span>
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
                </div>
            </form>

        </div>
    </div>

@endsection

@section('script')

@stop