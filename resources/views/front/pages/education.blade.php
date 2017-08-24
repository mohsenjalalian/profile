@if(!$educations->isEmpty())
    <main id="about3"  class="container-fluid background-three">
    <section class="container">
        <h2 class="text-ex">تحصیلات</h2>
        <aside class="col-xs-12 col-md-12">
            <div id="owl" class="owl-carousel" style="direction: ltr;">
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
                    <p class="text-ed3">{{$education->start_date}} - {{$education->finish_date}}</p>
                </div>
                @endforeach
            </div>
        </aside>
    </section>
</main>
@endif