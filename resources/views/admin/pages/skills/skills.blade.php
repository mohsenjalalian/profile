@extends('admin.layouts.master')



@section('content')


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
             <span class="pull-right">
            <h1>
                <a href="{{route('createSkills')}}">
                <button class="btn btn-success">اضافه کردن</button>
            </a>
مهارت
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
                            <th>نوع</th>
                            <th>نام</th>
                            <th>امتیاز</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($skills as $skill)

                            <tr>
                                <td>{{$skill->type}}</td>
                                <td>{{$skill->name}}</td>
                                <td>{{$skill->point}}</td>

                                <td>
                                    <a href="{{route('skills.edit',$skill->id)}}">
                                        <button class="btn btn-warning">اصلاح</button>
                                    </a>
                                </td>


                                <form action="{{ route('skills.destroy', $skill->id) }}" method="POST">
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
