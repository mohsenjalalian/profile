<script src="/js/jquery-2.1.1.js"></script>
<script src="/js/bootstrap.js"></script>
<script src="/js/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="/js/plugins/peity/jquery.peity.min.js"></script>
<script src="/js/inspinia.js"></script>
<script src="/js/plugins/pace/pace.min.js"></script>
<script src="/js/plugins/gritter/jquery.gritter.min.js"></script>
<script src="/js/plugins/sparkline/jquery.sparkline.min.js"></script>
{{--<script src="/js/demo/sparkline-demo.js"></script>--}}
{{--<script src="/js/plugins/toastr/toastr.min.js"></script>--}}
{{--<script src="/js/bootstrap-datepicker.min.js"></script>--}}
{{--<script src="/js/bootstrap-datepicker.fa.min.js"></script>--}}
<script src="js/plugins/jasny/jasny-bootstrap.min.js"></script>
<script src="js/plugins/codemirror/codemirror.js"></script>
{{--<script src="js/plugins/codemirror/mode/xml/xml.js"></script>--}}
{{--<script src="js/plugins/jsKnob/jquery.knob.js"></script>--}}
{{--<script src="js/plugins/jasny/jasny-bootstrap.min.js"></script>--}}
{{--<script src="js/plugins/datapicker/bootstrap-datepicker.js"></script>--}}
{{--<script src="js/plugins/nouslider/jquery.nouislider.min.js"></script>--}}
{{--<script src="js/plugins/switchery/switchery.js"></script>--}}
{{--<script src="js/plugins/ionRangeSlider/ion.rangeSlider.min.js"></script>--}}

{{--<script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>--}}
{{--<script src="js/plugins/fullcalendar/moment.min.js"></script>--}}
{{--<script src="js/plugins/daterangepicker/daterangepicker.js"></script>--}}
{{--<script src="js/plugins/select2/select2.full.min.js"></script>--}}
{{--<script src="js/plugins/touchspin/jquery.bootstrap-touchspin.min.js"></script>--}}
{{--<script src="js/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>--}}
{{--<script src="js/plugins/dualListbox/jquery.bootstrap-duallistbox.js"></script>--}}
<script src="js/plugins/footable/footable.all.min.js"></script>
<script src="js/plugins/blueimp/jquery.blueimp-gallery.min.js"></script>
<script src="js/cheouts.js"></script>
<script src="js/time.js"></script>
<script src="js/plugins/chosen/chosen.jquery.js"></script>
{{--<script src="js/plugins/anime.min.js"></script>--}}
<script src="js/classie.js"></script>
{{--<script src="js/modalEffects.js"></script>--}}
{{--<script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>--}}
{{--<script src="js/plugins/sweetalert/sweetalert.min.js"></script>--}}
<script src="js/plugins/bootstrap-markdown/bootstrap-markdown.js"></script>
<script src="js/plugins/bootstrap-markdown/markdown.js"></script>
<script src="js/plugins/iCheck/icheck.min.js"></script>


<script>
    $(document).ready(function () {
        var close = document.getElementsByClassName("closebtn");
        var i;
        for (i = 0; i < close.length; i++) {
            close[i].onclick = function () {
                var div = this.parentElement;
                div.style.opacity = "0";
                setTimeout(function () {
                    div.style.display = "none";
                }, 600);
            }
        }
    });
</script>

<script>
    $(document).ready(function () {
        $('.alert22').fadeOut(5000)
    });
</script>
<script>
    function chek(obj) {
        obj.setCustomValidity('لطفا این قسمت را پر کنید')
    }

    function chek2(obj) {
        obj.setCustomValidity('');
    }
</script>
<script>
    $(document).ready(function () {
        $("#some-textarea").markdown({autofocus: false, savable: false})
    });
</script>

<script>

    $(document).ready(function () {

    });
</script>
<script>
    $(document).ready(function () {

        $('.footable').footable();
        $('.footable2').footable();

    });

</script>
<script>
    $(document).ready(function () {
        $('.i-checks').iCheck({
            checkboxClass: 'icheckbox_square-green',
            radioClass: 'iradio_square-green',
        });
        $(document).on('click', 'button.edit', function (e) {
            e.preventDefault();
            $.get($(this).attr('data-href'), function (data) {
                $('#myModal4').find('.modal-body').html(data);
            })
        });
        $('.chosen-select').chosen({width: "100%"});

        $("#ionrange_1").ionRangeSlider({
            min: 0,
            max: 5000,
            type: 'double',
            prefix: "$",
            maxPostfix: "+",
            prettify: false,
            hasGrid: true
        });

        $("#ionrange_2").ionRangeSlider({
            min: 0,
            max: 10,
            type: 'single',
            step: 0.1,
            postfix: " carats",
            prettify: false,
            hasGrid: true
        });

        $("#ionrange_3").ionRangeSlider({
            min: -50,
            max: 50,
            from: 0,
            postfix: "°",
            prettify: false,
            hasGrid: true
        });

        $("#ionrange_4").ionRangeSlider({
            values: [
                "January", "February", "March",
                "April", "May", "June",
                "July", "August", "September",
                "October", "November", "December"
            ],
            type: 'single',
            hasGrid: true
        });

        $("#ionrange_5").ionRangeSlider({
            min: 10000,
            max: 100000,
            step: 100,
            postfix: " km",
            from: 55000,
            hideMinMax: true,
            hideFromTo: false
        });

        $(".dial").knob();
    });
</script>

<script>

    //    $(document).ready(function () {
    //        $(document).on('click', 'a.edit',    function (e) {
    //            e.preventDefault();
    //            $.get($(this).attr('data-href'), function (data) {
    //                $('#modal-13').modal('toggle');
    //                $('#modal-13').find('.md-content').html(data);
    //            })
    //        });
    //        });


    $('.i-checks').iCheck({
        checkboxClass: 'icheckbox_square-green',
        radioClass: 'iradio_square-green'
    });


    $(".touchspin1").TouchSpin({
        buttondown_class: 'btn btn-white',
        buttonup_class: 'btn btn-white'
    });

    $(".touchspin2").TouchSpin({
        min: 0,
        max: 100,
        step: 0.1,
        decimals: 2,
        boostat: 5,
        maxboostedstep: 10,
        postfix: '%',
        buttondown_class: 'btn btn-white',
        buttonup_class: 'btn btn-white'
    });

    $(".touchspin3").TouchSpin({
        verticalbuttons: true,
        buttondown_class: 'btn btn-white',
        buttonup_class: 'btn btn-white'
    });

    $('.dual_select').bootstrapDualListbox({selectorMinimalHeight: 160});


    var basic_slider = document.getElementById('basic_slider');

    noUiSlider.create(basic_slider, {
        start: 40,
        behaviour: 'tap',
        connect: 'upper',
        range: {
            'min': 20,
            'max': 80
        }
    });

    var range_slider = document.getElementById('range_slider');

    noUiSlider.create(range_slider, {
        start: [40, 60],
        behaviour: 'drag',
        connect: true,
        range: {
            'min': 20,
            'max': 80
        }
    });

    var drag_fixed = document.getElementById('drag-fixed');

    noUiSlider.create(drag_fixed, {
        start: [40, 60],
        behaviour: 'drag-fixed',
        connect: true,
        range: {
            'min': 20,
            'max': 80
        }
    });

</script>

<script>
    function readURL1(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#photo1')
                    .attr('src', e.target.result)
                    .width(50)
                    .height(50);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }

    function readURL2(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#photo2')
                    .attr('src', e.target.result)
                    .width(50)
                    .height(50);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }

    function readURL3(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#photo3')
                    .attr('src', e.target.result)
                    .width(50)
                    .height(50);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>


