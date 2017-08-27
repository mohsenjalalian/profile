@extends('admin.layouts.master')
@section('content')
    <div class="content-wrapper clearfix">
        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                <h2>گالری</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{route('profile')}}">خانه</a>
                    </li>
                    <li class="active">
                        <strong>گالری</strong>
                    </li>
                </ol>
            </div>
        </div>
    <div class="content-wrapper">
        <div class="wrapper wrapper-content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-content">
                            <div class="lightBoxGallery">
                                @foreach($albums as $album)
                                    <a href="{{\App\Http\Controllers\BlogController::ALBUM_PATH.'/'.$album->photo}}"
                                       data-gallery="">
                                        <img src="{{\App\Http\Controllers\BlogController::ALBUM_PATH.'/'.$album->photo}}"
                                             width="100" height="100" alt="{{$album->photo}}">
                                    </a>
                            @endforeach
                                <div id="blueimp-gallery" class="blueimp-gallery">
                                    <div class="slides"></div>
                                    <h3 class="title"></h3>
                                    <a class="prev">‹</a>
                                    <a class="next">›</a>
                                    <a class="close">×</a>
                                    <a class="play-pause"></a>
                                    <ol class="indicator"></ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="js/plugins/blueimp/jquery.blueimp-gallery.min.js"></script>
@endsection

