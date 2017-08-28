<main id="about1" class="container about">
    <section class="col-xs-12 col-md-6 pull-right">
        @if(!$profiles->isEmpty())
        @foreach($profiles as $profile)
        <h2>درباره من</h2>
        <p class="text-justify mCustomScrollbar content-a" data-mcs-theme="minimal-dark">
            @if(!empty($profile->about_me))
                @php
                    $des =  nl2br(e($profile->about_me));
                echo $des;
                @endphp
            @else
                بک گراند ذهنی من هوشمندی کسب و کار و طراحی سیستم های اطلاعاتی است، ایجاد محیطی پویا، یادگیری روز افزون آمال محیط کاری و شخصی من است و سعی میکنم با استفاده از هوش تعاملی و هیجانی و ایجاد ارتباط با همکاران و مخاطبانم بیشتر از آنچه به من سپرده اند انجام دهم و کمتر از آنچه به من متعهد شدند، دریافت کنم
            @endif
        </p>
    </section>
    <section style="margin-bottom: 25px;" class="col-xs-12 col-md-6 pull-left">
        <div class="box">
            <p>اطلاعات شخصی</p>
            <section class="col-xs-6 col-md-6">
                <h3 class="texth3">تولد: <span class="span1">
                        @if(!empty($profile->birth_day))
                        {{$profile->birth_day}}
                        @else
۱۳۶۶/۱۲/۰۵
                        @endif
                    </span></h3>
                <h3 class="texth3">جنسیت: <span class="span2">
                    @if(!empty($profile->gender))
                        {{$profile->gender}}
                     @else

                            مرد
                     @endif
                    </span></h3>
                <h3 class="texth3">محل تولد: <span class="span3">
                    @if(!empty($profile->birth_place))
                        {{$profile->birth_place}}
                    @else
تهران

                     @endif
                    </span></h3>
            </section>
            <section class="col-xs-6 col-md-6">
                <h3 class="texth3">وضعیت تاهل: <span class="span1">
                    @if(!empty($profile->marriage))
                        {{$profile->marriage}}
                    @else
                مجرد
                    @endif
                    </span></h3>
                <h3 class="texth3">نظام وظیفه: <span class="span2">
                    @if(!empty($profile->military))
                        {{$profile->military}}
                    @else
                       معافیت تحصیلی
                        @endif
                    </span></h3>
            </section>
        </div>
        @endforeach
        @else
            <h2>درباره من</h2>
            <p class="text-justify mCustomScrollbar content-a" data-mcs-theme="minimal-dark">
                بک گراند ذهنی من هوشمندی کسب و کار و طراحی سیستم های اطلاعاتی است، ایجاد محیطی پویا، یادگیری روز افزون آمال محیط کاری و شخصی من است و سعی میکنم با استفاده از هوش تعاملی و هیجانی و ایجاد ارتباط با همکاران و مخاطبانم بیشتر از آنچه به من سپرده اند انجام دهم و کمتر از آنچه به من متعهد شدند، دریافت کنم
            </p>
    </section>
    <section style="margin-bottom: 15px;" class="col-xs-12 col-md-6 pull-left">
        <div class="box">
            <p>اطلاعات شخصی</p>
            <section class="col-xs-6 col-md-6">
                <h3 class="texth3">تولد: <span class="span1">۱۳۶۶/۱۲/۰۵

</span></h3>
                <h3 class="texth3">جنسیت: <span class="span2">                            مرد
</span></h3>
                <h3 class="texth3">محل تولد: <span class="span3">تهران</span></h3>
            </section>
            <section class="col-xs-6 col-md-6">
                <h3 class="texth3">وضعیت تاهل: <span class="span1">مجرد</span></h3>
                <h3 class="texth3"> نظام وظیفه: <span class="span2">                       معافیت تحصیلی</span></h3>
            </section>
        </div>
        @endif
    </section>
</main>
