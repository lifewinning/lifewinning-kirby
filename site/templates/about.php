<?php snippet('header') ?>
<?php snippet('menu') ?>
<div class="hello <?php echo html($page->colorclass()) ?>">
     <h1 class="responsive"data-min="24px" data-max="100px"><?php echo html($page->title()) ?></h1>
</div>
<div class="container-fluid">
<div class="span3 project">
    <?php echo kirbytext($page->text()) ?>
</div>
<?php snippet('gallery') ?>
</div>

<?php snippet('footer') ?>