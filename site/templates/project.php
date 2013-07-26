
<?php snippet('header') ?>
<?php snippet ('menu') ?>

<div class="container-fluid">
	<div class="span3 project">
	<h1><?php echo html($page->title()) ?></h1>
	<h2><?php echo $page->when() ?></h2>
	    <?php echo kirbytext($page->text()) ?>
	</div>
	<?php snippet('gallery') ?>
</div>

<?php snippet ('footer') ?>