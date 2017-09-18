


                <footer role="contentinfo">
                    <div class="container">

                        <div class="row">

                            <div class="col-sm-4">
                                <h4>Suivez-nous</h4>
                                <p>Se hic fidelissimae e se eram nulla elit aliquip.</p>
                                <ul class="social_nav">
                                    <li ><a class="icon_facebook" href="#">Facebook</a></li>
                                    <li><a class="icon_pinterest" href="#">Pinterest</a></li>
                                    <li><a class="icon_instagram" href="#">Instagram</a></li>
                                </ul>

                            </div>
                            <div class="col-sm-4">
                                <h4>Newsletter</h4>
                                <p>Legam hic appellat ita quem mandaremus pariatur.</p>
                                <form action="#">
                                    <input name="s" type="text" placeholder="enter your email">
                                    <button >Envoyer</button>
                                </form>
                            </div>
                            <div class="col-sm-4">
                                <h4>Contact</h4>
                                <p>123 Rue des Cloches <br>1205 Genève <br>Tel: 12345 123465 <br /> Email: <a href="mailto:contact@nowgeneva.com">contact@nowgeneva.com</a> </p>
                            </div>
                        </div>



                    </div>
                    <div class="copyright">
                        <p class="container"> &copy; <?php echo date('Y'); ?> Now Geneva | Website by <a href="https://webfactor.ch" target="_blank">WebFactor</a></p>
                    </div>

                </footer>


		<?php wp_footer(); ?>
		<?php $tdu = get_template_directory_uri(); ?>
		<script type="text/javascript" src="<?php echo $tdu; ?>/js/min/scripts.bundle.js?v=<?php echo wf_version(); ?>"></script>
		<script>
		// (function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		// (f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		// l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		// })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		// ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		// ga('send', 'pageview');
		</script>

	</body>
</html>
