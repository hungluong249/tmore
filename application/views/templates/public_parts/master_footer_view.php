
<footer class="footer container-fluid">
    <div class="container">
		<div class="row">
			<div class="left col-sm-4 col-xs-12">
				<img src="<?php echo site_url('assets/img/logo-w.png') ?>" alt="imgae logo in white" width="160">
				<h3>Học viện TMORE</h3>
				<p class="paragraph">Địa chỉ: Số 3, 9/259 phố Vọng, Hai Bà Trưng, Hà Nội</p>
				<p class="paragraph">Hotline: 088.828.9922</p>
				<p class="paragraph">Website: tmore.vn </p>
			</div>

			<div class="right col-sm-8 col-xs-12">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d299.471223855124!2d105.84206487585156!3d20.99914681456229!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac706392acef%3A0x61c677370b95106e!2sQu%C3%A1n+Cafe+Melody!5e0!3m2!1svi!2s!4v1533196991401" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>
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