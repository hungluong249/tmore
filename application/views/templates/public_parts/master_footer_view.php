
<footer class="footer container-fluid">
    <div class="container">

	</div>
</footer>




<!-- Lightbox JS -->
<script src="<?php echo site_url('assets/lib/lightbox/js/lightbox.min.js') ?>"></script>
<!-- jQuery Input -->
<script src="<?php echo site_url('assets/js/script.min.js') ?>"></script>

<script type="text/javascript">
    function onLoad(){
        if( $(window).width() <= 992) {

            //Hide nav expand menu
            $('nav > .nav-expand').hide();
        }
    };

    window.onload = onLoad();
</script>


</body>
</html>