@extends('admin.layouts.master')



@section('content')


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
             <span class="pull-right">
            <h1>
                <a href="{{route('createContact')}}">
                <button class="btn btn-success">اضافه کردن</button>
            </a>
                راه های ارتباطی
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
                            <th>ایمیل</th>
                            <th>تلفن</th>
                            <th>موبایل</th>
                            <th>شماره دفتر</th>
                            <th>کد QR</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($contacts as $contact)

                            <tr>
                                <td>{{$contact->email}}</td>
                                <td>{{$contact->phone_number}}</td>
                                <td>{{$contact->mobile}}</td>
                                <td>{{$contact->office_number}}</td>
                                <td><img style="width: 50px;height: 50px" src="{{$contact->qr_code}}"
                                         alt="{{$contact->qr_code}}"></td>

                                <td>
                                    <a href="{{route('contact.edit',$contact->id)}}">
                                        <button class="btn btn-warning">اصلاح</button>
                                    </a>
                                </td>


                                <form action="{{ route('contact.destroy', $contact->id) }}" method="POST">
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
