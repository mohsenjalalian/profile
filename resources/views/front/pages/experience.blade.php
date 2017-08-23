@if(!$workExperiences->isEmpty())
<main id="about2" class="container-fluid products">
    <section class="container">
        <h2 class="text-ex">تجربه ها</h2>
        <div style="direction: ltr !important;" id="timeline">
            <ul id="dates">
                @foreach($workExperiences as $experience )
                @php
                    $stDate = $experience->start_date;
                    $enDate = $experience->finish_date;
                    list($stYear,$stMonth,$day) = explode("/",$stDate);
                    list($enYear,$enMonth,$day) = explode("/",$enDate);

                     $stYear = substr($stYear,4);
                     $enYear = substr($enYear,4);

                @endphp

                   سال شروع <li><a href="#{{$experience->id}}">{{$stYear .'/'. $stMonth}}</a></li>
                    {{--<br>--}}
                 سال پایان   <li><a href="#{{$experience->id}}">{{$enYear .'/'. $enMonth}}</a></li>

                @endforeach
            </ul>
            <ul id="issues">
                @foreach($workExperiences as $experience )
                <li id="{{$experience->id}}">
                    <h4 style="float: right; color: #ffd93e;  text-align: right; width: 100%"><strong>{{$experience->title}}</strong></h4>
                    <p style="font-size: 11px;"><strong>{{$experience->company}}</strong></p>
                    <p style="text-align: right; float: right; width: 100%;">{{$experience->about}}</p>
                    <p>{{$experience->city}}</p>
                    @endforeach
            </ul>
            <div id="grad_left"></div>
            <div id="grad_right"></div>
            <a href="#" id="next">+<i id="next grad-left" style="font-size: 30px; color: #0000cc;" class="fa fa-plus"></i></a>
            <a href="#" id="prev">-</a>
        </div>
    </section>
</main>
@endif
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