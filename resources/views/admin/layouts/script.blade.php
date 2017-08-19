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
<script src="js/plugins/jasny/jasny-bootstrap.min.js"></script>
<script src="js/plugins/codemirror/codemirror.js"></script>
<script src="js/plugins/footable/footable.all.min.js"></script>
<script src="js/classie.js"></script>

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
        $('.footable').footable();
        $('.footable2').footable();
    });
</script>
<script>
    $(document).ready(function () {
        $('form.frm').submit(function () {
           if(confirm("مطمنی که میخوای پاک کنی ؟")){
               return true;
           }
           return false;
        });
        $(document).on('click', 'button.edit', function (e) {
            e.preventDefault();
            $.get($(this).attr('data-href'), function (data) {
                $('#myModal4').find('.modal-body').html(data);
            })
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


