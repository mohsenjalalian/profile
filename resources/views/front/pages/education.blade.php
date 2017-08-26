@if(!$educations->isEmpty())
    <main id="about3"  class="container-fluid background-three">
    <section class="container">
        <h2 class="text-ex">تحصیلات</h2>
        <aside class="col-xs-12 col-md-12">
            @if($educations->count() == 1)
                    @foreach($educations as $education)
                        <div class="crusel2">
                            @if ($education->logo)
                                <img width="100px" class="pull-left hidden-xs hidden-sm img-ed" src="{{asset($education->logo)}}" alt="un"
                                     height="100px">
                            @else
                                <img width="100px" class="pull-left hidden-xs hidden-sm img-ed" src="images/front/uni.png" alt="un"
                                     height="100px">
                            @endif

                            <i style="font-size: 20px; color: #ffd93e; padding-top: 20px; padding-right: 10px;" class="fa fa-book" aria-hidden="true"></i> <br>
                            <p style="margin-top: 10px; padding-right: 50px; font-size: 23px;" class="text-ed">{{$education->university_name}}</p>
                            <p style="padding-right: 10px;" class="pull-right text-justify text-ed2">{{$education->field}}<span
                                        style="padding-left:20px; padding-right:20px; color:#000;">|</span>{{$education->tendency}}</p>
                            <p style="padding-right: 10px;" class="text-ed3">{{$education->start_date}} - {{$education->finish_date}}</p>
                        </div>
                    @endforeach
            @else
                <div id="owl" class="owl-carousel" style="direction: ltr">
                    @foreach($educations as $education)
                        <div class="item">
                            @if ($education->logo)
                                <img width="100px" class="pull-left hidden-xs hidden-sm img-ed" src="{{asset($education->logo)}}" alt="un"
                                     height="100px">
                            @else
                                <img width="100px" class="pull-left hidden-xs hidden-sm img-ed" src="images/front/uni.png" alt="un"
                                     height="100px">
                            @endif

                            <i class="fa fa-book" aria-hidden="true"></i> <br>
                            <p class="text-ed">{{$education->university_name}}</p>
                            <p class="pull-right text-justify text-ed2">{{$education->field}}<span
                                        style="padding-left:20px; padding-right:20px; color:#000;">|</span>{{$education->tendency}}</p>
                            <p class="text-ed3">  {{$education->finish_date}} - {{$education->start_date}}</p>
                        </div>
                    @endforeach
                </div>
            @endif
        </aside>
    </section>
</main>
@endif