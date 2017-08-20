<!--book-->
<main id="about56" class="container">
    <h2 class="text-book2">مقالات و کتاب</h2>
    <ul style="direction:ltr !important;" class="align">
       @foreach($docs as $doc)
        <li style="border:1px solid #eee;">
            <figure class="book">
                <ul class="hardcover_front">
                    <li>
                        @if ($doc->photo)
                            <img src="{{asset($doc->photo)}}" alt="{{$doc->photo}}" width="100%" height="100%">
                        @else
                            <img style="margin-top: 25px;" src="/image/licence.png" alt="salam" width="70%" height="60%">
                        @endif
                        {{--<img src="{{asset($doc->photo)}}" alt="{{$doc->photo}}" width="100%" height="100%">--}}

                    </li>
                    <li></li>
                </ul>

                <ul class="page">
                    <li></li>
                    <li><a class="btn btn-book" href="#">بیشتر</a></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
                <ul class="hardcover_back">
                    <li></li>
                    <li></li>
                </ul>
                <ul class="book_spine">
                    <li></li>
                    <li></li>
                </ul>
                <figcaption style="direction:rtl;">
                    <h1>{{$doc->name}}</h1>
                    <span>انتشارات: {{$doc->published_place}}</span>
                    <p class="text-book">{{$doc->published_year}}</p>
                </figcaption>
            </figure>
        </li>
        @endforeach

        {{--<li style="border:1px solid #eee;">--}}
            {{--<figure class="book">--}}
                {{--<ul class="hardcover_front">--}}
                    {{--<li><img src="images/front/imaeges.jpg" alt="" width="100%" height="100%"></li>--}}
                    {{--<li></li>--}}
                {{--</ul>--}}
                {{--<ul class="page">--}}
                    {{--<li></li>--}}
                    {{--<li><a class="btn btn-book" href="#">بیشتر</a></li>--}}
                    {{--<li></li>--}}
                    {{--<li></li>--}}
                    {{--<li></li>--}}
                {{--</ul>--}}
                {{--<ul class="hardcover_back">--}}
                    {{--<li></li>--}}
                    {{--<li></li>--}}
                {{--</ul>--}}
                {{--<ul class="book_spine">--}}
                    {{--<li></li>--}}
                    {{--<li></li>--}}
                {{--</ul>--}}
                {{--<figcaption style="direction:rtl;">--}}
                    {{--<h1> لورم ایپسوم</h1>--}}
                    {{--<span>انتشارات: لورم</span>--}}
                    {{--<p class="text-book"> ۱۳۷۷/۱۲/۱۸</p>--}}
                {{--</figcaption>--}}
            {{--</figure>--}}
        {{--</li>--}}


        {{--<li style="border:1px solid #eee;">--}}
            {{--<figure class="book">--}}
                {{--<ul class="hardcover_front">--}}
                    {{--<li><img src="images/front/hamleet-0.jpg" alt="" width="100%" height="100%"></li>--}}
                    {{--<li></li>--}}
                {{--</ul>--}}
                {{--<ul class="page">--}}
                    {{--<li></li>--}}
                    {{--<li><a class="btn btn-book" href="#">بیشتر</a></li>--}}
                    {{--<li></li>--}}
                    {{--<li></li>--}}
                    {{--<li></li>--}}
                {{--</ul>--}}
                {{--<ul class="hardcover_back">--}}
                    {{--<li></li>--}}
                    {{--<li></li>--}}
                {{--</ul>--}}
                {{--<ul class="book_spine">--}}
                    {{--<li></li>--}}
                    {{--<li></li>--}}
                {{--</ul>--}}
                {{--<figcaption style="direction:rtl;">--}}
                    {{--<h1> لورم ایپسوم</h1>--}}
                    {{--<span>انتشارات: لورم</span>--}}
                    {{--<p class="text-book">۱۳۷۷/۱۲/۱۸</p>--}}
                {{--</figcaption>--}}
            {{--</figure>--}}
        {{--</li>--}}


        {{--<li style="border:1px solid #eee;">--}}
            {{--<figure class="book">--}}
                {{--<ul class="hardcover_front">--}}
                    {{--<li><img src="images/front/9780521607056.jpg" alt="" width="100%" height="100%"></li>--}}
                    {{--<li></li>--}}
                {{--</ul>--}}
                {{--<ul class="page">--}}
                    {{--<li></li>--}}
                    {{--<li><a class="btn btn-book" href="#">بیشتر</a></li>--}}
                    {{--<li></li>--}}
                    {{--<li></li>--}}
                    {{--<li></li>--}}
                {{--</ul>--}}
                {{--<ul class="hardcover_back">--}}
                    {{--<li></li>--}}
                    {{--<li></li>--}}
                {{--</ul>--}}
                {{--<ul class="book_spine">--}}
                    {{--<li></li>--}}
                    {{--<li></li>--}}
                {{--</ul>--}}
                {{--<figcaption style="direction:rtl;">--}}
                    {{--<h1> لورم ایپسوم</h1>--}}
                    {{--<span>انتشارات: لورم</span>--}}
                    {{--<p class="text-book"> ۱۳۷۷/۱۲/۱۸</p>--}}
                {{--</figcaption>--}}
            {{--</figure>--}}
        {{--</li>--}}

    </ul>
    <ul class="page-nav">
        <li>1</li>

    </ul>

</main>