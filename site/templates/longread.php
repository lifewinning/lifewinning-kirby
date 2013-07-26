<?php snippet('header') ?>
<?php snippet('menu') ?>
<div class="hello <?php echo html($page->colorclass()) ?>">
     <h1 class="responsive"data-min="24px" data-max="100px"><?php echo html($page->title()) ?></h1>
     <h2><?php echo $page->when() ?></h2>
</div>
<div class="container-fluid">
<div class="row">
<div class="wrap">
	<div class="longread">
    <?php echo kirbytext($page->text()) ?>
    </div>
</div>
</div>
</div>

<?php snippet('footer') ?>