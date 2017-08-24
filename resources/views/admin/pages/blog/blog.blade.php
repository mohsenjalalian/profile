@extends('admin.layouts.master')
@inject('photo',\App\Http\Controllers\BlogController)
@section('content')

    <div class="content-wrapper clearfix">
        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                <h2>بلاگ</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{route('profile')}}">خانه</a>
                    </li>
                    <li class="active">
                        <strong>بلاگ</strong>
                    </li>
                </ol>
            </div>
        </div>

        <div style="margin-top: 20px;" class="col-lg-4">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    افزودن
                </div>
                <div class="panel-body">
                    <form id="contact" action="{{route('blog.store')}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group{{ $errors->has('title') ? ' has-error': ''}}">
                            <div class="col-sm-10 col-md-12">
                                <input oninvalid="return chek(this)" oninput="return chek2(this)" value="{{ Request::old('title') ?: ''}}" type="text" placeholder="تیتر"
                                       class="form-control m-b" name="title"
                                       tabindex="1" required autofocus>
                                @if($errors->has('title'))
                                    <span class="help-block">{{ $errors->first('title')}}</span>
                                @endif
                            </div>
                        </div>
                        <div class="container col-md-12">
                            <div class="form-group">
                                <div class="form-group{{ $errors->has('date') ? ' has-error': ''}}">
                                    <div class="input-group">
                                        <div data-mdpersiandatetimepickershowing="false" title="" data-original-title=""
                                             data-mdpersiandatetimepickerselecteddatetime="{&quot;Year&quot;:1393,&quot;Month&quot;:10,&quot;Day&quot;:10,&quot;Hour&quot;:0,&quot;Minute&quot;:0,&quot;Second&quot;:0}"
                                             data-mdpersiandatetimepicker="" style="cursor: pointer;"
                                             class="input-group-addon" data-mddatetimepicker="true" data-trigger="click"
                                             data-targetselector="#fromDate1" data-groupid="group1" data-fromdate="true"
                                             data-enabletimepicker="false" data-placement="left">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </div>
                                        <input data-mdpersiandatetimepickershowing="false"
                                               value="{{ Request::old('date') ?: ''}}" title="" data-original-title=""
                                               data-mdpersiandatetimepickerselecteddatetime="{&quot;Year&quot;:1393,&quot;Month&quot;:10,&quot;Day&quot;:9,&quot;Hour&quot;:0,&quot;Minute&quot;:0,&quot;Second&quot;:0}"
                                               data-mdpersiandatetimepicker="" class="form-control" id="fromDate1"
                                               placeholder="تاریخ" data-mddatetimepicker="true" data-trigger="click"
                                               data-targetselector="#fromDate1" data-groupid="group1"
                                               data-fromdate="true" data-enabletimepicker="false" data-placement="right"
                                               name="date" type="text">
                                    </div>
                                    @if($errors->has('date'))
                                        <span class="help-block">{{ $errors->first('date')}}</span>
                                    @endif
                                </div>
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('description') ? ' has-error': ''}}">
                            <div class="col-sm-10 col-md-12">
                                    <textarea oninvalid="return chek(this)" oninput="return chek2(this)" style="height: 70px; max-height: 80px; max-width: 280px;" type="text" class="form-control m-b"
                                              name="description" rows="8" cols="80"
                                              placeholder="توضیحات"
                                              tabindex="1" required
                                              autofocus>{{ Request::old('description') ?: ''}}</textarea>
                                @if($errors->has('description'))
                                    <span class="help-block">{{ $errors->first('description')}}</span>
                                @endif
                            </div>
                        </div>
<div class="row">
                        <div  class="col-md-5">
                            <div class="ibox float-e-margins">
                                <div class="form-group{{ $errors->has('photo1') ? ' has-error': ''}}">
                                    <div style="width: 280px; margin-right: 15px;" class="fileinput fileinput-new input-group" data-provides="fileinput">
                                        <div class="form-control" data-trigger="fileinput">
                                            <p class="fileinput-exists" style="color: #2aca76;">بارگذاری شد</p>
                                        </div>
                                        <span style="border: 1px solid #e5e6e7;" class="input-group-addon btn btn-default btn-file">
                                                    <span class="fileinput-new">بارگذاری</span>
                                                    <span class="fileinput-exists">عوض کردن</span>
                                                    <input type="file" name="photo[]"
                                                           value="{{ Request::old('photo1') ?: ''}}" onchange="readURL1(this)">
                                                </span>
                                        <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">پاک کردن</a>
                                    </div>
                                    <p style="font-size: 12px; margin-left: -170px;" class="pull-right colorpicker">۲۰۰ * ۳۷۰</p>
                                    @if($errors->has('photo1'))
                                        <span class="help-block">{{ $errors->first('photo1')}}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
</div>
                        <div class="row">
                        <div  class="col-md-5">
                            <div class="ibox float-e-margins">
                                <div class="form-group{{ $errors->has('photo2') ? ' has-error': ''}}">
                                    <div style="width: 280px; margin-right:15px;" class="fileinput fileinput-new input-group" data-provides="fileinput">
                                        <div class="form-control" data-trigger="fileinput">
                                            <p class="fileinput-exists" style="color: #2aca76;">بارگذاری شد</p>
                                        </div>
                                        <span style="border: 1px solid #e5e6e7;" class="input-group-addon btn btn-default btn-file">
                                                    <span class="fileinput-new">بارگذاری</span>
                                                    <span class="fileinput-exists">عوض کردن</span>
                                                    <input type="file" name="photo[]"
                                                           value="{{ Request::old('photo2') ?: ''}}" onchange="readURL2(this)">
                                                </span>
                                        <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">پاک کردن</a>
                                    </div>
                                    <p style="font-size: 12px; margin-left: -170px;" class="pull-right colorpicker">۲۰۰ * ۳۷۰</p>
                                    @if($errors->has('photo2'))
                                        <span class="help-block">{{ $errors->first('photo2')}}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        </div>

                        <div class="row">
                            <div  class="col-md-5">
                                <div class="ibox float-e-margins">
                                    <div class="form-group{{ $errors->has('photo3') ? ' has-error': ''}}">
                                        <div style="width: 280px; margin-right: 15px;" class="fileinput fileinput-new input-group" data-provides="fileinput">
                                            <div class="form-control" data-trigger="fileinput">
                                                <p class="fileinput-exists" style="color: #2aca76;">بارگذاری شد</p>
                                            </div>
                                            <span style="border: 1px solid #e5e6e7;" class="input-group-addon btn btn-default btn-file">
                                                    <span class="fileinput-new">بارگذاری</span>
                                                    <span class="fileinput-exists">عوض کردن</span>
                                                    <input type="file" name="photo[]"
                                                           value="{{ Request::old('photo3') ?: ''}}" onchange="readURL3(this)">
                                                </span>
                                            <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">پاک کردن</a>
                                        </div>
                                        <p style="font-size: 12px; margin-left: -170px;" class="pull-right colorpicker">۲۰۰ * ۳۷۰</p>
                                        @if($errors->has('photo3'))
                                            <span class="help-block">{{ $errors->first('photo3')}}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button style="font-family: webmdesign;" class="btn btn-primary col-md-3" name="submit" type="submit" id="contact-submit"
                                data-submit="...Sending">ارسال
                        </button>

                    </form>
                </div>
            </div>
        </div>
        <div style="margin-top:20px" class="col-lg-8">
            <div class="ibox float-e-margins">
                <div class="ibox-content">
                    <input type="text" class="form-control input-sm m-b-xs" id="filter"
                           placeholder="سرچ کردن">

                    <table class="footable table table-stripped" data-page-size="3" data-filter=#filter>
                        <thead>
                        <tr>
                            <th class="text-center">عکس </th>
                            <th class="text-center">تیتر</th>
                            <th class="text-center">تاریخ</th>
                            <th class="text-center">توضیحات</th>
                            <th style="width: 20px;" class="text-center">تغییرات</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($blogs as $blog)
                            <tr>
                                <td class="text-center">
                                     @if($blog->album->first())
                                            <img width="50" height="50"
                                                 src="{{$photo::ALBUM_PATH.'/'. $blog->album->first()->photo}}"
                                                 alt="{{$blog->album->first()->photo}}">
                                        @else
                                            <img width="50" height="50"
                                                 src="/image/admin.png" alt="">
                                        @endif
                                </td>

                                <td style=" vertical-align: middle;"
                                    class="text-center">{{$blog->title}}</td>
                                <td style="vertical-align: middle;" class="text-center">{{$blog->date}}</td>
                                <td style="vertical-align: middle;"
                                    class="text-center">
                                        <i style="color: #239963; font-size: 22px;" class="fa fa-check"></i>

                                </td>

                                <td style="display: flex; border: none;">

                                    <button style="margin-top: 12px; width:30px; height: 30px;" data-toggle="modal" data-target="#myModal4"
                                            data-href="{{route('blog.edit',$blog->id)}}"
                                            class="btn btn-warning edit md-trigger">
                                        <i style="margin-right: -5px; position: relative; top: -2px;" class="fa fa-paint-brush" aria-hidden="true">
                                        </i>
                                    </button>
                                    <form action="{{ route('blog.destroy', $blog->id) }}"
                                          method="POST" class="frm">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}

                                        <button style=" margin-top: 12px; margin-right: 10px; width: 30px; height: 30px"
                                                class="btn btn-danger"><i style="margin-right: -4px; position: relative; top: -2px;" class="fa fa-trash"
                                                                          aria-hidden="true"></i></button>

                                    </form>
                                </td>
                            </tr>

                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <td colspan="5">
                                <ul class="pagination pull-right"></ul>
                            </td>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="modal inmodal" id="myModal4" tabindex="-1" role="dialog"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content animated fadeIn">
                <div class="modal-header">
                    <button type="button" class="close"
                            data-dismiss="modal"><span aria-hidden="true">&times;</span><span
                                class="sr-only">Close</span></button>
                    <h4 class="modal-title">ویرایش فرم</h4>
                    <small class="font-bold">این فرم در صفحه اصلی شما نشان
                        داده میشود
                    </small>
                </div>
                <div style="background-color: #fff !important; height:auto;" class="modal-body col-md-12">
                    <div class="container">

                    </div>
                </div>

            </div>
        </div>
    </div>



    @include('admin.layouts.success')
    @include('admin.layouts.errors')

@endsection

@section('script')
    <script src="js/cheouts.js"></script>
    <script src="js/time.js"></script>
    <script>

    </script>

@endsection

