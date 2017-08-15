<main id="about1" class="container about">
    <section class="col-xs-12 col-md-6 pull-right">
        @foreach($profiles as $profile)
        <h2>درباره من</h2>
        <p class="text-justify mCustomScrollbar content-a" data-mcs-theme="minimal-dark">
            {{$profile->about_me}}
        </p>
    </section>
    <section class="col-xs-12 col-md-6 pull-left">
        <div class="box">
            <p>اطلاعات شخصی</p>
            <section class="col-xs-6 col-md-6">
                <h3 class="texth3">تولد: <span class="span1"> {{$profile->birth_day}}</span></h3>
                <h3 class="texth3">جنسیت: <span class="span2"> {{$profile->gender}}</span></h3>
                <h3 class="texth3">محل تولد: <span class="span3"> {{$profile->birth_place}}</span></h3>
            </section>
            <section class="col-xs-6 col-md-6">
                <h3 class="texth3">وضعیت تاهل: <span class="span1"> {{$profile->marriage}}</span></h3>
                <h3 class="texth3">وضعیت نظام وظیفه: <span class="span2"> {{$profile->military}}</span></h3>
            </section>
        </div>
        @endforeach
    </section>
</main>