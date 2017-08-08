@extends('admin.layouts.master')



@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
             <span class="pull-right">
            <h1>
    @if(count($profiles) == 0)
                    <a href="{{route('createProfile')}}">
                <button class="btn btn-success">اضافه کردن</button>
            </a>
                @endif
                پروفایل
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
                            <th>عکس</th>
                            <th>نام</th>
                            <th>نام خانوادگی</th>
                            <th>آخرین مدرک تحصیلی</th>
                            <th>تولد</th>
                            <th> تاهل</th>
                            <th>خدمت</th>
                            <th> تولد</th>
                            <th>جنسیت</th>
                            <th>شغل</th>
                            <th>کاور</th>
                            <th>PDF</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($profiles as $profile)

                            <tr>
                                <td><img width="50" height="50" src="{{asset($profile->photo)}}" alt="{{$profile->photo}}"></td>
                                <td>{{$profile->first_name}}</td>
                                <td>{{$profile->last_name}}</td>
                                <td>{{$profile->last_degree}}</td>
                                <td>{{$profile->birth_day}}</td>
                                <td>{{$profile->marriage}}</td>
                                <td>{{$profile->military}}</td>
                                <td>{{$profile->birth_place}}</td>
                                <td>{{$profile->gender}}</td>
                                <td>{{$profile->job}}</td>
                                <td><img width="50" height="50" src="{{asset($profile->cover)}}" alt="{{$profile->cover}}"></td>
                                <td><img width="50" height="50" src="{{asset($profile->pdf)}}" alt="{{$profile->pdf}}"></td>

                                <td>
                                    <a href="{{route('profile.edit',$profile->id)}}">
                                        <button class="btn btn-warning">اصلاح</button>
                                    </a>
                                </td>


                                <form action="{{ route('profile.destroy', $profile->id) }}" method="POST">
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
