<!-- form-->

<main>


    <section class="pull-left col-xs-12 col-sm-6 col-md-6 contact1">
        <h2>پیام برسان</h2>
        <form action="{{route('saveMessage')}}" method="post">
            {{csrf_field()}}
        <section class="content bgcolor-1"> <span class="input input--nao">
      <input class="input__field input__field--nao" name="name"
             value="{{ Request::old('name') ?: ''}}" type="text" id="input-1"/>
      <label class="input__label input__label--nao" for="input-1">
          <span class="input__label-content input__label-content--nao">نام</span>
      </label>
      <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
        <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
      </svg>

      </span>
            <span class="input input--nao">
      <input class="input__field input__field--nao" name="email"
             value="{{ Request::old('email') ?: ''}}" type="text" id="input-2"/>
      <label class="input__label input__label--nao" for="input-2">
          <span class="input__label-content input__label-content--nao">ایمیل</span>
      </label>
      <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
        <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
      </svg>
      </span> <span class="input input--nao">
      <input class="input__field input__field--nao" name="message"
             value="{{ Request::old('message') ?: ''}}" type="text" id="input-3"/>
      <label class="input__label input__label--nao" for="input-3">
          <span class="input__label-content input__label-content--nao">پیام</span>
      </label>
      <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
        <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
      </svg>

      </span>
            <button class="btn btn-form">ارسال</button>
        </section>
        </form>
    </section>

    <section class="pull-right col-xs-12 col-sm-6 col-md-6 contact2">
        <div class="web"><i class="fa fa-envelope-o" aria-hidden="true"></i>
            <p class="text-for"> ایمیل</p>
            <p class="text-for2">info@cotint.ir</p>
        </div>
        <div class="web"><i class="fa fa-phone" aria-hidden="true"></i>
            <p class="text-for"> تلفن</p>
            <p class="text-for2">۰۲۱-۲۲۷۰۴۳۵۶</p>
        </div>
        <div class="web"><i class="fa fa-volume-control-phone" aria-hidden="true"></i>
            <p class="text-for"> تلفن همراه</p>
            <p class="text-for2">۰۹۳۷۰۰۸۷۵۸۱</p>
        </div>
        <div class="web"><i class="fa fa-tty" aria-hidden="true"></i>
            <p class="text-for">تلفن دفتر</p>
            <p class="text-for2">۰۲۱-۲۲۷۰۴۳۵۶</p>
        </div>
        <div class="texti"><i id="social-fo1" class="fa fa-google-plus" aria-hidden="true"></i> <i id="social-fo2"
                                                                                                   class="fa fa-twitter"
                                                                                                   aria-hidden="true"></i>
            <i id="social-fo3" class="fa fa-facebook" aria-hidden="true"></i></div>
        <div class="pull-left"><img class="img-qr hidden-xs" src="images/front/qr-code.png" width="130px"></div>
    </section>
</main>

<!--footer-->

<footer id="about7" class="container-fluid background-five">
    <section class="container">
        <section class="col-md-4 pull-left web-footer"><span class="pull-left text-fo">۰۲۱-۲۲۷۴۸۵۴۳<i
                        class="fa fa-volume-control-phone" aria-hidden="true"></i></span></section>
        <section class="col-md-4 pull-left web-footer">
            <p class="text-center text-fo2">Power By <span style="color:#245c43;"><a class="text-fo3"
                                                                                     href="http://cotint.ir/"
                                                                                     target="_blank"><strong>Cotint</strong></a></span>
            </p>
        </section>
        <section class="col-md-4 pull-right web-footer"><img class="pull-right img-fo" src="images/front/co.png"
                                                             height="28px"></section>
    </section>
</footer>

<!--btn-top-->

<div class="btn-top"><i style="color:#FFFFFF; font-size:22px; padding-top:12px; padding-right:14px;"
                        class="fa fa-chevron-up" aria-hidden="true"></i></div>

