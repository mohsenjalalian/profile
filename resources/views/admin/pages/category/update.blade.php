@extends('admin.layouts.master')



@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <div class="container">
            <form id="contact" action="{{route('category.update',$category->id)}}" method="post">
                {{csrf_field()}}
                {{ method_field('PUT') }}
                <div class="form-group{{ $errors->has('name') ? ' has-error': ''}}">
                    <fieldset>
                        <input class="form-control m-b col-md-4" type="text" name="name" value="{{$category->name}}" required>
                    </fieldset>
                    @if($errors->has('name'))
                        <span class="help-block">{{ $errors->first('name')}}</span>
                    @endif
                </div>

                <div style="margin-top: -20px;" class="modal-footer col-md-5">
                    <button type="button" class="btn btn-white" data-dismiss="modal">بستن</button>
                    <button name="submit" type="submit" id="contact-submit" data-submit="...Sending"
                            class="btn btn-primary">اعمال تغیرات
                    </button>
                </div>

            </form>

        </div>
    </div>
@endsection