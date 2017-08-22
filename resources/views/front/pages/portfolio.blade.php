<!--portfolio-->
<main id="about4" class="container-fluid background-four">
    <section class="container">
        <h2 style="font-size:25px;margin-top:50px;"><strong>نمونه کار</strong></h2>
        <main class="container tabs-tunel">


            <ul class="nav nav-pills">
                @foreach($categories as $cat)
                    <li><a data-toggle="pill" href="#{{$cat->id}}">{{$cat->name}}</a></li>
                @endforeach
            </ul>

            <div class="tab-content">
                @foreach($workSamples as $workSample)
                @foreach($categories as $cat)
                    <div id="{{$cat->id}}" class="tab-pane fade in">
                            <ul class="grid cs-style-4">
                                <section class="col-md-4">
                                    <li>
                                        <figure>
                                            {{--photo--}}
                                            <div>
                                                <img style="display: flex" src="{{$workSample->photo}}" alt="img05">
                                            </div>
                                            {{--photo--}}

                                            {{--pro--}}
                                            <figcaption>
                                                <h3 class="pull-right">{{$workSample->name}}</h3>
                                                @foreach($workSample->category as $cat)
                                                    <p style="margin-top:30px;" class="port-n">{{$cat->name}}</p>
                                                @endforeach
                                                @foreach($workSample->skills as $skill)
                                                    <p class="port-n">{{$skill->name}}</p>
                                                @endforeach
                                                <a href="http://dribbble.com/shots/1118904-Game-Center">دانلود
                                                    رزومه</a>
                                            </figcaption>
                                            {{--pro--}}

                                        </figure>
                                    </li>
                                </section>
                            </ul>
                        </div>
                    @endforeach
                @endforeach
            </div>

            {{--@foreach($workSamples as $workSample)--}}
            {{--<div style="display: flex;" class="tab-content" class="filter_red" id="product-list">--}}
            {{--<div id="menu1" class="tab-pane fade in active">--}}
            {{--<ul class="grid cs-style-4">--}}
            {{--<section class="col-md-4">--}}
            {{--<li>--}}
            {{--<figure>--}}
            {{--<div>--}}
            {{--<img style="display: flex" src="{{$workSample->photo}}" alt="img05">--}}
            {{--</div>--}}
            {{--<figcaption>--}}
            {{--<h3 class="pull-right">{{$workSample->name}}</h3>--}}
            {{--@foreach($workSample->category as $cat)--}}
            {{--<p style="margin-top:30px;" class="port-n">{{$cat->name}}</p>--}}
            {{--@endforeach--}}
            {{--@foreach($workSample->skills as $skill)--}}
            {{--<p class="port-n">{{$skill->name}}</p>--}}
            {{--@endforeach--}}
            {{--<a href="http://dribbble.com/shots/1118904-Game-Center">دانلود رزومه</a>--}}
            {{--</figcaption>--}}
            {{--</figure>--}}
            {{--</li>--}}
            {{--</section>--}}
            {{--</ul>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--@endforeach--}}
            {{--<ul class="page-nav">--}}
                {{--<li style="cursor: pointer;">1</li>--}}
            {{--</ul>--}}
        </main>
    </section>
</main>
