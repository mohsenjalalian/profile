@extends('admin.layouts.master')



@section('content')
        <div class="wrapper wrapper-content">
            <div class="row">
                <div class="col-lg-12 animated fadeInRight">
                    <div class="mail-box-header">

                      <span>پیغام</span>  <button style="font-size: 12px;" class="btn btn-primary btn-sm">{{translateDigits(count($messages))}} </button>
                    </div>
                    <div class="mail-box">

                        <table class="table table-hover table-mail">
                            <thead>
                            <tr>
                                <th class="text-center">نام</th>
                                <th class="text-center">پیام</th>
                                <th class="text-center">ایمیل</th>
                                <th class="text-center">زمان ارسال</th>
                                <th class="text-center">تغییرات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($messages as $message)
                            <tr class="unread">
                                <td style="vertical-align: middle;" class="text-center mail-ontact">{{$message->name}}</td>
                                <td style="vertical-align: middle;" class="text-center mail-subject">{{$message->message}}</td>
                                <td style="vertical-align: middle;" class="text-center mail-date">{{$message->email}}</td>
                                <td style="vertical-align: middle;" class="text-center mail-date" style="direction: ltr">{{translateDigits($message->created_at->diffInHours())}} ساعت قبل </td>
                                <td style="vertical-align: middle;" class="text-center"><a href="{{route('message.show',$message->id)}}"><button style="font-family: webmdesign;" class="btn btn-primary">مشاهده </button></a></td>
                            </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
@endsection
