@if(!$workExperiences->isEmpty())
<main id="about2" class="container-fluid products">
    <section class="container">
        <h2 class="text-ex">تجربه ها</h2>
        {{--<ul class="timeline">--}}
            {{--<li>--}}
                {{--<p class="timeline-date">Feb 2007</p>--}}
                {{--<div class="timeline-content">--}}
                    {{--<h3>Canada</h3>--}}
                    {{--<p>I moved to Vancouver, Canada to broaden my horizons.</p>--}}
                {{--</div>--}}
            {{--</li>--}}
        {{--</ul>--}}
                    @foreach($workExperiences as $experience )
            <ul class="timeline">
                <li>
                    <div class="timeline-content">
                            <section class="col-xs-12 col-md-3 yellow-sm">
                                <p class="pull-right text-sm">از</p>
                                <p class="pull-right text-sm">تا</p>
                                <p class="pull-right text-sm2">{{$experience->start_date}}</p>
                                <p class="pull-right text-sm2">{{$experience->finish_date}}</p>
                                <p class="pull-right text-sm2">{{$experience->company}}</p>
                                <p class="pull-right text-sm3">{{$experience->city}}</p>
                            </section>
                            <section class="col-xs-12 col-md-8 yellow-lg">
                                <h2 class="pull-right text-lg1">{{$experience->title}}</h2>
                                <p class="pull-right text-justify text-lg2 mCustomScrollbar content-a2" data-mcs-theme="minimal-dark">
                                    {{$experience->about}}
                                </p>
                            </section>
                    </div>
                </li>
            </ul>
                    @endforeach
    </section>
</main>
@endif