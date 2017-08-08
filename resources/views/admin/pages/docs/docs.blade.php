@extends('admin.layouts.master')



@section('content')


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
             <span class="pull-right">
            <h1>
                    <a href="{{route('createDocs')}}">
                <button class="btn btn-success">اضافه کردن</button>
            </a>
مقالات و کتب
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
                            <th>انتشارات</th>
                            <th>تاریخ انتشار</th>
                            <th>لینک</th>
                            <th>عکس</th>

                        </tr>
                        </thead>

                        <tbody>
                        @foreach($docs as $doc)

                            <tr>
                                <td>{{$doc->name}}</td>
                                <td>{{$doc->published_place}}</td>
                                <td>{{$doc->published_year}}</td>
                                <td><a href="{{$doc->link}}">{{$doc->link}}</a></td>
                                <td><img width="50" height="50" src="{{asset($doc->photo)}}" alt=""></td>

                                <td>
                                    <a href="{{route('docs.edit',$doc->id)}}">
                                        <button class="btn btn-warning">اصلاح</button>
                                    </a>
                                </td>

                                <form action="{{ route('docs.destroy', $doc->id) }}" method="POST">
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
