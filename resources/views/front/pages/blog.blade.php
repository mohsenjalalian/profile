
<main id="about6" class="container">
    <h2 class="text-ex2">بلاگ من</h2>
    @foreach($blogs as $blog)
    <section class="pull-left col-xs-12 col-sm-12 col-md-6 blog">
        <div class="box-small1">
            <div id="owl5" class="owl-carousel" style="direction:ltr">
                @foreach($blog->album as $value)
                <div class="item">
                    <div class="img-scale"><img class="img-responsive" src="{{$value->photo}}" width="540px"></div>
                </div>
                @endforeach
                {{--<div class="item">--}}
                    {{--<div class="img-scale"><img class="img-responsive" src="images/front/blog-2.jpg" width="540"></div>--}}
                {{--</div>--}}
                {{--<div class="item">--}}
                    {{--<div class="img-scale"><img class="img-responsive" src="images/front/blog-1.jpg" width="540px"></div>--}}
                {{--</div>--}}
            </div>
            <h2 class="text-bl">{{$blog->title}}</h2>
            <p class="text-bl2">
                {{$blog->description}}
        </p>
            <br>
            <br>
            <hr style="border:1px solid #DFDFDF; width:100%;">
            <p class="blog-mg">
                {{$blog->date}}
                <span class="blog-mg2">اشتراک:</span>
                <a href="https://www.facebook.com/sharer/sharer.php?u=#blog">
                    <span class="face-bl">فیس بوک</span>
                </a>
                <a href="https://twitter.com/home?status=#blog">
                    <span class="twit">تویتر</span>
                </a>
                <a href="https://plus.google.com/share?url=#blog">
                    <span class="google">گوگل بلاس</span>
                </a>
            </p>
        </div>
    </section>
    @endforeach

    {{--<section class="pull-right col-xs-12 col-sm-12 col-md-6 blog">--}}
        {{--<div class="box-small2">--}}
            {{--<div id="owl6" class="owl-carousel" style="direction:ltr">--}}
                {{--<div class="item">--}}
                    {{--<div class="img-scale"><img class="img-responsive" src="images/front/blog-2.jpg" width="540"></div>--}}
                {{--</div>--}}
                {{--<div class="item">--}}
                    {{--<div class="img-scale"><img class="img-responsive" src="images/front/blog-2.jpg" width="540"></div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<h2 class="text-bl">مفاهیم</h2>--}}
            {{--<p class="text-bl2">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک--}}
                {{--است. چاپگرها و متون بلکه روزنامه و مجله </p>--}}
            {{--<br>--}}
            {{--<br>--}}
            {{--<hr style="border:1px solid #DFDFDF; width:100%;">--}}
            {{--<p class="blog-mg">اسفند ۱۰, ۱۳۹۶ <span class="blog-mg2">اشتراک:</span> <span class="face-bl">فیس بوک</span>--}}
                {{--<span class="google">گوگل بلاس</span> <span class="twit">تویتر</span></p>--}}
        {{--</div>--}}
    {{--</section>--}}
</main>
