
    <!-- jQuery Version 1.11.0 -->
    <script src="{{ ('js/jquery-1.11.0.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ ('js/bootstrap.min.js') }}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{ ('js/metisMenu/metisMenu.min.js') }}"></script>

    <!-- Morris Charts JavaScript -->
    <script src="{{ ('js/raphael/raphael.min.js') }}"></script>
    <script src="{{ ('js/morris/morris.min.js') }}"></script>


    <script src="{{ ('js/jquery/jquery.dataTables.min.js') }}"></script>
    <script src="{{ ('js/bootstrap/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ ('js/bootstrap/dataTables.bootstrap.js') }}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{ ('js/sb-admin-2.js') }}"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.css" rel="stylesheet">
   
    <script src="{{ ('js/dataTables.responsive.js') }}"></script>


<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.js"></script>

    <script>
        $(document).ready(function() {
          $('#dataTables-example').dataTable();
        });
    </script>


<script>
function goBack() {
    window.history.back();
}

function deleted() {
    return confirm('تأكيد الحذف؟')
}

$(document).ready(function() {
  $('.summernote').summernote();
});
</script>



<script>
$(document).ready(function(){
    $(".close").click(function(){
        $("#myAlert").alert("close");
    });
});
</script>

</body>

</html>
