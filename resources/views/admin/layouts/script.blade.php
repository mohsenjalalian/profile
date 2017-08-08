<script src="/js/jquery-2.1.1.js"></script>
<script src="/js/bootstrap.js"></script>
<script src="/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Flot -->
<script src="/js/plugins/flot/jquery.flot.js"></script>
<script src="/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
<script src="/js/plugins/flot/jquery.flot.spline.js"></script>
<script src="/js/plugins/flot/jquery.flot.resize.js"></script>
<script src="/js/plugins/flot/jquery.flot.pie.js"></script>

<!-- Peity -->
<script src="/js/plugins/peity/jquery.peity.min.js"></script>
<script src="/js/demo/peity-demo.js"></script>

<!-- Custom and plugin javascript -->
<script src="/js/inspinia.js"></script>
<script src="/js/plugins/pace/pace.min.js"></script>

<!-- jQuery UI -->
<script src="/js/plugins/jquery-ui/jquery-ui.min.js"></script>

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

<script>
    $(document).ready(function () {
        $("#datepicker0").datepicker();

        $("#datepicker1").datepicker();
        $("#datepicker1btn").click(function (event) {
            event.preventDefault();
            $("#datepicker1").focus();
        })

        $("#datepicker2").datepicker({
            showOtherMonths: true,
            selectOtherMonths: true
        });

        $("#datepicker3").datepicker({
            numberOfMonths: 3,
            showButtonPanel: true
        });

        $(".datepicker4").datepicker({
            yearRange: "1310:1396",
            changeMonth: true,
            changeYear: true,
            dateFormat: "yy/mm/dd",
            Default: [],
            Accepts: (0, 1, 2, 3, 4, 5, 6, 7, 8, 9)
        });

        $("#datepicker5").datepicker({
            minDate: 0,
            maxDate: "+14D"
        });

        $("#datepicker6").datepicker({
            isRTL: true,
            dateFormat: "d/m/yy"
        });
    });
</script>


<script type='text/javascript'>
    $(function () {
        //Maps your button click event to the File Upload click event
        $("#upfile1").click(function (e) {
            e.preventDefault();
            $("#file1").trigger('click');
        });

        $(".file1").click(function (e) {
            e.preventDefault();
            $("#file1").trigger('click');
        });

        $(".file2").click(function (e) {
            e.preventDefault();
            $("#file2").trigger('click');
        });

        $(".file3").click(function (e) {
            e.preventDefault();
            $("#file3").trigger('click');
        });
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