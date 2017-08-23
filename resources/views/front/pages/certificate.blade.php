@if(!$recommendations->isEmpty())
<main id="about55" class="container-fluid background-six">
    <section class="container">
        <h2 class="text-ex">گواهی</h2>
        <div id="owl4" class="owl-carousel" style="direction:ltr">
           @foreach($certifications as $certification)
            <div class="item">
                <div class="grid-go">
                    <figure class="effect-ming"><img width="100%" height="100%"
                                src="{{$certification->photo}}">
                        <figcaption>
                            <p class="text-center">{{$certification->name}}</p>
                            <p class="text-center">{{$certification->type}}</p>
                            <p style="padding-left:20px; padding-right:20px;" class="text-center hid-p">
                                {{$certification->info}}
                            </p>
                        </figcaption>
                    </figure>
                </div>
            </div>
            @endforeach
        </div>
    </section>
</main>
@endif
