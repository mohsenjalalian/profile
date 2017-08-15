@extends('admin.layouts.master')



@section('content')


    <div style="margin-top: 20px;" class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                فرم مشاهده پیغام
            </div>
                <div class="panel-body">
                    {{csrf_field()}}

                    <fieldset class="col-md-6">
                        <input class="form-control m-b"  type="text" name="name" tabindex="1" value="{{$message->name}}" disabled>
                    </fieldset>

                    <fieldset class="col-md-6">
                        <input class="form-control m-b"  type="text" name="email" tabindex="1" value="{{$message->email}}" disabled>
                    </fieldset>
                    <fieldset class="col-md-12">
                        <textarea class="form-control m-b" name="message" rows="8" cols="80"  tabindex="1" disabled>{{$message->message}}</textarea>
                    </fieldset>
                    <a href="{{route('message.edit',$message->id)}}"> <button class="btn btn-primary col-md-2" name="submit" type="submit" id="contact-submit"
                            data-submit="...Sending">پاسخ
                    </button>
                    </a>
                    </div>

        </div>
    </div>
@endsection
