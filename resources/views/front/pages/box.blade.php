<!--box yellow-->
<div id="owl2" class="owl-carousel" style="direction:ltr">
    @foreach($recommendations as $recommendation)
    <div id="about555" class="item-tunel">
        <aside class="col-xs-12 col-md-12">
            <section class="container">
                <p class="text-center"><img class="img-yellow img-circle" src="{{$recommendation->photo}}" height="100px" width="100px;"></p>
                <p class="text-center text-yellow">{{$recommendation->name}}</p>
                <p class="text-yellow2 mCustomScrollbar content-a4" data-mcs-theme="minimal-dark">{{$recommendation->info}}</p>
                <br>
                <p class="pull-right text-yellow3"><strong>{{$recommendation->position}}</strong></p>
                <p class="pull-right text-yellow4">{{$recommendation->company}}</p>
            </section>
        </aside>
    </div>
    @endforeach
</div>
