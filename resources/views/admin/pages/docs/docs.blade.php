@extends('admin.layouts.master')



@section('content')
    <div class="content-wrapper clearfix">
        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                <h2>مقالات کتاب</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{route('profile')}}">خانه</a>
                    </li>
                    <li class="active">
                        <strong>مقالات کتاب</strong>
                    </li>
                </ol>
            </div>
        </div>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            <div style="margin-top: 20px;" class="col-lg-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        افزودن
                    </div>
                    <div class="panel-body">
                        <form id="contact" action="{{route('storeDocs')}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group{{ $errors->has('name') ? ' has-error': ''}}">
                                <div class="col-sm-10 col-md-12">
                                    <input oninvalid="return chek(this)" oninput="return chek2(this)" type="text" placeholder="نام کتاب"
                                           value="{{ Request::old('name') ?: ''}}" class="form-control m-b" name="name" tabindex="1" required autofocus>
                                    @if($errors->has('name'))
                                        <span class="help-block">{{ $errors->first('name')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('published_place') ? ' has-error': ''}}">
                                <div class="col-sm-10 col-md-12">
                                    <input oninvalid="return chek(this)" oninput="return chek2(this)" type="text" placeholder="شرکت انتشاراتی"
                                           value="{{ Request::old('published_place') ?: ''}}" class="form-control m-b" name="published_place" tabindex="1" required>
                                    @if($errors->has('published_place'))
                                        <span class="help-block">{{ $errors->first('published_place')}}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="container col-md-12">
                                <div class="form-group">
                                    <div class="form-group{{ $errors->has('published_year') ? ' has-error': ''}}">
                                        <div class="input-group">
                                            <div data-mdpersiandatetimepickershowing="false" title="" data-original-title="" data-mdpersiandatetimepickerselecteddatetime="{&quot;Year&quot;:1393,&quot;Month&quot;:10,&quot;Day&quot;:10,&quot;Hour&quot;:0,&quot;Minute&quot;:0,&quot;Second&quot;:0}" data-mdpersiandatetimepicker="" style="cursor: pointer;" class="input-group-addon" data-mddatetimepicker="true" data-trigger="click" data-targetselector="#fromDate1" data-groupid="group1" data-fromdate="true" data-enabletimepicker="false" data-placement="left">
                                                <span class="glyphicon glyphicon-calendar"></span>
                                            </div>
                                            <input data-mdpersiandatetimepickershowing="false" value="{{ Request::old('published_year') ?: ''}}" title="" data-original-title="" data-mdpersiandatetimepickerselecteddatetime="{&quot;Year&quot;:1393,&quot;Month&quot;:10,&quot;Day&quot;:9,&quot;Hour&quot;:0,&quot;Minute&quot;:0,&quot;Second&quot;:0}" data-mdpersiandatetimepicker="" class="form-control" id="fromDate1" placeholder="تاریخ انتشار" data-mddatetimepicker="true" data-trigger="click" data-targetselector="#fromDate1" data-groupid="group1" data-fromdate="true" data-enabletimepicker="false" data-placement="right" name="published_year" type="text">
                                        </div>
                                        @if($errors->has('published_year'))
                                            <span class="help-block">{{ $errors->first('published_year')}}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('link') ? ' has-error': ''}}">
                                <div class="col-sm-10 col-md-12">
                                    <input oninvalid="return chek(this)" oninput="return chek2(this)" type="text" placeholder="لینک به مقاله"
                                           value="{{ Request::old('link') ?: ''}}"   class="form-control m-b" name="link" tabindex="1" required autofocus>
                                    @if($errors->has('link'))
                                        <span class="help-block">{{ $errors->first('link')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="ibox float-e-margins">
                                    <div class="form-group{{ $errors->has('photo') ? ' has-error': ''}}">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <span class="btn btn-default btn-file"><span class="fileinput-new">بارگذاری</span><span class="fileinput-exists"><span
                                                        style="color: #2aca76;">بارگذاری شد</span></span>
                                            <input type="file"
                                                   value="{{ Request::old('photo') ?: ''}}" name="photo"></span>
                                        </div>
                                        @if($errors->has('photo'))
                                            <span class="help-block">{{ $errors->first('photo')}}</span>
                                        @endif
                                    </div>
                                </div>

                                <fieldset>
                                    <button class="btn btn-primary col-md-4" name="submit" type="submit" id="contact-submit" data-submit="...Sending">ارسال</button>
                                </fieldset>
                            </div>
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
                                <th style="width: 30px;" class="text-center">عکس</th>
                                <th class="text-center">نام</th>
                                <th class="text-center">انتشارات</th>
                                <th class="text-center">تاریخ انتشار</th>
                                <th class="text-center">لینک</th>
                                <th style="width: 30px;" class="text-center">تغییرات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($docs as $doc)

                                <tr>
                                    <td class="text-center"><img width="50" height="50" src="{{asset($doc->photo)}}" alt=""></td>
                                    <td style="padding-top: 22px;" class="text-center">{{$doc->name}}</td>
                                    <td style="padding-top: 22px;" class="text-center">{{$doc->published_place}}</td>
                                    <td style="padding-top: 20px;" class="text-center">{{$doc->published_year}}</td>
                                    <td style="padding-top: 22px;" class="text-center"><a href="{{$doc->link}}"><i style="color: #222; font-size: 20px;" class="fa fa-link" aria-hidden="true"></i> </a></td>

                                    <td style="display: flex; border: none;">
                                        <button style="margin-top: 12px; width:30px; height: 30px;" data-toggle="modal"
                                                data-href="{{ route('docs.edit', $doc->id) }}"
                                                data-target="#myModal2" class="btn btn-warning edit">
                                            <i style="margin-right: -3px;" class="fa fa-paint-brush" aria-hidden="true"></i></button>


                                        <form action="{{ route('docs.destroy', $doc->id) }}" method="POST">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}

                                            <button style="margin-right: 10px; margin-top: 12px; width: 30px; height: 30px"
                                                    class="btn btn-danger"><i style="margin-right: -3px" class="fa fa-trash"
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

    <div class="modal inmodal" id="myModal2" tabindex="-1" role="dialog"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content animated flipInY">
                <div class="modal-header">
                    <button type="button" class="close"
                            data-dismiss="modal"><span aria-hidden="true">&times;</span><span
                                class="sr-only">Close</span></button>
                    <h4 class="modal-title">ویرایش فرم</h4>
                    <small class="font-bold">این فرم در صفحه اصلی شما نشان
                        داده میشود
                    </small>
                </div>
                <div style="background-color: #fff !important; height: 470px;" class="modal-body">
                    <div class="container">

                    </div>
                </div>

            </div>
        </div>
    </div>

    @include('admin.layouts.success')
    @include('admin.layouts.errors')
@endsection


@section('scripts')
    $('button.edit').click(function(e){
    e.preventDefault();
    $.get($(this).attr('data-href'),function(data){
    $('#myModal2').find('.modal-body').html(data);
    })
    });
@endsection
