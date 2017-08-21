  
</main>
<!-- end main -->

<!-- Jquery -->
<?php echo js('assets/js/jquery-3.2.1.min.js') ?>

<!-- Required -->
<?php echo js('assets/js/webslides.js') ?>
<?php echo js('assets/js/jquery.treeView.js') ?>

<?php if ($page->template() == 'slideshow') : ?>
	<script>
	 	window.ws = new WebSlides(); 
	</script>
<?php endif ?>

<script>

  	/* Open when someone clicks on the span element */
	function openNav() {
	    document.getElementById("myNav").style.width = "100%";
	}

	/* Close when someone clicks on the "x" symbol inside the overlay */
	function closeNav() {
	    document.getElementById("myNav").style.width = "0%";
	}

    $('.treeview').treeView();


</script>

<!-- OPTIONAL - svg-icons.js (fontastic.me - Font Awesome as svg icons) -->
<script defer src="assets/js/svg-icons.js"></script>

</body>
</html>