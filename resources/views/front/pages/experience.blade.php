@if(!$workExperiences->isEmpty())
<main id="about2" class="container-fluid products">
    <section class="container">
        <h2 style="color: #fff;">تجربه ها</h2>
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
                    <li><a href="#{{$experience->id}}">{{$stYear .'/'. $stMonth}}-{{$enYear .'/'. $enMonth}}</a></li>
                    {{--<li><a href="#{{$experience->id}}">{{$enYear .'/'. $enMonth}}</a></li>--}}
                @endforeach
            </ul>
            <ul id="issues">
                @foreach($workExperiences as $experience )
                <li id="{{$experience->id}}">
                    <h4 style="float: right; color: #ffd93e;  text-align: right; width: 100%"><strong>{{$experience->title}}</strong></h4>
                    <p style="font-size: 11px;"><strong>{{$experience->company}}</strong></p>
                    <p style="text-align: right; float: right; width: 100%;">
                        @php
                            $des =  nl2br(e($experience->about));
                         echo $des;
                        @endphp
                    </p>
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
