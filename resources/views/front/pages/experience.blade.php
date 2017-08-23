@if(!$workExperiences->isEmpty())
<main id="about2" class="container-fluid products">
    <section class="container">
        <h2 class="text-ex">تجربه ها</h2>
        <div style="direction: ltr !important;" id="timeline">
            <ul id="dates">
                @foreach($workExperiences as $experience )
                <li><a href="#{{$experience->id}}">{{$experience->start_date}}</a></li>
                @endforeach
                {{--<li><a href="#1987">1987</a></li>--}}
                {{--<li><a href="#1991">1991</a></li>--}}
                {{--<li><a href="#1992">1992</a></li>--}}
                {{--<li><a href="#1993">1993</a></li>--}}
                {{--<li><a href="#1995">1995</a></li>--}}
                {{--<li><a href="#1996">1996</a></li>--}}
                {{--<li><a href="#1997">1997</a></li>--}}
                {{--<li><a href="#1998">1998</a></li>--}}
                {{--<li><a href="#1999">1999</a></li>--}}
                {{--<li><a href="#2000">2000</a></li>--}}
                {{--<li><a href="#2001">2001</a></li>--}}
                {{--<li><a href="#2002">2002</a></li>--}}
                {{--<li><a href="#2004">2004</a></li>--}}
                {{--<li><a href="#2006">2006</a></li>--}}
                {{--<li><a href="#2007">2007</a></li>--}}
                {{--<li><a href="#2009">2009</a></li>--}}
                {{--<li><a href="#2014">2014</a></li>--}}
                {{--<li><a href="#2015">2015</a></li>--}}
                {{--<li><a href="#2016">2016</a></li>--}}

            </ul>
            <ul id="issues">
                @foreach($workExperiences as $experience )
                <li id="{{$experience->id}}">

                    <h4 style="float: right;  text-align: right; width: 100%">{{$experience->title}}</h4>
                    <p style="text-align: right; float: right; ">{{$experience->about}}</p>
                    <p>{{$experience->city}}</p>
                    @endforeach
            </ul>
            <div id="grad_left"></div>
            <div id="grad_right"></div>
            <a href="#" id="next">+<i style="font-size: 30px;" class="fa fa-plus"></i></a>
            <a href="#" id="prev">-</a>
        </div>

            {{--<ul class="timeline">--}}
                {{--<li>--}}
                    {{--<div class="timeline-content">--}}
                            {{--<section class="col-xs-12 col-md-3 yellow-sm">--}}
                                {{--<p class="pull-right text-sm">از</p>--}}
                                {{--<p class="pull-right text-sm">تا</p>--}}
                                {{--<p class="pull-right text-sm2">{{$experience->start_date}}</p>--}}
                                {{--<p class="pull-right text-sm2">{{$experience->finish_date}}</p>--}}
                                {{--<p class="pull-right text-sm2">{{$experience->company}}</p>--}}
                                {{--<p class="pull-right text-sm3">{{$experience->city}}</p>--}}
                            {{--</section>--}}
                            {{--<section class="col-xs-12 col-md-8 yellow-lg">--}}
                                {{--<h2 class="pull-right text-lg1">{{$experience->title}}</h2>--}}
                                {{--<p class="pull-right text-justify text-lg2 mCustomScrollbar content-a2" data-mcs-theme="minimal-dark">--}}
                                    {{--{{$experience->about}}--}}
                                {{--</p>--}}
                            {{--</section>--}}
                    {{--</div>--}}
                {{--</li>--}}
            {{--</ul>--}}
    </section>
</main>
@endif