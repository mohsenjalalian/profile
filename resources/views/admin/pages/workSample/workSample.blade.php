@extends('admin.layouts.master')



@section('content')


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
             <span class="pull-right">
            <h1>
                    <a href="{{route('createWorkSample')}}">
                <button class="btn btn-success">اضافه کردن</button>
            </a>
      نمونه کار
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
                            <td>دسته بندی</td>
                            <td>مهارت</td>
                            <td>نام</td>
                            <td>عکس</td>

                        </tr>
                        </thead>

                        <tbody>
                        @foreach($workSamples as $workSample)
                            <tr>
                                <td>
                                @foreach($workSample->category as $cat)
                                {{$cat->name}},
                                @endforeach
                                </td>

                                <td>
                                    @foreach($workSample->skills as $skill)
                                        {{$skill->name}},
                                    @endforeach
                                </td>
                                <td>{{$workSample->name}}</td>
                                <td><img width="50" height="50" src="{{asset($workSample->photo)}}" alt=""></td>

                                <td>
                                    <a href="{{route('work-sample.edit',$workSample->id)}}">
                                        <button class="btn btn-warning">اصلاح</button>
                                    </a>
                                </td>

                                <form action="{{ route('work-sample.destroy', $workSample->id) }}" method="POST">
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
