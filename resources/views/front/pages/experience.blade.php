<!--EXPERIENCE-->
<main id="about2" class="container-fluid products">
    <section class="container mCustomScrollbar content-a5" data-mcs-theme="minimal-dark">
        <h2 class="text-ex">تجربه ها</h2>
            <div style="direction: rtl !important;" class="l-contained">
                <ul class="timeline-list">
                    @foreach($workExperiences as $experience )
                    <li>
                        <div class="contentss">
                            <br>
                            <br>
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
                    @endforeach
                </ul>
            </div>
    </section>
</main>
