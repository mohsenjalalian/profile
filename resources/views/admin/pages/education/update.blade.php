@extends('admin.layouts.master')



@section('content')
    <div class="content-wrapper">
        <div class="container">
            <form id="contact" action="{{route('education.update',$education->id)}}"
                  method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                {{ method_field('PUT') }}
                <input type="hidden" name="old_pic" value="{{ $education->photo }}">
<div class="row">
    <div style="margin-top: 20px;" class="col-md-3">
                <div class="form-group{{ $errors->has('university_name') ? ' has-error': ''}}">
                    <label>نام</label>
                    <fieldset>
                        <input class="form-control m-b" placeholder="نام دانشگاه" type="text" value="{{$education->university_name}}"
                               name="university_name" tabindex="1" required autofocus>
                    </fieldset>
                    @if($errors->has('university_name'))
                        <span class="help-block">{{ $errors->first('university_name')}}</span>
                    @endif
                </div>
    </div>
<div style="margin-top: 20px;" class="col-md-3">
                <div class="form-group{{ $errors->has('field') ? ' has-error': ''}}">
                    <label>رشته</label>
                    <fieldset>
                        <input class="form-control m-b" placeholder="رشته" type="text" name="field" value="{{$education->field}}" tabindex="1"
                               required autofocus>
                    </fieldset>
                    @if($errors->has('field'))
                        <span class="help-block">{{ $errors->first('field')}}</span>
                    @endif
                </div>
    </div>
</div>
                <div style="margin-right: 160px;" class="row">
                <div class="form-group{{ $errors->has('tendency') ? ' has-error': ''}}">
                    <label>گرایش</label>
                    <fieldset>
                        <input class="form-control m-b col-md-3" placeholder="گرایش" type="text" name="tendency" value="{{$education->tendency}}"
                               tabindex="1" required autofocus>
                    </fieldset>
                    @if($errors->has('tendency'))
                        <span class="help-block">{{ $errors->first('tendency')}}</span>
                    @endif
                </div>
                </div>
                <div class="row">
               <div class="col-md-3">
                    <div class="form-group">
                        <div class="form-group{{ $errors->has('start_date') ? ' has-error': ''}}">
                            <div class="input-group">
                                <div data-mdpersiandatetimepickershowing="false" title="" data-original-title="" data-mdpersiandatetimepickerselecteddatetime="{&quot;Year&quot;:1393,&quot;Month&quot;:10,&quot;Day&quot;:10,&quot;Hour&quot;:0,&quot;Minute&quot;:0,&quot;Second&quot;:0}" data-mdpersiandatetimepicker="" style="cursor: pointer;" class="input-group-addon" data-mddatetimepicker="true" data-trigger="click" data-targetselector="#fromDate1" data-groupid="group1" data-fromdate="true" data-enabletimepicker="false" data-placement="left">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </div>
                                <input data-mdpersiandatetimepickershowing="false" value="{{$education->start_date}}"  title="" data-original-title="" data-mdpersiandatetimepickerselecteddatetime="{&quot;Year&quot;:1393,&quot;Month&quot;:10,&quot;Day&quot;:9,&quot;Hour&quot;:0,&quot;Minute&quot;:0,&quot;Second&quot;:0}" data-mdpersiandatetimepicker="" class="form-control" id="fromDate1" placeholder="از تاریخ" data-mddatetimepicker="true" data-trigger="click" data-targetselector="#fromDate1" data-groupid="group1" data-fromdate="true" data-enabletimepicker="false" data-placement="right" name="start_date" type="text">
                                @if($errors->has('start_date'))
                                    <span class="help-block">{{ $errors->first('start_date')}}</span>
                                @endif
                            </div>
                        </div>
                    </div>
               </div>
                    <div class="col-md-3">
                        <div class="form-group{{ $errors->has('finish_date') ? ' has-error': ''}}">
                            <div class="input-group">
                                <div data-mdpersiandatetimepickershowing="false" title="" data-original-title="" data-mdpersiandatetimepickerselecteddatetime="{&quot;Year&quot;:1393,&quot;Month&quot;:10,&quot;Day&quot;:10,&quot;Hour&quot;:0,&quot;Minute&quot;:0,&quot;Second&quot;:0}" data-mdpersiandatetimepicker="" style="cursor: pointer;" class="input-group-addon" data-mddatetimepicker="true" data-trigger="click" data-targetselector="#toDate1" data-groupid="group1" data-todate="true" data-placement="left">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </div>
                                <input data-mdpersiandatetimepickershowing="false" name="finish_date"
                                       value="{{$education->finish_date}}" title="" data-original-title="" data-mdpersiandatetimepickerselecteddatetime="{&quot;Year&quot;:1393,&quot;Month&quot;:10,&quot;Day&quot;:23,&quot;Hour&quot;:0,&quot;Minute&quot;:0,&quot;Second&quot;:0}" data-mdpersiandatetimepicker="" class="form-control" id="toDate1" placeholder="تا تاریخ" data-mddatetimepicker="true" data-trigger="click" data-targetselector="#toDate1" data-groupid="group1" data-todate="true" data-enabletimepicker="true" data-placement="right" type="text">
                                @if($errors->has('finish_date'))
                                    <span class="help-block">{{ $errors->first('finish_date')}}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <div style="position: absolute; top: 233px; right: 155px;" class="col-md-5">
                    <div class="ibox float-e-margins">
                            <div class="form-group{{ $errors->has('logo') ? ' has-error': ''}}">
                                @if(isset($education->logo))
                                    <img style="position: relative; top: 40px; right: -35px; " width="50" height="50" src="{{asset($education->logo)}}">
                                @else
                                    <h4 style="margin-top: 60px;">شما هیچ عکسی آپلود نکرده اید</h4>
                                @endif
                            <div style="width: 280px; margin-right: 15px;" class="fileinput fileinput-new input-group" data-provides="fileinput">
                                <div class="form-control" data-trigger="fileinput">
                                    <p class="fileinput-exists" style="color: #2aca76;">بارگذاری شد</p>
                                </div>
                                <span style="border: 1px solid #e5e6e7;" class="input-group-addon btn btn-default btn-file">
                                                    <span class="fileinput-new">بارگذاری</span>
                                                    <span class="fileinput-exists">عوض کردن</span>
                                                    <input type="file" value="{{$education->logo}}" name="logo">
                                                </span>
                                <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">پاک کردن</a>
                            </div>
                                @if($errors->has('logo'))
                                    <span class="help-block">{{ $errors->first('logo')}}</span>
                                @endif
                        </div>
                    </div>
                </div>
                <div style="margin-top: 100px;" class="modal-footer col-md-5">
                    <button  style="font-family: webmdesign;" type="button" class="btn btn-white" data-dismiss="modal">بستن</button>
                    <button style="font-family: webmdesign;" name="submit" type="submit" id="contact-submit" data-submit="...Sending" class="btn btn-primary">اعمال تغییرات</button>
                </div>
            </form>
        </div>
    </div>
    <script src="js/cheouts.js"></script>
    <script src="js/time.js"></script>
@endsection
