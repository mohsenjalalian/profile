@extends('admin.layouts.master')



@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <div class="container">
            <form id="contact" action="{{route('docs.update',$docs->id)}}"
                  method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                {{ method_field('PUT') }}
                <input type="hidden" name="old_pic" value="{{ $docs->photo }}">
<div class="row">
    <div style="margin-top: 20px;" class="col-md-3">
                <div class="form-group{{ $errors->has('name') ? ' has-error': ''}}">
                    <label>نام</label>
                    <fieldset>
                        <input class="form-control m-b" placeholder="نام کتاب" type="text" name="name" value="{{$docs->name}}" tabindex="1"
                               required autofocus>
                    </fieldset>
                    @if($errors->has('name'))
                        <span class="help-block">{{ $errors->first('name')}}</span>
                    @endif
                </div>
    </div>
    <div style="margin-top: 20px;" class="col-md-3">
                <div class="form-group{{ $errors->has('published_place') ? ' has-error': ''}}">
                    <label>شرکت</label>
                    <fieldset>
                        <input class="form-control m-b" placeholder="شرکت انتشاراتی" type="text" value="{{$docs->published_place}}"
                               name="published_place" tabindex="1" required autofocus>
                    </fieldset>
                    @if($errors->has('published_place'))
                        <span class="help-block">{{ $errors->first('published_place')}}</span>
                    @endif
                </div>
    </div>
</div>
<div class="row">
    <div class="col-md-3">
                <div class="form-group{{ $errors->has('link') ? ' has-error': ''}}">
                    <label>لینک</label>
                    <fieldset>
                        <input class="form-control m-b" placeholder="لینک به مقاله" type="text" value="{{$docs->link}}" name="link" tabindex="1"
                                autofocus>
                    </fieldset>
                    @if($errors->has('link'))
                        <span class="help-block">{{ $errors->first('link')}}</span>
                    @endif
                </div>
</div>
    <div style="margin-top: px;" class="col-md-3">
                    <div class="form-group">
                        <label>تاریخ انتشار</label>
                        <div class="form-group{{ $errors->has('published_year') ? ' has-error': ''}}">
                            <div class="input-group">
                                <div data-mdpersiandatetimepickershowing="false" title="" data-original-title="" data-mdpersiandatetimepickerselecteddatetime="{&quot;Year&quot;:1393,&quot;Month&quot;:10,&quot;Day&quot;:10,&quot;Hour&quot;:0,&quot;Minute&quot;:0,&quot;Second&quot;:0}" data-mdpersiandatetimepicker="" style="cursor: pointer;" class="input-group-addon" data-mddatetimepicker="true" data-trigger="click" data-targetselector="#fromDate5" data-groupid="group1" data-fromdate="true" data-enabletimepicker="false" data-placement="left">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </div>
                                <input data-mdpersiandatetimepickershowing="false" value="{{$docs->published_year}}" title="" data-original-title="" data-mdpersiandatetimepickerselecteddatetime="{&quot;Year&quot;:1393,&quot;Month&quot;:10,&quot;Day&quot;:9,&quot;Hour&quot;:0,&quot;Minute&quot;:0,&quot;Second&quot;:0}" data-mdpersiandatetimepicker="" class="form-control" id="fromDate5" placeholder="تاریخ انتشار" data-mddatetimepicker="true" data-trigger="click" data-targetselector="#fromDate5" data-groupid="group1" data-fromdate="true" data-enabletimepicker="false" data-placement="right" name="published_year" type="text">
                                @if($errors->has('published_year'))
                                    <span class="help-block">{{ $errors->first('published_year')}}</span>
                                @endif
                            </div>
                        </div>
                    </div>
    </div>
</div>
                <div class="row">
                <div style="margin-top: -20px; margin-right: 130px;" class="col-md-5">
                    <div class="ibox float-e-margins">
                        <div class="form-group{{ $errors->has('photo') ? ' has-error': ''}}">
                            @if(isset($docs->photo))
                                <img style="position: relative; top: 40px; right: -39px;" width="50" height="50" src="{{asset($docs->photo)}}">
                            @else
                                <h4 style="margin-top: 20px;">شما هیچ عکسی آپلود نکرده اید</h4>
                            @endif
                            <div style="width: 280px; margin-right: 15px;" class="fileinput fileinput-new input-group" data-provides="fileinput">
                                <div class="form-control" data-trigger="fileinput">
                                    <p class="fileinput-exists" style="color: #2aca76;">بارگذاری شد</p>
                                </div>
                                <span style="border: 1px solid #e5e6e7;" class="input-group-addon btn btn-default btn-file">
                                                    <span class="fileinput-new">بارگذاری</span>
                                                    <span class="fileinput-exists">عوض کردن</span>
                                                    <input type="file" value="{{$docs->photo}}" name="photo">
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
                <div class="row">
                    <div style="margin-top: 20px;" class="modal-footer col-md-5">
                        <button  style="font-family: webmdesign;" type="button" class="btn btn-white" data-dismiss="modal">بستن</button>
                        <button style="font-family: webmdesign;" name="submit" type="submit" id="contact-submit" data-submit="...Sending" class="btn btn-primary">اعمال تغییرات</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="js/cheouts.js"></script>
    <script src="js/time.js"></script>
@endsection
