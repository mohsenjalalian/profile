<!--portfolio-->
<main id="about4" class="container-fluid background-four">
    <section class="container">
        <h2 style="font-size:25px; margin-top: 30px;"><strong>نمونه کار</strong></h2>
        <main class="container tabs-tunel">
            <ul class="nav nav-pills">
                @foreach($categories as $cat)
                    <li><a data-toggle="pill" href="#{{$cat->id}}">{{$cat->name}}</a></li>
                @endforeach
            </ul>

            <div class="tab-content">
                @foreach($categories as $category)
                        <div  id="{{$category->id}}" class="tab-pane fade in firest">
                            <ul class="grid cs-style-4">
                                @foreach($category->workSample as $work)
                                <section class="col-md-4">
                                        <li>
                                            <figure>
                                                <div>
                                                    @if ($work->photo)
                                                        <img src="{{$work->photo}}" alt="img05">
                                                    @else
                                                        <img src="images/front/site.png" alt="img05">
                                                    @endif
                                                </div>
                                                <figcaption>
                                                    <h3 class="pull-right">{{$work->name}}</h3>
                                                    <p style="margin-top:30px;" class="port-n">{{$category->name}}</p>
                                                    @foreach($work->skills as $skill)
                                                        <p class="port-n">{{$skill->name}}</p>
                                                    @endforeach
                                                    @if(!empty($work->link))
                                                    <a href="{{$work->link}}">دانلود
                                                        رزومه</a>
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
