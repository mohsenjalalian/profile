@extends('admin.layouts.master')



@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="container">
            <form id="contact" action="{{route('education.update',$education->id)}}"
                  method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                {{ method_field('PUT') }}
                <input type="hidden" name="old_pic" value="{{ $education->photo }}">

                <div class="form-group{{ $errors->has('university_name') ? ' has-error': ''}}">
                    <fieldset>
                        <input class="form-control m-b col-md-3" placeholder="نام دانشگاه" type="text" value="{{$education->university_name}}"
                               name="university_name" tabindex="1" required autofocus>
                    </fieldset>
                    @if($errors->has('university_name'))
                        <span class="help-block">{{ $errors->first('university_name')}}</span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('field') ? ' has-error': ''}}">
                    <fieldset>
                        <input class="form-control m-b col-md-3" placeholder="رشته" type="text" name="field" value="{{$education->field}}" tabindex="1"
                               required autofocus>
                    </fieldset>
                    @if($errors->has('field'))
                        <span class="help-block">{{ $errors->first('field')}}</span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('tendency') ? ' has-error': ''}}">
                    <fieldset>
                        <input class="form-control m-b col-md-3" placeholder="گرایش" type="text" name="tendency" value="{{$education->tendency}}"
                               tabindex="1" required autofocus>
                    </fieldset>
                    @if($errors->has('tendency'))
                        <span class="help-block">{{ $errors->first('tendency')}}</span>
                    @endif
                </div>
                <div class="row">
                <div class="container col-md-3">
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
<div class="row">
    <div class="col-md-6">
                    <div class="ibox float-e-margins">
                        @if(isset($education->logo))
                            <img width="50" height="50" src="{{asset($education->logo)}}">
                        @else
                            <h4>شما هیچ عکسی آپلود نکرده اید</h4>
                        @endif
                        <div class="form-group{{ $errors->has('logo') ? ' has-error': ''}}">
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <span class="btn btn-default btn-file"><span class="fileinput-new">بارگذاری</span><span class="fileinput-exists"><span
                                                        style="color: #2aca76;">بارگذاری شد</span></span>
                                            <input type="file" value="{{$education->logo}}" name="logo"></span>
                            </div>
                            @if($errors->has('logo'))
                                <span class="help-block">{{ $errors->first('logo')}}</span>
                            @endif
                    </div>
                    </div>
                </div>
</div>
                    <div style="margin-top: -20px;" class="modal-footer col-md-5">
                        <button type="button" class="btn btn-white" data-dismiss="modal">بستن</button>
                        <button name="submit" type="submit" id="contact-submit" data-submit="...Sending"
                                class="btn btn-primary">اعمال تغیرات
                        </button>
                    </div>
            </form>
        </div>
    </div>
@endsection
