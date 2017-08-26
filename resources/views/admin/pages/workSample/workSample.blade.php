@extends('admin.layouts.master')



@section('content')
    <div class="content-wrapper">
        <div class="content-wrapper clearfix">
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>نمونه کارها</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="{{route('profile')}}">خانه</a>
                        </li>
                        <li class="active">
                            <strong>نمونه کار</strong>
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
                        <form id="contact" action="{{route('work-sample.store')}}" method="post"
                              enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div style="margin-top: -20px;"
                                 class="form-group{{ $errors->has('name') ? ' has-error': ''}}">
                                <div class="col-sm-10 col-md-12">
                                    <label>نام</label>
                                    <input oninvalid="return chek(this)" oninput="return chek2(this)" type="text"
                                           placeholder="نام"
                                           value="{{ Request::old('name') ?  : ''}}" class="form-control m-b"
                                           name="name"
                                           tabindex="1" required autofocus>
                                    @if($errors->has('name'))
                                        <span class="help-block">{{ $errors->first('name')}}</span>
                                    @endif
                                </div>
                            </div>

                            <div style="margin-top: -20px;"
                                 class="form-group{{ $errors->has('link') ? ' has-error': ''}}">
                                <div class="col-sm-10 col-md-12">
                                    <label>لینک</label>
                                    <input oninvalid="return chek(this)" oninput="return chek2(this)" type="text"
                                           placeholder="لینک"
                                           value="{{ Request::old('link') ?  : ''}}" class="form-control m-b"
                                           name="link"
                                           tabindex="1"  autofocus>
                                    @if($errors->has('link'))
                                        <span class="help-block">{{ $errors->first('link')}}</span>
                                    @endif
                                </div>
                            </div>


                            @if(count($categories) > 0)
                                <p style="position:relative; height: 22px; bottom: 0px; right: 15px;">دسته بندی</p>
                                <div style="margin-top: 70px;"
                                     class="form-group{{ $errors->has('category_id[]') ? ' has-error': ''}}">
                                    <div style="margin-top: 10px; margin-right: 15px; width: 280px;"
                                         class="ibox float-e-margins">
                                        <div class="form-group">
                                            <label class="font-noraml text-center"></label>
                                            <div>
                                                <select data-placeholder="" name="category_id[]"
                                                        class="chosen-select" multiple
                                                        style="width:0px;" tabindex="4">
                                                    @foreach($categories as $category )
                                                        <option name="category_id[]"
                                                                value="{{$category->id}}">{{$category->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <p style="padding-top:8px;">بیش از ۳ کاراکتر وارد نشود</p>
                                        </div>
                                    </div>
                                    @if($errors->has('category_id[]'))
                                        <span class="help-block">{{ $errors->first('category_id[]')}}</span>
                                    @endif
                                </div>
                            @else
                                <p class="text-center">شما هیچ دسته بندی نساخته اید(ضروری)</p>
                            @endif



                            @if(count($skills) > 0)
                                <p style="position: relative; top: 2px; right: 15px;">مهارت ها</p>
                                <div class="form-group{{ $errors->has('skill_id[]') ? ' has-error': ''}}">
                                    <div style="margin-top: -15px; margin-right: 15px; width: 280px; "
                                         class="ibox float-e-margins">
                                        <div class="form-group">
                                            <label class="font-noraml text-center"></label>
                                            <div>
                                                <select data-placeholder=""  name="skill_id[]"
                                                        class="chosen-select" multiple
                                                        style="width:1px !important;" tabindex="4">
                                                    @foreach($skills as $skill )
                                                        <option name="skill_id[]"
                                                                value="{{$skill->id}}">{{$skill->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                         <p style="padding-top:8px;">بیش از ۵ کاراکتر وارد نشود</p>
                                        </div>
                                    </div>
                                    @if($errors->has('skill_id[]'))
                                        <span class="help-block">{{ $errors->first('skill_id[]')}}</span>
                                    @endif
                                </div>
                            @else
                                <p class="text-center">شما هیچ مهارتی نساخته اید</p>
                            @endif

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="ibox float-e-margins">
                                        <div class="form-group{{ $errors->has('photo') ? ' has-error': ''}}">
                                            <div style="width: 280px; margin-right: 15px;"
                                                 class="fileinput fileinput-new input-group" data-provides="fileinput">
                                                <div class="form-control" data-trigger="fileinput">
                                                    <p class="fileinput-exists" style="color: #2aca76;">بارگذاری شد</p>
                                                </div>
                                                <span style="border: 1px solid #e5e6e7;"
                                                      class="input-group-addon btn btn-default btn-file">
                                                    <span class="fileinput-new">بارگذاری</span>
                                                    <span class="fileinput-exists">عوض کردن</span>
                                                    <input type="file" value="{{ Request::old('photo') ?: ''}}"
                                                           name="photo">
                                                </span>
                                                <a href="#" class="input-group-addon btn btn-default fileinput-exists"
                                                   data-dismiss="fileinput">پاک کردن</a>
                                            </div>
                                            <p style="font-size: 12px; margin-left: 20px;" class="pull-right colorpicker">۳۰۰ * ۳۰۰</p>
                                            @if($errors->has('photo'))
                                                <span class="help-block">{{ $errors->first('photo')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button style="font-family: webmdesign; margin-top: 5px; margin-right: 15px;"
                                    class="btn btn-primary col-md-4" name="submit" type="submit" id="contact-submit"
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
                                <td style="width: 30px;" class="text-center">عکس</td>
                                <td class="text-center">نام</td>
                                <td class="text-center">لینک</td>
                                <td class="text-center">دسته بندی</td>
                                <td class="text-center">مهارت</td>
                                <th style="width: 30px;" class="text-center">تغییرات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($workSamples as $workSample)


                                <tr>

                                    <td style="vertical-align: middle;" class="text-center">
                                        @if(empty($workSample->photo))
                                            <img width="50" height="50" src="/images/front/site.png"
                                                 alt="نمونه کار">
                                        @else
                                        <img width="50" height="50" src="{{asset($workSample->photo)}}"
                                             alt="{{$workSample->photo}}">
                                        @endif
                                    </td>

                                    <td style="vertical-align: middle;"
                                        class="text-center">{{$workSample->name}}
                                    </td>

                                    <td style="vertical-align: middle;"
                                        class="text-center">{{$workSample->link}}
                                    </td>



                                    <td style="vertical-align: middle;" class="text-center">
                                        @foreach($workSample->category as $cat)

                                            {{$cat->name}}

                                        @endforeach
                                    </td>
                                    <td style="vertical-align: middle;" class="text-center">
                                        @foreach($workSample->skills as $skill)
                                            {{$skill->name}}
                                        @endforeach
                                    </td>


                                    <td style="border: none;">
                                        <button style="margin-top: 12px; margin-right: 10px; width:30px; height: 30px;"
                                                data-toggle="modal" data-target="#myModal4"
                                                data-href="{{ route('work-sample.edit', $workSample->id) }}"
                                                class="btn btn-warning edit md-trigger">
                                            <i style="margin-right: -5px; position: relative; top: -2px;"
                                               class="fa fa-paint-brush" aria-hidden="true">
                                            </i>
                                        </button>

                                        <form action="{{ route('work-sample.destroy', $workSample->id) }}"
                                              method="POST" class="frm">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}

                                            <button style=" margin-top: 1px; margin-right: 10px; width: 30px; height: 30px"
                                                    class="btn btn-danger"><i
                                                        style="margin-right: -4px; position: relative; top: -2px;"
                                                        class="fa fa-trash"
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
                <div style="background-color: #fff !important; height: auto;" class="modal-body col-md-12">
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
    <script src="js/plugins/chosen/chosen.jquery.js"></script>
    <script src="js/plugins/iCheck/icheck.min.js"></script>
    <script src="js/plugins/footable/footable.all.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.footable').footable();
            $('.footable2').footable();
        });
    </script>
    <script>
        $(document).ready(function () {
            $('.chosen-select').chosen({width: "100%"});



        });
    </script>
@endsection
