<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element"> <span>
                        @if(!empty($profiles->photo))
                            <p class="text-center">
                                  <img alt="{{$profiles->photo}}" style="width: 100px; height:100px"
                                       class="img-circle" src="{{asset($profiles->photo)}}"/>
                            </p>
                        @else
                            <p class="text-center"> <img alt="image/admin.png" style="width: 100px; height:100px"
                                                         class="img-circle"
                                                         src="{{asset('/image/admin.png')}}"/>
                            </p>
                        @endif
                             </span>
                        @if(!empty($profiles))
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear">
                            <span class="block m-t-xs"> <strong class="font-bold text-center">
                                    <p class="text-center">{{$profiles->first_name}} {{$profiles->last_name}}</p></strong>
                             <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            </span>

                            <span class="text-muted text-xs block text-center">
                                {{$profiles->job}}
                                <b class="caret"></b>
                            </span>
                        </span>
                        </a>
                    @else

                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear">
                            <span class="block m-t-xs">
                                <strong class="font-bold text-center">
                                    <p class="text-center">ادمین</p>
                                </strong>
                            </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="text-muted text-xs block text-center">
                                مدیریت
                                <b class="caret"></b>
                            </span>
                        </a>
                        </span>
                            @endif
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a href="{{route('contact')}}">تماس</a></li>
                                <li><a href="{{route('message')}}">پیام</a></li>
                                <li>
                                    <a href="{{route('social-network')}}"><span
                                                class="nav-label">شبکه اجتماعی</span></a>
                                </li>
                                <li class="divider"></li>
                                <li><a href="{{route('logout')}}">بیرون رفتن</a></li>
                            </ul>
                </div>
                <div class="logo-element">
                    CO
                </div>
            </li>
            <li class="@if (\Request::route()->getName() == "profile") active @endif">
                <a class="menu" href="{{route('profile')}}">
                    <i class="fa fa-th-large"></i> <span class="nav-label">پروفایل</span></a>

            </li>


            <li class="@if (\Request::route()->getName() == "recommend" or \Request::route()->getName() == "work-experience") active @endif">
                <a class="menu" href="#">
                    <i class="fa fa-file-photo-o"></i>
                    <span class="nav-label">پیشینه شغلی</span>
                    <span class="fa arrow"></span>
                </a>

                <ul class="nav nav-second-level collapse">
                    <li class="@if (\Request::route()->getName() == "recommend") active @endif">
                        <a class="menu" href="{{route('recommend')}}"><i class="fa fa-pie-chart"></i> <span
                                    class="nav-label"></span>نظرات مدیران </a>
                    </li>
                    <li class="@if (\Request::route()->getName() == "work-experience") active @endif">
                        <a class="menu" href="{{route('work-experience')}}"><i class="fa fa-flask"></i> <span
                                    class="nav-label"></span>سوابق کاری</a>
                    </li>

                </ul>
            </li>


            <li class="@if (\Request::route()->getName() == "language" or \Request::route()->getName() == "skills" or \Request::route()->getName() == "certification" or \Request::route()->getName() == "education") active @endif">
                <a class="menu" href="#">
                    <i class="fa fa-sitemap"></i> <span class="nav-label">توامندی ها </span><span
                            class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li class="@if (\Request::route()->getName() == "language") active @endif">
                        <a class="menu" href="{{route('language')}}"><i class="fa fa-desktop"></i> <span
                                    class="nav-label"></span>زبان
                        </a>
                    </li>
                    <li class="@if (\Request::route()->getName() == "skills") active @endif">
                        <a class="menu" href="{{route('skills')}}"><i class="fa fa-flask"></i> <span
                                    class="nav-label"></span>مهارت
                            ها</a>
                    </li>
                    <li class="@if (\Request::route()->getName() == "certification") active @endif">
                        <a class="menu" href="{{route('certification')}}"><i class="fa fa-diamond"></i> <span
                                    class="nav-label"></span>گواهی</a>
                    </li>
                    <li class="@if (\Request::route()->getName() == "education") active @endif">
                        <a class="menu" href="{{route('education')}}"><i class="fa fa-envelope"></i> <span
                                    class="nav-label"></span>تحصیلات
                        </a>
                    </li>
                </ul>
            </li>


            <li  class="@if (\Request::route()->getName() == "work-sample" or \Request::route()->getName() == "docs" or \Request::route()->getName() == "category") active @endif">
                <a><i class="fa fa-book"></i> <span class="nav-label">نمونه کار</span><span
                            class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li class="@if (\Request::route()->getName() == "work-sample") active @endif">
                        <a href="{{route('work-sample')}}"><i class="fa fa-globe"></i> <span
                                    class="nav-label"></span>نمونه کار</a>

                    </li>
                    <li class="@if (\Request::route()->getName() == "docs") active @endif">
                        <a href="{{route('docs')}}"><i class="fa fa-edit"></i> <span
                                    class="nav-label"></span>مقالات کتاب</a>

                    </li>
                    <li class="@if (\Request::route()->getName() == "category") active @endif">
                        <a href="{{route('category')}}"><i class="fa fa-files-o"></i> <span
                                    class="nav-label"></span>دسته بندی
                        </a>
                    </li>

                </ul>
            </li>


            <li class="@if (\Request::route()->getName() == "blog" or \Request::route()->getName() == "album") active @endif">
                <a href="#"><i class="fa fa-picture-o"></i> <span class="nav-label">بلاگ</span><span
                            class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li class="@if (\Request::route()->getName() == "blog") active @endif">
                        <a href="{{route('blog')}}"><i class="fa fa-globe"></i> <span
                                    class="nav-label"></span>بلاگ</a>

                    </li>
                    <li class="@if (\Request::route()->getName() == "album") active @endif">
                        <a href="{{route('album')}}"><i class="fa fa-edit"></i> <span
                                    class="nav-label"></span>البوم</a>

                    </li>
                </ul>
            </li>

            <a style="color: #fff; position: relative; top: 130px; right: 50px;" class="menu" href="#">
               <span class="nav-label">Powerd By <a style="color: #fff; position: relative; top: 130px; right: 50px;"
                                                    class="menu" href="http://cotint.ir" target="_blank">
                       <span class="nav-label" style="color: #239963;"><strong>CO </strong></span><strong
                               class="nav-label">|</strong>
                       <span class="nav-label" style="color:#fff;"><strong> tint</strong>
                       </span>
                   </a>
               </span>
            </a>

        </ul>
    </div>
    {{--<p id="hiden" style="color: #fff; margin-top: 120px;" class="text-center">Powerd By <a href="http://cotint.ir"--}}
    {{--target="_blank"><span--}}
    {{--style="color: #239963;"><strong>CO </strong></span><strong>|</strong><span--}}
    {{--style="color:#fff;"><strong> tint</strong></span></a></p>--}}
</nav>


