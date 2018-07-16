<!-- Footer -->
<div class="footer text-muted">
    &copy; 2016. <a href="#">Ecommerce Web App </a> by <a href="#" target="_blank"> Mohamed Ragab</a>
</div>
<!-- /footer -->

</div>
<!-- /content area -->

</div>
<!-- /main content -->

</div>
<!-- /page content -->

</div>
<!-- /page container -->

</body>
</html>
<script>

    $('.addInput').click(function(){

        $(this).parent().next('.inputDiv').clone().appendTo(".imageUpload");

    });
    $('body').on('click', '.removeInput', function() {
        $(this).parent().parent().remove();
    });
</script>