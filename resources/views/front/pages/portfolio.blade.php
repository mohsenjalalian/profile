<!--portfolio-->
@if(!$workSamples->isEmpty())
<main id="about4" class="container-fluid background-four">
    <section class="container">
        <h2 style="font-size:25px; margin-top: 30px;"><strong>نمونه کار</strong></h2>
        <main class="container tabs-tunel">
            <ul class="nav nav-pills">
                @foreach($categories as $cat)
                    <li><a data-toggle="pill" href="#cat{{$cat->id}}">{{$cat->name}}</a></li>
                @endforeach
            </ul>

            <div class="tab-content">
                @foreach($categories as $category)
                        <div  id="cat{{$category->id}}" class="tab-pane fade in firest">
                            <ul class="grid cs-style-4">
                                @foreach($category->workSample as $work)
                                <section class="col-xs-12 col-sm-12 col-md-4">
                                        <li>
                                            <figure>
                                                <div>
                                                    @if ($work->photo)
                                                        <img src="{{$work->photo}}" alt="عکس نمونه کار">
                                                    @else
                                                        <img src="images/front/site.png" alt="عکس نمونه کار">
                                                    @endif
                                                </div>
                                                <figcaption>
                                                    <h3 class="pull-right">{{$work->name}}</h3>
                                                    @foreach($work->skills as $skill)
                                                        <p class="port-n">{{$skill->name}}</p>
                                                    @endforeach
                                                    @if(!empty($work->link))
                                                    <a style="width: 70px;" href="{{$work->link}}">لینک</a>
                                                    @endif
                                                </figcaption>
                                            </figure>
                                        </li>
                                </section>
                                @endforeach
                            </ul>
                        </div>
                    @endforeach
            </div>
        </main>
    </section>
</main>
@endif