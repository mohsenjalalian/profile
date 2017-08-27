@if(!$recommendations->isEmpty())
    <div id="box1">
<div id="owl2" class="owl-carousel" style="direction:ltr">
    @foreach($recommendations as $recommendation)
    <div class="item-tunel">
        <aside class="col-xs-12 col-md-12">
            <section class="container">
                <p class="text-center">
                    @if ($recommendation->photo)
                        <img class="img-yellow img-circle" src="{{$recommendation->photo}}" height="100px" width="100px;">
                    @else
                        <img class="img-yellow img-circle" src="images/front/manager.png" height="100px" width="100px;">
                    @endif

                </p>
                <p class="text-center text-yellow">{{$recommendation->name}}</p>
                <p class="text-yellow2 mCustomScrollbar content-a4" data-mcs-theme="minimal-dark">
                    @php
                        $des =  nl2br(e($recommendation->info));
                    echo $des;
                    @endphp

                </p>
                <br>
                <hr style="width: 85px; border:1px solid #555; margin-right: 55px; float: right;">
                <p class="pull-right text-yellow3"><strong>{{$recommendation->position}}</strong></p>
                <p class="pull-right text-yellow4">{{$recommendation->company}}</p>
            </section>
        </aside>
    </div>
    @endforeach
</div>
</div>
@endif