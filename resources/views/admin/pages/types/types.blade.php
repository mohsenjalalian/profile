@extends('admin.layouts.master')



@section('content')
    <div class="content-wrapper clearfix">
        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                <h2> نوع مهارت ها</h2>
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
                        <form id="contact" action="{{route('types.store')}}" method="post">
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
                                <th class="text-center">نام</th>

                                <th style="width: 30px;" class="text-center"> تغییرات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($types as $type)

                                <tr>
                                    <td style="padding-top: 22px;" class="text-center">{{$type->name}}</td>

                                    <td style="display: flex;">
                                        <button style="margin-top: 12px; width:30px; height: 30px;" data-toggle="modal"
                                                data-target="#myModal4"
                                                data-href="{{route('types.edit',$type->id)}}"
                                                class="btn btn-warning edit md-trigger">
                                            <i style="margin-right: -5px; position: relative; top: -2px;"
                                               class="fa fa-paint-brush" aria-hidden="true">
                                            </i>
                                        </button>

                    </div>
                </div>
                <form action="{{ route('types.destroy', $type->id) }}" method="POST" class="frm">
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

@endsection
