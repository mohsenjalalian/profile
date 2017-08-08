@extends('admin.layouts.master')



@section('content')


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
             <span class="pull-right">
            <h1>
                <a href="{{route('createCertificate')}}">
                <button class="btn btn-success">اضافه کردن</button>
            </a>

گواهی ها

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
                            <th>توضیحات</th>
                            <th>عکس</th>
                            <th>نوع</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($certificates as $certificate)

                            <tr>
                                <td>{{$certificate->name}}</td>
                                <td>{{$certificate->info}}</td>
                                <td><img style="width: 50px;height: 50px" ; src="{{$certificate->photo}}"
                                         alt="{{$certificate->photo}}"></td>
                                <td>{{$certificate->type}}</td>

                                <td>
                                    <a href="{{route('certification.edit',$certificate->id)}}">
                                        <button class="btn btn-warning">اصلاح</button>
                                    </a>
                                </td>


                                <form action="{{ route('certification.destroy', $certificate->id) }}" method="POST">
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
