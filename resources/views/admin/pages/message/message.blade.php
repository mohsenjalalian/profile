@extends('admin.layouts.master')



@section('content')


        <div class="wrapper wrapper-content">
            <div class="row">
                <div class="col-lg-12 animated fadeInRight">
                    <div class="mail-box-header">

                      <span>پیغام</span>  <button style="font-size: 12px;" class="btn btn-primary btn-sm">{{count($messages)}} </button>
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
                                <td><a href="{{route('message.show',$message->id)}}"><button style="font-family: webmdesign;" class="btn btn-primary">مشاهده </button></a></td>
                            </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
@endsection
