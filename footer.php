<?php dynamic_sidebar('sidebar-footer-content'); ?>

		<script>
		$(document).ready(function(){
			$(".nav-button").click(function () {
			$(".nav-button,.primary-nav").toggleClass("open");
			});    
		});
		</script>

<?php wp_footer(); ?>
</body>
</html>
