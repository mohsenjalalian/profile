@extends('admin.layouts.master')



@section('content')
    <div class="content-wrapper clearfix">
        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                <h2>مهارت ها</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{route('profile')}}">خانه</a>
                    </li>
                    <li class="active">
                        <strong>مهارت ها</strong>
                    </li>
                </ol>
            </div>
        </div>
        <div class="content-wrapper">
            <div style="margin-top: 20px;" class="col-lg-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        افزودن
                    </div>
                    <div class="panel-body">
                        <form id="contact" action="{{route('skills.store')}}" method="post">
                            {{csrf_field()}}


                            <div class="form-group{{ $errors->has('name') ? ' has-error': ''}}">
                                <div class="col-sm-10 col-md-12">
                                    <input oninvalid="return chek(this)" oninput="return chek2(this)" type="text"
                                           placeholder="نام "
                                           value="{{ Request::old('name') ?: ''}}" class="form-control m-b" name="name"
                                           tabindex="1" required autofocus>
                                    @if($errors->has('name'))
                                        <span class="help-block">{{ $errors->first('name')}}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="row">
                            @if(count($types) > 0)
                                <p style=" height: 22px; margin-right: 30px;">نوع مهارت</p>
                                <div style="margin-top: 40px;"
                                     class="form-group{{ $errors->has('type_id') ? ' has-error': ''}}">
                                    <div style="margin-top: 10px; margin-right: 15px; width: 280px;"
                                         class="ibox float-e-margins">
                                        <div class="form-group">
                                            <label class="font-noraml text-center"></label>
                                                <select oninvalid="return chek(this)" oninput="return chek2(this)"
                                                        style="width: 279px; margin-right: 15px;" name="type_id"
                                                        class="select2_demo_1 form-control">
                                                    <option value="{{ Request::old('type') ?: '0'}}">نوع را انتخاب کنید</option>
                                                    @foreach($types as $type)
                                                    <option value="{{$type->id}}">{{$type->name}}</option>
                                                    @endforeach
                                                </select>
                                        </div>
                                    </div>
                                    @if($errors->has('type_id'))
                                        <span class="help-block">{{ $errors->first('type_id')}}</span>
                                    @endif
                                </div>
                            @else
                                <p class="text-center">شما هیچ دسته بندی نساخته اید</p>
                            @endif
                        </div>


                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group{{ $errors->has('point') ? ' has-error': ''}}">
                                        <select oninvalid="return chek(this)" oninput="return chek2(this)" required
                                                style="margin-right: 15px; width: 280px;" name="point"
                                                class="select2_demo_1 form-control">
                                            <option value="{{ Request::old('point') ?: ''}}">امتیاز</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                        @if($errors->has('point'))
                                            <span class="help-block">{{ $errors->first('point')}}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>


                            <fieldset>
                                <button style="font-family: webmdesign;" class="btn btn-primary col-md-4" name="submit"
                                        type="submit" id="contact-submit" data-submit="...Sending">ارسال
                                </button>
                            </fieldset>
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
                                <th class="text-center">نوع</th>
                                <th class="text-center">نام</th>
                                <th class="text-center">امتیاز</th>
                                <th style="width: 30px;" class="text-center"> تغییرات</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($skills as $skill)
                                <tr>
                                    <td style="padding-top: 22px;" class="text-center">{{$skill->type->name}}</td>
                                    <td style="padding-top: 22px;" class="text-center">{{$skill->name}}</td>
                                    <td style="padding-top: 22px;" class="text-center">{{$skill->point}}</td>

                                    <td style="display: flex;">
                                        <button style="margin-top: 12px; width:30px; height: 30px;" data-toggle="modal"
                                                data-target="#myModal4"
                                                data-href="{{route('skills.edit',$skill->id)}}"
                                                class="btn btn-warning edit md-trigger">
                                            <i style="margin-right: -5px; position: relative; top: -2px;"
                                               class="fa fa-paint-brush" aria-hidden="true">
                                            </i>
                                        </button>

                    </div>
                </div>
                <form action="{{ route('skills.destroy', $skill->id) }}" method="POST" class="frm">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <button style=" margin-top: 12px; margin-right: 10px; width: 30px; height: 30px"
                            class="btn btn-danger"><i style="margin-right: -4px; position: relative; top: -2px;"
                                                      class="fa fa-trash"
                                                      aria-hidden="true"></i></button>

                </form>
                @endforeach
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
                <div style="background-color: #fff !important; height: 300px;" class="modal-body col-md-12">
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
