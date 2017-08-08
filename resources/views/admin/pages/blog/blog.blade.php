@extends('admin.layouts.master')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
             <span class="pull-right">
            <h1>
            <a href="{{route('blog.create')}}">
                <button class="btn btn-success pull-left"> اضافه کردن </button>
            </a>
                بلاگ
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
                            <th>تیتر</th>
                            <th>توضیحات</th>
                            <th>تاریخ</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($blogs as $blog)

                            <tr>
                                <td>{{$blog->title}}</td>
                                <td>{{$blog->description}}</td>
                                <td>{{$blog->date}}</td>
                                @foreach($blog->album as $album)
                                    <td><img width="50" height="50"
                                             src="{{\App\Http\Controllers\BlogController::ALBUM_PATH.'/'.$album->photo}}"
                                             alt="{{$album->photo}}"></td>
                                @endforeach
                                <td>
                                    <a href="{{route('blog.edit',$blog->id)}}">
                                        <button class="btn btn-warning">اصلاح</button>
                                    </a>
                                </td>

                                <form action="{{ route('blog.destroy', $blog->id) }}" method="POST">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <td>
                                        <button class="btn btn-danger">پاک کردن</button>
                                    </td>
                                </form>
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
