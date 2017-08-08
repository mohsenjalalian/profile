@extends('admin.layouts.master')



@section('content')


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
             <span class="pull-right">
            <h1>
                    <a href="{{route('createLanguage')}}">
                <button class="btn btn-success">اضافه کردن</button>
            </a>
زبان های خارجی
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
                            <th>خواندن</th>
                            <th>نوشتن</th>
                            <th>صحبت کردن</th>
                            <th>شنیدن</th>

                        </tr>
                        </thead>

                        <tbody>
                        @foreach($languages as $language)

                            <tr>
                                <td>{{$language->name}}</td>
                                <td>{{$language->reading}}</td>
                                <td>{{$language->writing}}</td>
                                <td>{{$language->speaking}}</td>
                                <td>{{$language->listening}}</td>

                                <td>
                                    <a href="{{route('language.edit',$language->id)}}">
                                        <button class="btn btn-warning">اصلاح</button>
                                    </a>
                                </td>

                                <form action="{{ route('language.destroy', $language->id) }}" method="POST">
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
