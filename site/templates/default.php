<?php snippet('header') ?>
<?php snippet('menu') ?>
<div class="hello <?php echo html($page->colorclass()) ?>">
     <h1 class="responsive"data-min="24px" data-max="100px"><?php echo html($page->title()) ?></h1>
    <h2><?php echo kirbytext($page->text()) ?></h2>
</div>

<?php snippet('submenu') ?> 
</div>
<?php snippet('footer') ?>