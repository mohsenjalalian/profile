@if(!$recommendations->isEmpty())
<main id="about55" class="container-fluid background-six">
    <section class="container">
        <h2 class="text-ex">گواهی</h2>
        @if($certifications->count() == 1)
            @foreach($certifications as $certification)
                <div style="direction: rtl;" class="col-md-6">
                <div class="item">
                    <div  class="grid-go">
                        <figure class="effect-ming">
                            @if ($certification->photo)
                                <img width="100%" height="100%"
                                     src="{{$certification->photo}}">
                            @else
                                <img width="100%" height="100%"
                                     src="images/front/certificate2.png">
                            @endif
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
                </div>
            @endforeach

            @else

                        <figcaption>
                            <p class="text-center">{{$certification->name}}</p>
                            <p class="text-center">{{$certification->type}}</p>
                            <p style="padding-left:20px; padding-right:20px;" class="text-center hid-p">
                                @php
                                    $des =  nl2br(e($certification->info));
                                echo $des;
                                @endphp

                            </p>
                        </figcaption>
                    </figure>
                </div>
            </div>
        @endif
    </section>
</main>
@endif
