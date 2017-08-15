<script src="/js/jquery-2.1.1.js"></script>
<script src="/js/bootstrap.js"></script>
<script src="/js/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<!-- Peity -->
<script src="/js/plugins/peity/jquery.peity.min.js"></script>
<script src="/js/demo/peity-demo.js"></script>
<!-- Custom and plugin javascript -->
<script src="/js/inspinia.js"></script>
<script src="/js/plugins/pace/pace.min.js"></script>

<!-- jQuery UI -->

<!-- GITTER -->
<script src="/js/plugins/gritter/jquery.gritter.min.js"></script>

<!-- Sparkline -->
<script src="/js/plugins/sparkline/jquery.sparkline.min.js"></script>

<!-- Sparkline demo data  -->
<script src="/js/demo/sparkline-demo.js"></script>

<!-- ChartJS-->
<script src="/js/plugins/chartJs/Chart.min.js"></script>

<!-- Toastr -->
<script src="/js/plugins/toastr/toastr.min.js"></script>




<script src="/js/bootstrap-datepicker.min.js"></script>
<script src="/js/bootstrap-datepicker.fa.min.js"></script>
<!-- Jasny -->
<script src="js/plugins/jasny/jasny-bootstrap.min.js"></script>

<!-- DROPZONE -->
<script src="js/plugins/dropzone/dropzone.js"></script>

<!-- CodeMirror -->
<script src="js/plugins/codemirror/codemirror.js"></script>
<script src="js/plugins/codemirror/mode/xml/xml.js"></script>
<!-- JSKnob -->
<script src="js/plugins/jsKnob/jquery.knob.js"></script>

<!-- Input Mask-->
<script src="js/plugins/jasny/jasny-bootstrap.min.js"></script>

<!-- Data picker -->
<script src="js/plugins/datapicker/bootstrap-datepicker.js"></script>

<!-- NouSlider -->
<script src="js/plugins/nouslider/jquery.nouislider.min.js"></script>

<!-- Switchery -->
<script src="js/plugins/switchery/switchery.js"></script>

<!-- IonRangeSlider -->
<script src="js/plugins/ionRangeSlider/ion.rangeSlider.min.js"></script>

<!-- iCheck -->
<script src="js/plugins/iCheck/icheck.min.js"></script>

<!-- MENU -->
<script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>

<!-- Color picker -->
<script src="js/plugins/colorpicker/bootstrap-colorpicker.min.js"></script>

<!-- Clock picker -->
<script src="js/plugins/clockpicker/clockpicker.js"></script>

<!-- Image cropper -->
<script src="js/plugins/cropper/cropper.min.js"></script>

<!-- Date range use moment.js same as full calendar plugin -->
<script src="js/plugins/fullcalendar/moment.min.js"></script>

<!-- Date range picker -->
<script src="js/plugins/daterangepicker/daterangepicker.js"></script>

<!-- Select2 -->
<script src="js/plugins/select2/select2.full.min.js"></script>

<!-- TouchSpin -->
<script src="js/plugins/touchspin/jquery.bootstrap-touchspin.min.js"></script>

<!-- Tags Input -->
<script src="js/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>

<!-- Dual Listbox -->
<script src="js/plugins/dualListbox/jquery.bootstrap-duallistbox.js"></script>
{{--<script src="js/inspinia.js"></script>--}}
<script src="js/plugins/pace/pace.min.js"></script>
<script src="js/plugins/footable/footable.all.min.js"></script>
<!-- blueimp gallery -->
<script src="js/plugins/blueimp/jquery.blueimp-gallery.min.js"></script>
<script src="js/plugins/iCheck/icheck.min.js"></script>
<script src="js/cheouts.js"></script>
<script src="js/time.js"></script>
<script src="js/plugins/chosen/chosen.jquery.js"></script>
<script src="js/jeditor.js"></script>
<script src="js/main.js"></script>
<script src="js/charming.min.js"></script>
<script src="anime.min.js"></script>

{{--<script src="js/plugins/summernote/summernote.min.js"></script>--}}
{{--<script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>--}}
{{--<script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>--}}
{{--<script>--}}
    {{--$(document).ready(function(){--}}

        {{--$('.summernote').summernote();--}}

    {{--});--}}
{{--</script>--}}

{{--<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>--}}
{{--<script>tinymce.init({ selector:'textarea' });</script>--}}
<script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>
<script>
        $(document).ready(function(){
            $('a.menu').click(function(){
                $('a.menu').removeClass("active");
                $(this).addClass("active");
            });
        });
</script>
{{--<script>--}}
    {{--$(document).ready(function () {--}}
        {{--$('#editor').wysiwyg({--}}
            {{--hotKeys: {--}}
                {{--'ctrl+b meta+b': 'bold',--}}
                {{--'ctrl+i meta+i': 'italic',--}}
                {{--'ctrl+u meta+u': 'underline',--}}
                {{--'ctrl+z meta+z': 'undo',--}}
                {{--'ctrl+y meta+y meta+shift+z': 'redo'--}}
            {{--}--}}
        {{--});--}}
    {{--});--}}
{{--</script>--}}
<script>
    $(document).ready(function () {
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>
<script>
    $( function() {
        $("#clickhide").click(function(e) {
            $("#hiden").hide()

        });

    } );

    $(document).ready(function() {

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
    });
</script>
<script>
    $(document).ready(function(){
//        $(function(){
            $('button.edit').click(function(e){
                e.preventDefault();
                $.get($(this).attr('data-href'),function(data){
                    $('#myModal2').find('.modal-body').html(data);
                })
            });
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

        $('.dual_select').bootstrapDualListbox({
            selectorMinimalHeight: 160
        });


    });


    var basic_slider = document.getElementById('basic_slider');

    noUiSlider.create(basic_slider, {
        start: 40,
        behaviour: 'tap',
        connect: 'upper',
        range: {
            'min':  20,
            'max':  80
        }
    });

    var range_slider = document.getElementById('range_slider');

    noUiSlider.create(range_slider, {
        start: [ 40, 60 ],
        behaviour: 'drag',
        connect: true,
        range: {
            'min':  20,
            'max':  80
        }
    });

    var drag_fixed = document.getElementById('drag-fixed');

    noUiSlider.create(drag_fixed, {
        start: [ 40, 60 ],
        behaviour: 'drag-fixed',
        connect: true,
        range: {
            'min':  20,
            'max':  80
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
    }function readURL3(input) {
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


