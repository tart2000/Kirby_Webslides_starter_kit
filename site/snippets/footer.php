  
</main>
<!-- end main -->

<!-- Jquery -->
<?= js('assets/js/jquery-3.2.1.min.js') ?>

<!-- Required -->
<?= js('assets/js/webslides.js') ?>

<!--  My own JS -->
<!--
<?= js('assets/js/main.js') ?> 
-->


<?php if ($page->template() == 'slideshow' || $page->template() == 'comp-slide') : ?>
	<script>
	 	window.ws = new WebSlides(); 
	</script>
<?php endif ?>

<!-- OPTIONAL - svg-icons.js (fontastic.me - Font Awesome as svg icons) -->
<?= js('assets/js/svg-icons.js') ?>

</body>
</html>