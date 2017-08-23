@if(!$workSamples->isEmpty())
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
                @foreach($categories as $category)
                    {{--@foreach($skills as $skill)--}}

                    <div id="{{$category->id}}" class="tab-pane fade in">
                            <ul class="grid cs-style-4">
                                @foreach($category->workSample as $work)
                                <section class="col-md-4">
                                    <li>
                                        <figure>
                                            <div>
                                                <img style="display: flex" src="{{$work->photo}}" alt="img05">
                                            </div>

                                            <figcaption>
                                                <h3 class="pull-right">{{$work->name}}</h3>

                                                    <p style="margin-top:30px;" class="port-n">{{$category->name}}</p>

                                                @foreach($work->skills as $skill)
                                                    <p class="port-n">{{$skill->name}}</p>
                                                @endforeach

                                                <a href="http://dribbble.com/shots/1118904-Game-Center">دانلود
                                                    رزومه</a>
                                            </figcaption>

                                        </figure>
                                    </li>
                                </section>
                                @endforeach
                            </ul>
                        </div>
                  @endforeach
                {{--@endforeach--}}

            </div>

        </main>
    </section>
</main>
@endif