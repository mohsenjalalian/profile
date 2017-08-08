@extends('admin.layouts.master')



@section('content')


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
             <span class="pull-right">
            <h1>
                    <a href="{{route('createWorkExperience')}}">
                <button class="btn btn-success">اضافه کردن</button>
            </a>
تجارب کاری
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
                            <th>موقعیت</th>
                            <th>شرکت</th>
                            <th>شهر</th>
                            <th>سال شروع</th>
                            <th>سال پایان</th>
                            <th>توضیحات</th>

                        </tr>
                        </thead>

                        <tbody>
                        @foreach($workExperiences as $workExperience)

                            <tr>
                                <td>{{$workExperience->title}}</td>
                                <td>{{$workExperience->company}}</td>
                                <td>{{$workExperience->city}}</td>
                                <td>{{$workExperience->start_date}}</td>
                                <td>{{$workExperience->finish_date}}</td>
                                <td>{{$workExperience->about}}</td>

                                <td>
                                    <a href="{{route('work-experience.edit',$workExperience->id)}}">
                                        <button class="btn btn-warning">اصلاح</button>
                                    </a>
                                </td>


                                <form action="{{ route('work-experience.destroy',$workExperience->id) }}" method="POST">
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
