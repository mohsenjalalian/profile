@extends('admin.layouts.master')



@section('content')

    <div class="content-wrapper clearfix">
        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                <h2>زبان</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{route('profile')}}">خانه</a>
                    </li>
                    <li class="active">
                        <strong>زبان</strong>
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
                        <form id="contact" action="{{route('storeLanguage')}}" method="post">
                            {{csrf_field()}}


                            <div class="form-group{{ $errors->has('name') ? ' has-error': ''}}">
                                <div class="col-sm-10 col-md-12">
                                    <input type="text" placeholder="نام زبان"
                                           value="{{ Request::old('name') ?: ''}}" class="form-control m-b"  name="name" tabindex="1" required autofocus>
                                    @if($errors->has('title'))
                                        <span class="help-block">{{ $errors->first('title')}}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group{{ $errors->has('reading') ? ' has-error': ''}}">
                                    <select name="reading" class="select2_demo_1 form-control">
                                        <option value="{{ Request::old('reading') ?: ''}}">خواندن</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                    @if($errors->has('reading'))
                                        <span class="help-block">{{ $errors->first('reading')}}</span>
                                    @endif
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="form-group{{ $errors->has('writing') ? ' has-error': ''}}">
                                    <select name="writing" class="select2_demo_1 form-control">
                                        <option value="{{ Request::old('writing') ?: ''}}">نوشتن </option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                    @if($errors->has('writing'))
                                        <span class="help-block">{{ $errors->first('writing')}}</span>
                                    @endif
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="form-group{{ $errors->has('speaking') ? ' has-error': ''}}">
                                    <select name="speaking" class="select2_demo_1 form-control">
                                        <option value="{{ Request::old('speaking') ?: ''}}">صحبت کردن</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                    @if($errors->has('speaking'))
                                        <span class="help-block">{{ $errors->first('speaking')}}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group{{ $errors->has('listening') ? ' has-error': ''}}">
                                    <select name="listening" class="select2_demo_1 form-control">
                                        <option value="{{ Request::old('listening') ?: ''}}">گوش کردن</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                    @if($errors->has('listening'))
                                        <span class="help-block">{{ $errors->first('listening')}}</span>
                                    @endif
                                </div>
                                <fieldset>
                                    <button class="btn btn-primary col-md-12" name="submit" type="submit" id="contact-submit" data-submit="...Sending">ارسال</button>
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
                                <th class="text-center">نام</th>
                                <th class="text-center">خواندن</th>
                                <th class="text-center">نوشتن</th>
                                <th class="text-center">صحبت کردن</th>
                                <th class="text-center">شنیدن</th>
                                <th style="width: 30px;" class="text-center">تغییرات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($languages as $language)

                                <tr>
                                    <td style="padding-top: 22px;" class="text-center">{{$language->name}}</td>
                                    <td style="padding-top: 22px;" class="text-center">{{$language->reading}}</td>
                                    <td style="padding-top: 22px;" class="text-center">{{$language->writing}}</td>
                                    <td style="padding-top: 22px;" class="text-center">{{$language->speaking}}</td>
                                    <td style="padding-top: 22px;" class="text-center">{{$language->listening}}</td>

                                    <td style="border: none; display: flex;">
                                        <a href="{{route('language.edit',$language->id)}}">
                                            <button style="margin-top: 10px; width: 30px; height: 30px;" data-toggle="modal" data-href="{{route('language.edit',$language->id)}}"
                                                    data-target="#myModal2" class="btn btn-warning edit"><i style="margin-right: -4px;"
                                                                                                            class="fa fa-paint-brush" aria-hidden="true"></i></button>
                                        </a>

                                        <form action="{{ route('language.destroy', $language->id) }}" method="POST">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}

                                            <button style=" margin-right: 10px; margin-top: 10px; width: 30px; height: 30px;"
                                                    class="btn btn-danger"><i style="margin-right: -3px;" class="fa fa-trash"
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
                <div style="background-color: #fff !important; height: 300px;" class="modal-body">
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