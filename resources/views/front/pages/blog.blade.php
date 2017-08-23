@if(!$blogs->isEmpty())
<main id="about6" class="container">
    <h2 style="margin-top: 50px;" class="text-ex2">بلاگ من</h2>
    <div id="owl7" class="owl-carousel" style="direction:ltr">
        @foreach($blogs as $blog)
            <div class="item">
                <section class="pull-right col-xs-12 col-sm-12 col-md-12 blog">
                    <div class="box-small2">


                        <div id="owl6" class="owl-carousel" style="direction:ltr">
                            @foreach($blog->album as $value)
                                <div class="item">
                                    @if(!empty($value->photo))
                                        <div class="img-scale"><img class="img-responsive"
                                                                    src="{{asset($value->photo)}}"
                                                                    width="540px"></div>
                                    @else
                                        <div class="img-scale">
                                            <img class="img-responsive" src="{{asset('/image/profile.png')}}"
                                                 width="540px">
                                        </div>
                                    @endif
                                </div>

                            @endforeach
                        </div>

                        <h2 class="text-bl">{{$blog->title}}</h2>
                        <p class="text-bl2">{{$blog->description}}</p>
                        <br>
                        <br>
                        <hr style="border:1px solid #DFDFDF; width:100%;">
                        <span class="blog-mg2">{{$blog->date}}:اشتراک</span>
                            <a href="https://www.facebook.com/sharer/sharer.php?u=#blog">
                                <span class="face-bl"><i style="font-size: 22px;" class="fa fa-facebook"></i></span>
                            </a>
                            <a href="https://plus.google.com/share?url=#blog">
                                <span class="google"><i style="font-size: 22px;" class="fa fa-google-plus"></i> </span>
                            </a>
                            <a href="https://twitter.com/home?status=#blog">
                                <span class="twit"><i style="font-size: 22px;" class="fa fa-twitter"></i> </span>
                            </a>

                    </div>
                </section>
            </div>
        @endforeach
    </div>
</main>
@endif
