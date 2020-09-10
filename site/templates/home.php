<?php snippet('header') ?>
<?php snippet('menu') ?>

	<main class='row'>
		<section class="introduction col-xs-12 col-md-4">
			<?= $page->text()->kt()?>
		</section>
		<section class="news col-xs-12 col-md-8 row">
			<?php snippet('projects-list')?>
		</section>
	</main>


<?php snippet('footer') ?>
