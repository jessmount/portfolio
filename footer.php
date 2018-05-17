		</div>
		<!-- /wrapper -->
			<!-- footer -->
			<footer class="footer" role="contentinfo">

				<div class="footer__contact">

					<div class="footer__social">
						<svg class="footer__social-icon">
							<use xlink:href="<?php echo get_template_directory_uri(); ?>/img/sprite.svg#icon-facebook"></use>
						</svg>
						<svg class="footer__social-icon">
							<use xlink:href="<?php echo get_template_directory_uri(); ?>/img/sprite.svg#icon-linkedin"></use>
						</svg>
						<svg class="footer__social-icon">
							<use xlink:href="<?php echo get_template_directory_uri(); ?>/img/sprite.svg#icon-codepen"></use>
						</svg>
					</div>
					<button class="footer__btn">View Work</button>
					<button class="footer__btn">Contact</button>
				</div>

				<!-- copyright -->
				<p class="footer__copyright">
					&copy; <?php echo date('Y'); ?> Copyright Jessica Lynn Mount. All rights reserved.
				</p>
				<!-- /copyright -->

			</footer>
			<!-- /footer -->

		

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>
