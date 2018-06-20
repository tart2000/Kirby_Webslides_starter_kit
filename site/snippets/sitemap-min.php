<?php foreach ($thepages as $p) : ?>
	<li>
		<a href="<?= $p->url() ?>">
			<?= $p->title() ?>
		</a>
	</li>
	<?php if ($p->hasChildren()) : ?>
	<ul>
		<?php foreach ($p->children() as $pp) : ?>
			<li>
				<a href="<?= $pp->url() ?>">
					<?= $pp->title() ?>	
				</a>					
			</li>
			<?php if ($pp->hasChildren()) : ?>
			<ul>
				<?php foreach ($pp->children() as $ppp) : ?>
					<li>
						<a href="<?= $ppp->url() ?>">
							<?= $ppp->title() ?>	
						</a>					
					</li>
				<?php endforeach ?>
			</ul>
			<?php endif ?>
		<?php endforeach ?>
	</ul>
	<?php endif ?>
<?php endforeach ?>