@extends('admin.layouts.master')



@section('content')
    <div class="content-wrapper">
        <div class="container">
            <form id="contact" action="{{route('education.update',$education->id)}}"
                  method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                {{ method_field('PUT') }}
                <input type="hidden" id="rmPhoto" name="old_pic" value="{{ $education->photo }}">
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
                <div style="margin-right: 160px;" class="row gerayesh">
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
                            <label>از تاریخ</label>
                                <div class="form-group{{ $errors->has('start_date') ? ' has-error': ''}}">
                                <div class="input-group">
                                <div data-mdpersiandatetimepickershowing="false" title="" data-original-title="" data-mdpersiandatetimepickerselecteddatetime="{&quot;Year&quot;:1393,&quot;Month&quot;:10,&quot;Day&quot;:10,&quot;Hour&quot;:0,&quot;Minute&quot;:0,&quot;Second&quot;:0}" data-mdpersiandatetimepicker="" style="cursor: pointer;" class="input-group-addon" data-mddatetimepicker="true" data-trigger="click" data-targetselector="#fromDate4" data-groupid="group1" data-fromdate="true" data-enabletimepicker="false" data-placement="left"><span class="glyphicon glyphicon-calendar"></span>
                                </div>
                                <input data-mdpersiandatetimepickershowing="false" value="{{$education->start_date}}"  title="" data-original-title="" data-mdpersiandatetimepickerselecteddatetime="{&quot;Year&quot;:1393,&quot;Month&quot;:10,&quot;Day&quot;:9,&quot;Hour&quot;:0,&quot;Minute&quot;:0,&quot;Second&quot;:0}" data-mdpersiandatetimepicker="" class="form-control" id="fromDate4" placeholder="از تاریخ" data-mddatetimepicker="true" data-trigger="click" data-targetselector="#fromDate4" data-groupid="group1" data-fromdate="true" data-enabletimepicker="false" data-placement="right" name="start_date" type="text">
                                @if($errors->has('start_date'))
                                    <span class="help-block">{{ $errors->first('start_date')}}</span>
                                @endif
                            </div>
                        </div>
                    </div>
               </div>
                    <div class="col-md-3">
                        <label>تا تاریخ</label>
                            <div class="form-group{{ $errors->has('finish_date') ? ' has-error': ''}}">
                                <div class="input-group">
                                <div data-mdpersiandatetimepickershowing="false" title="" data-original-title="" data-mdpersiandatetimepickerselecteddatetime="{&quot;Year&quot;:1393,&quot;Month&quot;:10,&quot;Day&quot;:10,&quot;Hour&quot;:0,&quot;Minute&quot;:0,&quot;Second&quot;:0}" data-mdpersiandatetimepicker="" style="cursor: pointer;" class="input-group-addon" data-mddatetimepicker="true" data-trigger="click" data-targetselector="#toDate4" data-groupid="group1" data-todate="true" data-placement="left"><span class="glyphicon glyphicon-calendar"></span>
                                </div>
                                <input data-mdpersiandatetimepickershowing="false" name="finish_date"
                                       value="{{$education->finish_date}}" title="" data-original-title="" data-mdpersiandatetimepickerselecteddatetime="{&quot;Year&quot;:1393,&quot;Month&quot;:10,&quot;Day&quot;:23,&quot;Hour&quot;:0,&quot;Minute&quot;:0,&quot;Second&quot;:0}" data-mdpersiandatetimepicker="" class="form-control" id="toDate4" placeholder="تا تاریخ" data-mddatetimepicker="true" data-trigger="click" data-targetselector="#toDate4" data-groupid="group1" data-todate="true" data-enabletimepicker="false" data-placement="right" type="text">
                            </div>
                            @if($errors->has('finish_date'))
                                <span class="help-block">{{ $errors->first('finish_date')}}</span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="ibox float-e-margins">
                            <div class="form-group{{ $errors->has('logo') ? ' has-error': ''}}">
                                <div style="position: relative; top: -40px; right: 20px;" class="col-md-1 col-xs-4 pastg1">
                                @if(isset($education->logo))
                                    <img id="btnrm" style="position: relative; top: 33px; right: 100px; " width="50" height="50" src="{{asset($education->logo)}}">
                                @endif
                                </div>
                                <div style="position: relative; right: 150px;" class="col-md-1 col-xs-4 pastg2">
                                    <button style="font-family: webmdesign; margin-right: -60px; margin-top: 0px; background-color: #fff; border: 1px solid #e5e6e7; color: #333;" type="button" id="btnremove" class="btn">پاک کردن</button>
                                </div>
                                <div style="position: relative; right: 80px;" class="col-md-1 col-xs-4 pastg3">
                                    <div class="ibox float-e-margins">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <span class="btn btn-default btn-file"><span
                                                    class="fileinput-new"> بارگذاری عکس</span>
                                           <span class="fileinput-exists"><span class="fileinput-exists"><span
                                                           style="color: #2aca76;">بارگذاری شد</span></span></span>


                                            <input type="file" id="rmPhoto" value="{{$education->logo}}" name="logo"
                                                   onchange="readURL1(this)"></span>
                                        </div>
                                        @if($errors->has('logo'))
                                            <span class="help-block">{{ $errors->first('logo')}}</span>
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
                                                    {{--<input type="file" id="rmPhoto" value="{{$education->logo}}" name="logo">--}}
                                                {{--</span>--}}

                                        {{--<a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">پاک کردن</a>--}}
                                    {{--</div>--}}
                                {{--@if($errors->has('logo'))--}}
                                    {{--<span class="help-block">{{ $errors->first('logo')}}</span>--}}
                                {{--@endif--}}
                        {{--</div>--}}
                            </div>
                        </div>
                    </div>
                <div style="margin-top: 10px;" class="modal-footer col-md-5">
                    <button  style="font-family: webmdesign;" type="button" class="btn btn-white" data-dismiss="modal">بستن</button>
                    <button style="font-family: webmdesign;" name="submit" type="submit" id="contact-submit" data-submit="...Sending" class="btn btn-primary">اعمال تغییرات</button>
                </div>
            </form>
        </div>
    </div>
    <script src="js/cheouts.js"></script>
    <script src="js/time.js"></script>

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
