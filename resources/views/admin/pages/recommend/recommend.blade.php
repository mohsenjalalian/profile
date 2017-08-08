@extends('admin.layouts.master')



@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

    <form id="contact" action="{{route('recommend.store')}}" enctype="multipart/form-data" method="post">
        <h3>فرم نظرات مدیران</h3>
        <h4>اطلاعات این فرم در صفحه ایندکس شما نمایش داده میشود</h4>

        {{csrf_field()}}
        <div class="col-sm-10">
            <input type="text" placeholder="Default input" class="form-control m-b">
        </div>
    <div class="input-group m-b">
        <div class="form-group{{ $errors->has('name') ? ' has-error': ''}}">
            <input type="text" class="form-control" placeholder="نام شخص" name="name" tabindex="1" required autofocus>
            @if($errors->has('name'))
                <span class="help-block">{{ $errors->first('name')}}</span>
            @endif
        </div>

        <div class="input-group m-b">
            <div class="form-group{{ $errors->has('position') ? ' has-error': ''}}">
                <input type="text" class="form-control" placeholder="موقعیت شغلی" name="position" tabindex="1" required autofocus>
                @if($errors->has('position'))
                    <span class="help-block">{{ $errors->first('position')}}</span>
                @endif
            </div>

            <div class="input-group m-b col-md-6">
                <div class="form-group{{ $errors->has('company') ? ' has-error': ''}}">
                    <input type="text" class="form-control" placeholder="شرکت" type="text" name="company" tabindex="1" required autofocus>
                    @if($errors->has('company'))
                        <span class="help-block">{{ $errors->first('company')}}</span>
                    @endif
                </div>

                <div class="input-group m-b">
                    <div class="form-group{{ $errors->has('info') ? ' has-error': ''}}">
                        <input type="text" class="form-control" placeholder="توضیحات" type="text" name="info" tabindex="1" required autofocus>
                        @if($errors->has('info'))
                            <span class="help-block">{{ $errors->first('info')}}</span>
                        @endif
                    </div>
</div>
            </div>
        </div>
    </div>
    </form>

    <!-- Content Wrapper. Contains page content -->

        <!-- Content Header (Page header) -->
        <section class="content-header">
             <span class="pull-right">
            <h1>
                    <a href="{{route('createRecommend')}}">
                <button class="btn btn-success">اضافه کردن</button>
            </a>
نظرات مدیران
            </h1>

                 </span>
        </section>
        @include('admin.layouts.success')
        @include('admin.layouts.errors')
        <br>
        <br>

        <!-- Main content -->
        <section class="invoice" style="direction: rtl">


            <!-- Table row -->
            <div class="row">
                <div class="col-xs-12 table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>نام</th>
                            <th>سمت</th>
                            <th>شرکت</th>
                            <th>توضیحات</th>
                            <th>عکس</th>


                        </tr>
                        </thead>

                        <tbody>
                        @foreach($recommends as $recommend)

                            <tr>
                                <td>{{$recommend->name}}</td>
                                <td>{{$recommend->position}}</td>
                                <td>{{$recommend->company}}</td>
                                <td>{{$recommend->info}}</td>
                                <td><img style="width: 50px;height: 50px" src="{{$recommend->photo}}" alt="{{$recommend->photo}}"></td>

                                <td>
                                    <a href="{{route('recommend.edit',$recommend->id)}}">
                                        <button class="btn btn-warning">اصلاح</button>
                                    </a>
                                </td>


                                <form action="{{ route('recommend.destroy', $recommend->id) }}" method="POST">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <td>
                                        <button class="btn btn-danger">پاک کردن</button>
                                    </td>
                                </form>


                                </td>


                            </tr>

                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->


        </section>

    </div>




@endsection
