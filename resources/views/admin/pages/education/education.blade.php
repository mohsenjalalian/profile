@extends('admin.layouts.master')



@section('content')


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
             <span class="pull-right">
            <h1>
    @if(count($educations) == 0)
                    <a href="{{route('createEducation')}}">
                <button class="btn btn-success">اضافه کردن</button>
            </a>
                @endif
تحصیلات
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
                            <th>دانشگاه</th>
                            <th>رشته</th>
                            <th>گرایش</th>
                            <th>لوگو</th>
                            <th>سال و ماه شروع</th>
                            <th>سال و ماه پایان</th>


                        </tr>
                        </thead>

                        <tbody>
                        @foreach($educations as $education)

                            <tr>
                                <td>{{$education->university_name}}</td>
                                <td>{{$education->field}}</td>
                                <td>{{$education->tendency}}</td>
                                <td><img style="width: 50px;height: 50px" src="{{$education->logo}}" alt="{{$education->logo}}"></td>
                                <td>{{$education->start_date}}</td>
                                <td>{{$education->finish_date}}</td>

                                <td>
                                    <a href="{{route('education.edit',$education->id)}}">
                                        <button class="btn btn-warning">اصلاح</button>
                                    </a>
                                </td>


                                <form action="{{ route('education.destroy', $education->id) }}" method="POST">
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
