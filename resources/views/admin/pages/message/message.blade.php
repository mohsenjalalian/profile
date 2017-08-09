@extends('admin.layouts.master')



@section('content')


        <div class="wrapper wrapper-content">
            <div class="row">
                {{--<div class="col-lg-3">--}}
                    {{--<div class="ibox float-e-margins">--}}
                        {{--<div class="ibox-content mailbox-content">--}}
                            {{--<div class="file-manager">--}}
                                {{--<div class="space-25"></div>--}}
                                {{--<li><a href="mailbox.html"> <i class="fa fa-inbox "></i> پیغام ها <span class="label label-warning pull-right">16</span> </a></li>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                <div class="col-lg-9 animated fadeInRight">
                    <div class="mail-box-header">
                        <h2>
                            پیغام ها (16)
                        </h2>
                    </div>
                    <div class="mail-box">

                        <table class="table table-hover table-mail">
                            <tbody>
                            @foreach($messages as $message)
                            <tr class="unread">
                                <td class="mail-ontact">{{$message->name}}</td>
                                <td class="mail-subject">{{$message->subject}}</td>
                                <td class="text-right mail-date">{{$message->email}}</td>
                                <td class="text-right mail-date" style="direction: ltr">{{$message->created_at->diffForHumans()}}</td>
                                <td><a href="{{route('message.show',$message->id)}}"><button>مشاهده </button></a></td>
                            </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
@endsection
