<!--box yellow-->
<div id="owl2" class="owl-carousel" style="direction:ltr">
    @foreach($recommendations as $recommendation)
    <div id="about555" class="item-tunel">
        <aside class="col-xs-12 col-md-12">
            <section class="container">
                <p class="text-center"><img class="img-yellow img-circle" src="{{$recommendation->photo}}" height="100px" width="100px;"></p>
                <p class="text-center text-yellow">{{$recommendation->name}}</p>
                <p class="text-yellow2 mCustomScrollbar content-a4" data-mcs-theme="minimal-dark">{{$recommendation->info}}</p>
                <br>
                <p class="pull-right text-yellow3">{{$recommendation->position}}</p>
                <p class="pull-right text-yellow4">{{$recommendation->company}}</p>
            </section>
        </aside>
    </div>
    @endforeach
    {{--<div class="item-tunel">--}}
        {{--<aside class="col-xs-12 col-md-12">--}}
            {{--<section class="container">--}}
                {{--<p class="text-center"><img class="img-yellow" src="images/front/Capture.PNG" height="100px"></p>--}}
                {{--<p class="text-center text-yellow">توصیه ها</p>--}}
                {{--<p class="text-yellow2 mCustomScrollbar content-a4" data-mcs-theme="minimal-dark">لورم ایپسوم متن--}}
                    {{--ساختگی--}}
                    {{--با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه--}}
                    {{--روزنامه و--}}
                    {{--مجله در ستون و سطرآنچنان که لازم استبردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و--}}
                    {{--آینده--}}
                    {{--شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای--}}
                    {{--علی--}}
                    {{--الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام--}}
                    {{--و--}}
                    {{--دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی--}}
                    {{--دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>--}}
                {{--<br>--}}
                {{--<p class="pull-right text-yellow3">لورم ایپسوم</p>--}}
                {{--<p class="pull-right text-yellow4">مدیریت</p>--}}
            {{--</section>--}}
        {{--</aside>--}}
    {{--</div>--}}
</div>
