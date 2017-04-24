<!-- The overlay -->
<div id="myNav" class="overlay">

  <!-- Button to close the overlay navigation -->
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

 
  <!-- Overlay content -->
  <div class="overlay-content">
  	<a href="<?php echo $site->url() ?>">
  		<?php echo $site->title() ?>
  	</a>
  	<?php foreach($pages->visible() as $p): ?>
  		<a href="<?php echo $p->url() ?>"><?php echo $p->title() ?></a>
	<?php endforeach ?>
	<ul class="socials">
      <?php if ($site->twitt() != '') : ?>
        <li class="twitter">
          <a rel="external" href="https://twitter.com/<?php echo $site->twitt() ?>" title="Twitter">
            <svg class="fa-twitter">
              <use xlink:href="#fa-twitter"></use>
            </svg>
          </a>
        </li>
      <?php endif ?>
      <?php if ($site->fb() != '') : ?>
        <li class="facebook">
          <a rel="external" href="<?php echo $site->fb() ?>" title="Facebook">
            <svg class="fa-facebook">
              <use xlink:href="#fa-facebook"></use>
            </svg>
          </a>
        </li>
      <?php endif ?>
      <?php if ($site->lin() != '') : ?>
        <li class="linkedin">
          <a rel="external" href="<?php echo $site->lin() ?>" title="LinkedIn">
            <svg class="fa-linkedin">
              <use xlink:href="#fa-linkedin"></use>
            </svg>
          </a>
        </li>
      <?php endif ?>
      <?php if ($site->courriel() != '') : ?>
        <li class="mail">
          <a rel="external" href="mailto:<?php echo $site->courriel() ?>" title="email">
            <svg class="fa-envelope">
              <use xlink:href="#fa-envelope"></use>
            </svg>
          </a>
        </li>
      <?php endif ?>
    </ul>
  </div>

</div>

<!-- Use any element to open/show the overlay navigation menu -->
<span onclick="openNav()" type="button" class="burger">
	&#9776;
</span>
