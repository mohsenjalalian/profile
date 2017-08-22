<main id="about57" class="container skill">
    <h2 class="text-sk3">مهارت ها و زبان</h2>
    <main class="container tabs-tunel col-md-8">
        <ul class="nav nav-pills">
            @foreach($types as $type)
                <li><a data-toggle="pill" href="#{{$type->id}}">{{$type->name}}</a></li>
            @endforeach
        </ul>
        <div class="tab-content">
            @foreach($types as $type)
                @foreach($type->skill as $skill)
                    <div id="{{$skill->type_id}}" class="tab-pane fade in">
                        <div class="mCustomScrollbar content-a3" data-mcs-theme="minimal-dark">
                            @foreach($type->skill as $skill)
                                <p style="font-size: 16px; padding-top: 10px;" class="col-md-6">{{$skill->name}}
                                    <span>
                                        <progress value="{{$skill->point}}" max="10"></progress>
                                    </span>
                                </p>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            @endforeach
        </div>
    </main>




    <section class="col-xs-12 col-md-4 pull-left">
        <div class="box2">
            <section class="col-md-12 text-skill">
                <div id="owl3" class="owl-carousel" style="direction:ltr">
                    @foreach($languages as $language)
                        <div class="item test5">

                            <h2>{{$language->name}}</h2>
                            {{--<progress class="progress3" value="{{$language->reading}}" max="10"</progress>--}}
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
                            {{--<progress class="progress3" value="{{$language->writing}}" max="10">dfsfdsf</progress>--}}
                            <div class="progress">
                                <div class="progress-bar progress-bar-success progress-bar-striped active"
                                     role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="10"
                                     style="width:80%"> {{$language->speaking}}% صحبت کردن
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-success progress-bar-striped active"
                                     role="progressbar" aria-valuenow="3" aria-valuemin="0" aria-valuemax="10"
                                     style="width:50%"> {{$language->listening}}% گوش دادن
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
            </section>
        </div>
    </section>
</main>
