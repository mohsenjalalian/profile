@if(!$docs->isEmpty())
<main id="about56" class="container">
    <h2 class="text-book2">مقالات و کتاب</h2>
    <ul style="direction:ltr !important;" class="align">
        <div id="owl8" class="owl-carousel" style="direction:ltr;">
       @foreach($docs as $doc)
        <li style="border:1px solid #eee; margin-right: 20px;">
            <figure class="book">
                <ul class="hardcover_front">
                    <li>
                        @if ($doc->photo)
                            <img src="{{asset($doc->photo)}}" alt="{{$doc->photo}}" width="100%" height="100%">
                        @else
                            <img style="margin-top: 25px;" src="/image/licence.png" alt="salam" width="70%" height="60%">
                        @endif
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
        </div>
    </ul>
</main>
@endif