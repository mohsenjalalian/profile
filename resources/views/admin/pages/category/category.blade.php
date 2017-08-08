@extends('admin.layouts.master')



@section('content')


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
             <span class="pull-right">
            <h1>
                <a href="{{route('createCategory')}}">
                <button class="btn btn-success">اضافه کردن</button>
            </a>

دسته بندی

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
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($categories as $category)

                            <tr>
                                <td>{{$category->name}}</td>

                                <td>
                                    <a href="{{route('category.edit',$category->id)}}">
                                        <button class="btn btn-warning">اصلاح</button>
                                    </a>
                                </td>


                                <form action="{{ route('category.destroy', $category->id) }}" method="POST">
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
