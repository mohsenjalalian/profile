<main id="about57" class="container skill">
    <h2 class="text-sk3">مهارت ها و زبان</h2>
    <main class="container tabs-tunel col-md-8">
        @foreach($types as $type)
        <ul class="nav nav-pills">
                <li style="margin-top:20px;" class="active">
                    <a class="fade1" data-toggle="tab" href="{{$type->id}}">
                        {{$type->name}}
                    </a>
                </li>
        </ul>
        <div class="tab-content">
            <div id="menu11" class="tab-pane fade in active">
                <div class="mCustomScrollbar content-a3" data-mcs-theme="minimal-dark">
                    <section class="col-sm-6 col-xs-12 col-md-5  text-sk">
                        @foreach($type->skill as $skill)
                                <p>
                                    {{$skill->name}}
                                    <span>
                                        <progress value="{{$skill->point}}" max="10">
                                        </progress>
                                     </span>
                                </p>
                        @endforeach
                    </section>
                </div>
            </div>

        </div>
        @endforeach
    </main>
    <section class="col-xs-12 col-md-4 pull-left">
        <div class="box2">
            <section class="col-md-12 text-skill">
                <div id="owl3" class="owl-carousel" style="direction:ltr">
                    @foreach($languages as $language)
                        <div class="item test5">

                            <h2>{{$language->name}}</h2>
                            <div class="progress">
                                <div class="progress-bar progress-bar-success progress-bar-striped active"
                                     role="progressbar" value="" aria-valuemin="3" aria-valuemax="10"
                                     style="width: 60%"> {{$language->reading}}% خواندن
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-success progress-bar-striped active"
                                     role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="10"
                                     style="width:40%"> {{$language->writing}}% نوشتن
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-success progress-bar-striped active"
                                     role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="10"
                                     style="width:80%"> {{$language->speaking}}% صحبت کردن
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-success progress-bar-striped active"
                                     role="progressbar" aria-valuenow="3" aria-valuemin="0" aria-valuemax="10"
                                     style="width:30%"> {{$language->listening}}% گوش دادن
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
            </section>
        </div>
    </section>
</main>
