<!--menu mobile-->
<div style="direction:rtl;" class="container hidden-md hidden-lg">
    <div class="main">
        <nav style="direction:rtl;" id="menu3" class="menu3">
            <div class="morph-shape"
                 data-morph-open="M260,500H0c0,0,8-120,8-250C8,110,0,0,0,0h260c0,0-8,110-8,250C252,380,260,500,260,500z">
                <svg width="100%" height="100%" viewBox="0 0 260 500" preserveAspectRatio="none">
                    <path fill="none"
                          d="M260,500H0c0,0,0-120,0-250C0,110,0,0,0,0h260c0,0,0,110,0,250C260,380,260,500,260,500z"/>
                </svg>
            </div>
            <button class="menu__label3"><i class="fa fa-fw fa-bars"></i></button>
            <ul class="menu__inner3">
                <br>

                <li id="icon11"><img style="margin-right:-2px; margin-top:10px;" src="/images/front/homepage (3).png">
                </li>
                <li id="icon12"><img style="margin-top:20px; margin-right:-2px;" src="/images/front/view (1).png"></li>
                @if(!$workExperiences->isEmpty())
               <li id="icon13"><img style="margin-top:20px; margin-right:-2px;" src="/images/front/briefcase (1).png">
                </li>
                @endif
                @if(!$educations->isEmpty())
                <li id="icon14"><img style="margin-top:20px; margin-right:-2px;" src="/images/front/mortarboard (1).png">
                </li>
                @endif
                @if(!$skills->isEmpty())
                <li id="icon157"><img style="margin-top:20px; margin-right:-2px;" src="/images/front/skills.png"></li>
                @endif
                @if(!$workSamples->isEmpty())
                <li id="icon15"><img style="margin-top:20px; margin-right:-2px;" src="/images/front/diamond (1).png">
                </li>
                @endif
              @if(!$certifications->isEmpty())
                <li id="icon155"><img style="margin-top:20px; margin-right:-2px;" src="/images/front/quality (1).png">
                </li>
                @endif
                @if(!$docs->isEmpty())
                <li id="icon156"><img style="margin-top:20px; margin-right:-2px;" src="/images/front/notebook.png"></li>
                @endif
                @if(!$recommendations->isEmpty())
                <li id="icon16"><img style="margin-top:20px; margin-right:-2px;" src="/images/front/edit (1).png"></li>
                @endif
                @if(!$blogs->isEmpty())
                <li id="icon17"><img style="margin-top:20px; margin-right:-2px;"
                                     src="/images/front/speech-bubble (2).png"></li>
                @endif
                <li id="icon18"><img style="margin-top:20px; margin-right:-2px;" src="/images/front/envelope (1).png">
                </li>
            </ul>
        </nav>
    </div>
</div>

<!--home-->
@if(!$profiles->isEmpty())
@foreach($profiles as $profile)

    @if(!empty($profile->cover))
        <img class="cover-img" src="{{$profile->cover}}"
             alt="cover" height="480px" width="100%">
    @else
        <img class="cover-img" height="480px" width="100%"  src="/images/front/background.jpg"
             alt="cover">
    @endif

      @if(!empty($profile->photo))
        <section class="pull-right col-sm-6 col-xs-12 col-md-5">
            <img class="me img-responsive" width="370px;"  height="200px" src="{{$profile->photo}}" alt="me">
        </section>
        @else
        <section class="pull-right col-sm-6 col-xs-12 col-md-5">
            <img class="me img-responsive" width="370px;"  height="200px" src="/images/front/Avatar2.png" alt="me">
        </section>
        @endif

    <div class="row">
    <section class="pull-left col-xs-12 col-md-6 texth1">
    <h1>
        @if(!empty($profile->first_name))
            {{$profile->first_name}}
        @else
سعید
        @endif
        @if(!empty($profile->last_name))
        {{$profile->last_name}}
        @else
محمدی
            @endif
    </h1>

    <p class="textp">
        @if(!empty($profile->summary))
        {{$profile->summary}}
         @else
            فردایی وجود ندارد
        @endif
    </p>
    <p>شغل : <span class="p-text">
            @if(!empty($profile->job))
            {{$profile->job}}
            @else
مدیر پروژه
            @endif
        </span>
    <button id="tagrobe" class="btn btn-head">
    <p>بیشتر</p>
    </button>
    </p>
    <p class="p-text2">تحصیلات : <span class="p-text3">
        @if(!empty($profile->last_degree))
            {{$profile->last_degree}}
         @else
دکترای مدیریت سیستم ها
            @endif
        </span>
    <button id="tahsilat" class="btn btn-head">
    <p>بیشتر</p>
    </button>
    </p>
    </section>
    </div>
@endforeach
    @else
    <img class="cover-img" height="480px" width="100%"  src="/images/front/background.jpg"
         alt="cover">
    <section class="pull-right col-sm-6 col-xs-12 col-md-5">
        <img class="me img-responsive" width="370px;"  height="200px" src="/images/front/Avatar2.png" alt="me">
    </section>


        <section class="pull-left col-xs-12 col-md-6 texth1">
            <h1>سعید محمدی  </h1>
            <p class="textp">            فردایی وجود ندارد
            </p>
            <p>شغل : <span class="p-text">مدیر پروژه
</span>
                <button id="tagrobe" class="btn btn-head">
            <p>بیشتر</p>
            </button>
            </p>
            <p class="p-text2">تحصیلات : <span class="p-text3">دکترای مدیریت سیستم ها</span>
                <button id="tahsilat" class="btn btn-head">
            <p>بیشتر</p>
            </button>
            </p>
        </section>

@endif
<main id="home11" class="container-fluid background">

    <section class="pull-right hidden-xs col-md-1 nav-left">
        <div class="navbar-tunel">
            <section class="pull-right col-md-6">

                <div id="icon1" class="web-icon">
                    <li><img src="images/front/homepage (3).png" alt="home" width="23px"> <span class="tooltip1">
            <p class="text-center">خانه</p>
            <i class="fa fa-caret-right" aria-hidden="true"></i> </span></li>
                </div>

                <div id="icon2" class="web-icon">
                    <li><img src="images/front/view (1).png" alt="about" width="23px"> <span class="tooltip2">
            <p class="text-center">درباره</p>
            <i class="fa fa-caret-right" aria-hidden="true"></i> </span></li>
                </div>

                @if(!$workExperiences->isEmpty())
                <div id="icon3" class="web-icon">
                    <li><img src="images/front/briefcase (1).png" alt="taj" width="23px"> <span class="tooltip3">
            <p class="text-center">سوابق کاری</p>
            <i class="fa fa-caret-right" aria-hidden="true"></i> </span></li>
                </div>
                @endif

                @if(!$educations->isEmpty())
                <div id="icon4" class="web-icon">
                    <li><img src="images/front/mortarboard (1).png" alt="ede" width="23px"> <span class="tooltip4">
            <p class="text-center">تحصیلات</p>
            <i class="fa fa-caret-right" aria-hidden="true"></i> </span></li>
                </div>
                    @endif
                @if(!$types->isEmpty() or !$languages->isEmpty())
                <div id="icon57" class="web-icon">
                    <li><img src="images/front/skills.png" alt="portfolio" width="23px"> <span class="tooltip57">
            <p class="text-center">مهارت ها</p>
            <i class="fa fa-caret-right" aria-hidden="true"></i> </span></li>
                </div>
                @endif

            @if(!$workSamples->isEmpty())
                <div id="icon5" class="web-icon">
                    <li><img src="images/front/diamond (1).png" alt="portfolio" width="23px"> <span class="tooltip5">
            <p class="text-center">نمونه کار</p>
            <i class="fa fa-caret-right" aria-hidden="true"></i> </span></li>
                </div>
                @endif

                @if(!$certifications->isEmpty())
                <div id="icon55" class="web-icon">
                    <li><img src="images/front/quality (1).png" alt="portfolio" width="23px"> <span class="tooltip55">
            <p class="text-center">گواهی</p>
            <i class="fa fa-caret-right" aria-hidden="true"></i> </span></li>
                </div>
                @endif


            @if(!$docs->isEmpty())
                <div id="icon56" class="web-icon">
                    <li><img src="images/front/notebook.png" alt="portfolio" width="23px"> <span class="tooltip56">
            <p class="text-center">کتاب</p>
            <i class="fa fa-caret-right" aria-hidden="true"></i> </span></li>
                </div>
                @endif

                @if(!$recommendations->isEmpty())
                <div id="icon6" class="web-icon">
                    <li><img src="images/front/edit (1).png" alt="tosih" width="23px"> <span class="tooltip6">
            <p class="text-center">توصیه ها</p>
            <i class="fa fa-caret-right" aria-hidden="true"></i> </span></li>
                </div>
                @endif

            @if(!$blogs->isEmpty())
                <div id="icon7" class="web-icon">
                    <li><img src="images/front/speech-bubble (2).png" alt="blog" width="23px"> <span class="tooltip7">
            <p class="text-center">بلاگ</p>
            <i class="fa fa-caret-right" aria-hidden="true"></i> </span></li>
                </div>
                @endif


                <div id="icon8" class="web-icon">
                    <li><img src="images/front/envelope (1).png" alt="phone" width="23px"> <span class="tooltip8">
            <p class="text-center">تماس</p>
            <i class="fa fa-caret-right" aria-hidden="true"></i> </span></li>
                </div>


            </section>
        </div>
    </section>
</main>

<!--about-->
@if(!$profiles->isEmpty())
@foreach($profiles as $profile)
<main class="container-fluid">
    <section class="pull-left col-xs-12 col-md-8 nav-bottom">
        <aside class="pull-left top-th"><a href="#"> <i class="fa fa-eye icon-animate" aria-hidden="true"></i>
                <p class="icon-animate">اطلاعات تماس</p>
            </a> <a href="#"><i class="fa fa-envelope-o icon-animate" aria-hidden="true"></i>
                <p class="icon-animate">پیام فرستادن</p>
            </a>
            @if(!empty($profile->pdf))
            <a style="border-right:none;" href="{{$profile->pdf}}" download><i class="fa fa-diamond"
                               aria-hidden="true"></i>
                <p> دانلود رزومه</p>
            </a>
                @else
                <a style="border-right:none;" href="#" download><i class="fa fa-diamond"
                                                                                   aria-hidden="true"></i>
                    <p> دانلود رزومه</p>
                </a>
            @endif
        </aside>
    </section>
</main>
@endforeach
    @else
    <main class="container-fluid">
        <section class="pull-left col-xs-12 col-md-8 nav-bottom">
            <aside class="pull-left top-th"><a href="#"> <i class="fa fa-eye icon-animate" aria-hidden="true"></i>
                    <p class="icon-animate">اطلاعات تماس</p>
                </a> <a href="#"><i class="fa fa-envelope-o icon-animate" aria-hidden="true"></i>
                    <p class="icon-animate">پیام فرستادن</p>
                </a> <a style="border-right:none;" href="#" download><i class="fa fa-diamond"
                                                                                        aria-hidden="true"></i>
                    <p> دانلود رزومه</p>
                </a>
            </aside>
        </section>
    </main>
@endif