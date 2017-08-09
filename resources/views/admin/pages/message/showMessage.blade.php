@extends('admin.layouts.master')



@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <div class="container">

                    <h3>فرم مشاهده پیغام</h3>

                    {{csrf_field()}}

                        <fieldset>
                            <input  type="text" name="name" tabindex="1" value="{{$message->name}}" disabled>
                        </fieldset>


                        <fieldset>
                            <input  type="text" name="email" tabindex="1" value="{{$message->email}}" disabled>
                        </fieldset>


                        <fieldset>
                            <textarea name="message" rows="8" cols="80"  tabindex="1" disabled>{{$message->message}}</textarea>
                        </fieldset>


                <a href="{{route('message.edit',$message->id)}}"><button>پاسخ </button></a>

        </div>
    </div>
@endsection
