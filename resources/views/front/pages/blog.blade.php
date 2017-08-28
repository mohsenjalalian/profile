@if(!$blogs->isEmpty())
@inject('photo',\App\Http\Controllers\BlogController)

    <main id="about6" class="container">
        <h2 style="margin-top: 20px;" class="text-ex2">بلاگ من</h2>
        @if($blogs->count() == 1)
            <div class="col-md-6">
                @foreach($blogs as $blog)
                    <div class="item">
                        <section class="pull-right col-xs-12 col-sm-12 col-md-12 blog">
                            <div class="box-small2">
                                <div id="owl{{$blog->id}}" class="owl-carousel owl6" style="direction: ltr;">
                                    @if(!$blog->album->isEmpty())
                                        @foreach($blog->album as $value)
                                            <div class="item">
                                                <div class="img-scale">
                                                    <img class="img-responsive"
                                                         src="{{$photo::ALBUM_PATH.'/'. $value->photo}}" width="540px">
                                                </div>
                                            </div>
                                        @endforeach
                                    @else
                                        <div class="item">
                                            <div class="img-scale">
                                                <img class="img-responsive" src="/images/front/blog.png" width="540px">
                                            </div>
                                        </div>
                                    @endif
                                </div>
                                <h2 class="text-bl">{{$blog->title}}</h2>
                                <p style="font-size: 12px;" class="text-bl2 mCustomScrollbar content-a44" data-mcs-theme="minimal-dark">{{$blog->description}}</p>
                                <hr style="border:1px solid #DFDFDF; width:100%;">
                                <span class="blog-mg2">{{$blog->date}}</span>
                                <p class="text-fe"><span class="hidden-xs" style="text-align: right; float: right; font-size: 20px; padding-left: 20px;">اشتراک :</span>
                                    <a href="https://www.facebook.com/sharer/sharer.php?u={{route('home')}}#blog">
                                        <span class="face-bl"><i style="font-size: 22px;" class="fa fa-facebook"></i></span>
                                    </a>
                                    <a href="https://plus.google.com/share?url={{route('home')}}#blog">
                                        <span class="google"><i style="font-size: 22px;" class="fa fa-google-plus"></i> </span>
                                    </a>
                                    <a href="https://twitter.com/home?status={{route('home')}}#blog">
                                        <span class="twit"><i style="font-size: 22px;" class="fa fa-twitter"></i> </span>
                                    </a>
                                    <a href="https://twitter.com/home?status={{route('home')}}#blog">
                                        <span class="telegram"><i style="font-size: 22px;" class="fa fa-paper-plane"></i> </span>
                                    </a>
                                </p>
                            </div>
                        </section>
                    </div>
                @endforeach
            </div>

@else
            <div id="owl7" class="owl-carousel" style="direction: ltr;">
                @foreach($blogs as $blog)
                    <div class="item">
                        <section class="pull-right col-xs-12 col-sm-12 col-md-12 blog">
                            <div class="box-small2">
                                <div id="owl_{{$blog->id}}" class="owl-carousel owl6">
                                @if(!$blog->album->isEmpty())
                                        @foreach($blog->album as $value)
                                            {{--{{dump($value)}}--}}
                                            <div class="item">
                                                <div class="img-scale">
                                                    <img class="img-responsive"
                                                         src="{{$photo::ALBUM_PATH.'/'. $value->photo}}" width="540px">
                                                </div>
                                            </div>
                                        @endforeach
                                @else
                                    <div class="item">
                                        <div class="img-scale">
                                            <img class="img-responsive" src="/images/front/blog.png" width="540px">
                                        </div>
                                    </div>
                                @endif
                                </div>

                                <h2 class="text-bl">{{$blog->title}}</h2>
                                <p style="font-size: 12px;" class="text-bl2 mCustomScrollbar content-a44" data-mcs-theme="minimal-dark">{{$blog->description}}</p>
                                <hr style="border:1px solid #DFDFDF; width:100%;">
                                <span class="blog-mg2">{{$blog->date}}</span>
                                <p class="text-fe"><span class="hidden-xs" style="text-align: right; float: right; font-size: 20px; padding-left: 20px;">: اشتراک</span>
                                    <a href="https://www.facebook.com/sharer/sharer.php?u={{route('home')}}#blog">
                                        <span class="face-bl"><i style="font-size: 22px;" class="fa fa-facebook"></i></span>
                                    </a>
                                    <a href="https://plus.google.com/share?url={{route('home')}}#blog">
                                        <span class="google"><i style="font-size: 22px;" class="fa fa-google-plus"></i> </span>
                                    </a>
                                    <a href="https://twitter.com/home?status={{route('home')}}#blog">
                                        <span class="twit"><i style="font-size: 22px;" class="fa fa-twitter"></i> </span>
                                    </a>
                                    <a href="https://twitter.com/home?status={{route('home')}}#blog">
                                        <span class="telegram"><i style="font-size: 22px;" class="fa fa-paper-plane"></i> </span>
                                    </a>
                                </p>
                            </div>
                        </section>
                    </div>
                @endforeach
            </div>
            @endif

</main>
@endif
