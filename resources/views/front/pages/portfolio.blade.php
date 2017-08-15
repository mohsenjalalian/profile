<!--portfolio-->

<main id="about4" class="container-fluid background-four">
    <section class="container">
        <h2 style="font-size:25px;margin-top:50px;"><strong>نمونه کار</strong></h2>
        <main class="container tabs-tunel">
            <ul class="nav nav-pills">
                @foreach($workSamples as $sample)
                <li style="margin-top:20px;" class="active"><a class="fade1" data-toggle="tab" href="#menu1"> {{$sample->name}}</a>
                </li>
                 @endforeach
            </ul>
            @foreach($workSamples as $workSample)
            <div class="tab-content">
                <div id="menu1" class="tab-pane fade in active">
                    <ul class="grid cs-style-4">
                        <section class="col-md-4">
                            <li>
                                <figure>
                                    <div>
                                        <img style="display: flex" src="{{$workSample->photo}}" alt="img05">
                                    </div>
                                    <figcaption>
                                        <h3 class="pull-right">{{$workSample->name}}</h3>
                                        @foreach($workSample->category as $cat)
                                        <p style="margin-top:30px;" class="port-n">{{$cat->name}}</p>
                                        @endforeach
                                        @foreach($workSample->skills as $skill)
                                        <p class="port-n">{{$skill->name}}</p>
                                        @endforeach
                                        <a href="http://dribbble.com/shots/1118904-Game-Center">دانلود رزومه</a>
                                    </figcaption>
                                </figure>
                            </li>
                        </section>
                    </ul>
                </div>
                @endforeach
            </div>
            <ul class="page-nav">
                <li><a href="#">1</a></li>
            </ul>
        </main>
    </section>
</main>