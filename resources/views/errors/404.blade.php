<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/style.css" rel="stylesheet">
    <link href="/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('/css/plugins/bootstrap-rtl/bootstrap-rtl.min.css')}}" rel="stylesheet">
    <title>Document</title>
</head>
<body style="height: 97%; background-color: #ffd93e; overflow: hidden;">

<p style="text-align: center;"><img class="img-responsive" src="images/front/profile404.jpg" width="400px" height="auto" alt="salam"></p>
<p style="font-family: webmdesign; font-size: 25px; text-align: center; margin-top: 50px; color: #222;">متاسفانه صفحه مورد نظر شما یافت نشد</p>
<p style="text-align: center;">
    <a href="{{route('profile')}}">
        <button class="tweb" style="background-color: #eee; width: 220px; height: 60px; border-radius: 15px;">
        <p style="font-family: webmdesign; color: #222; margin-top: 11px; margin-right: -20px;">
    <strong><i style="font-size: 20px; color: #000; float: left; margin-top: 2px; margin-left: 5px;" class="fa fa-angle-left"></i></strong><strong>بازگشت به صفحه اصلی</strong></p>
</button></a>
</p>
<script src="{{asset('/js/jquery-2.1.1.js')}}"></script>
<script src="{{asset('/js/bootstrap.min.js')}}"></script>
</body>
</html>



