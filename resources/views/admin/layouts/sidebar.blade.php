<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element"> <span>
                        <p class="text-center"><img alt="image" class="img-circle" src="/image/a4.jpg"/></p>
                             </span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong
                                            class="font-bold text-center"><p class="text-center">سعید محمدی</p></strong>
     </span> <span class="text-muted text-xs block text-center"> مدیریت پروژه<b
                                            class="caret"></b></span> </span> </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="{{route('profile')}}">پروفایل</a></li>
                        <li><a href="{{route('contact')}}">تماس</a></li>
                        <li><a href="{{route('message')}}">ایمیل</a></li>
                        <li>
                            <a href="{{route('social-network')}}"><i class="fa fa-diamond"></i> <span
                                        class="nav-label">شبکه اجتماعی</span></a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="{{route('logout')}}">بیرون رفتن</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    IN+
                </div>
            </li>
            <li class="active">
                <a href="{{route('admin')}}"><i class="fa fa-th-large"></i> <span class="nav-label">داشبورد</span></a>

            </li>
            <li>
                <a href="#"><i class="fa fa-picture-o"></i> <span class="nav-label">کار</span><span
                            class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li>
                        <a href="{{route('recommend')}}"><i class="fa fa-pie-chart"></i> <span
                                    class="nav-label">نظرات مدیران</span> </a>
                    </li>
                    <li>
                        <a href="{{route('work-experience')}}"><i class="fa fa-flask"></i> <span
                                    class="nav-label">سوابق کاری</span></a>
                    </li>

                </ul>
            </li>








            <li>
                <a href="#"><i class="fa fa-picture-o"></i> <span class="nav-label">نمونه کارها</span><span
                            class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li>
                        <a href="{{route('category')}}"><i class="fa fa-files-o"></i> <span class="nav-label">دسته بندی</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('work-sample')}}"><i class="fa fa-globe"></i> <span class="nav-label">نمونه کار</span></a>

                    </li>
                    <li>
                        <a href="{{route('docs')}}"><i class="fa fa-edit"></i> <span class="nav-label">مقالات کتاب</span></a>

                    </li>

                </ul>
            </li>

            <li>
                <a href="#"><i class="fa fa-picture-o"></i> <span class="nav-label">اخبار</span><span
                            class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li>
                        <a href="{{route('album')}}"><i class="fa fa-laptop"></i> <span class="nav-label">البوم</span></a>
                    </li>
                    <li>
                        <a href="{{route('blog')}}"><i class="fa fa-laptop"></i> <span class="nav-label">بلاگ</span></a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="#"><i class="fa fa-picture-o"></i> <span class="nav-label">توانمندی ها</span><span
                            class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="{{route('skills')}}"><i class="fa fa-flask"></i> <span class="nav-label">مهارت ها</span></a></li>
                    <li><a href="{{route('language')}}"><i class="fa fa-desktop"></i> <span class="nav-label">زبان</span></a></li>
                    <li><a href="{{route('certification')}}"><i class="fa fa-diamond"></i> <span class="nav-label">گواهی</span></a></li>
                    <li>
                        <a href="{{route('education')}}"><i class="fa fa-diamond"></i> <span class="nav-label">تحصیلات</span></a>
                    </li>
                </ul>
            </li>

        </ul>

    </div>
</nav>


