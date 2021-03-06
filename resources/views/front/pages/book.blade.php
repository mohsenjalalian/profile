@if(!$docs->isEmpty())
<main id="about56" class="container">
    <h2 class="text-book2">مقالات و کتاب</h2>
    @if($docs->count() == 1)
        <ul class="align col-md-6 crusel11">
                @foreach($docs as $doc)
                    <li style="border:1px solid #eee; margin-right: 150px;">
                        <figure style="margin-left: 10px;" class="book">
                            <ul class="hardcover_front">
                                <li>
                                    @if ($doc->photo)
                                        <img src="{{asset($doc->photo)}}" alt="{{$doc->photo}}" width="100%" height="100%">
                                    @else
                                        <img style="margin-top: 25px;" src="/images/front/books.png" alt="salam" width="70%" height="60%">
                                    @endif
                                </li>
                                <li></li>
                            </ul>

                            <ul class="page">
                                <li></li>
                                <li><a class="btn btn-book" href="{{$doc->link}}">بیشتر</a></li>
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
                                <h1 class="textbookh1" style="margin-right: 10px; width: 100%;">{{$doc->name}}</h1>
                                <span class="textbookspan" style="margin-right: 10px; width: 100%;">انتشارات: {{$doc->published_place}}</span>
                                <p style="margin-right: 10px; width: 100%;" class="textbookp">{{$doc->published_year}}</p>
                            </figcaption>
                        </figure>
                    </li>
                @endforeach
        </ul>
    @else
        <ul style="direction:ltr !important;" class="align">
            <div id="owl8" class="owl-carousel">
                @foreach($docs as $doc)
                    <li style="border:1px solid #eee; margin-right: 20px;">
                        <figure class="book">
                            <ul class="hardcover_front">
                                <li>
                                    @if ($doc->photo)
                                        <img src="{{asset($doc->photo)}}" alt="{{$doc->photo}}" width="100%" height="100%">
                                    @else
                                        <img style="margin-top: 25px;" src="/images/front/books.png" alt="salam" width="70%" height="60%">
                                    @endif
                                </li>
                                <li></li>
                            </ul>

                            <ul class="page">
                                <li></li>
                                <li><a class="btn btn-book" href="{{$doc->link}}">بیشتر</a></li>
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
            </div>
        </ul>
    @endif

</main>
@endif