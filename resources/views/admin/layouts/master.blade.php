<!--
*
*  INSPINIA - Responsive Admin Theme
*  version 2.6.2
*
-->
<!DOCTYPE html>
<html>

@include('admin.layouts.meta')

<body class="rtls">
<div id="wrapper">

    @include('admin.layouts.sidebar')

    @include('admin.layouts.header')

    @yield('content')

    @include('admin.layouts.footer')

    @include('admin.layouts.chat')

    @include('admin.layouts.control-sidebar')

</div>

@include('admin.layouts.script')
</body>
</html>
