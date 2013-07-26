<?php snippet('header') ?>
<div class="hello blue">
    <h1 class="responsive"data-min="24px" data-max="100px"><a href="<?php echo url() ?>"><?php echo html($site->title()) ?></a></h1>
    <h2 class="responsive" data-min="14px" data-max="24px"><?php echo html($site->description()) ?></h2>
    </div>
 <?php foreach($pages->visible() AS $p): ?>
<div class="hello <?php echo html($p->colorclass()) ?>">
  	<a <?php echo ($p->isOpen()) ? ' class="active"' : '' ?> href="<?php echo $p->url() ?>"><h1 class="responsive"data-min="24px" data-max="100px"><?php echo html($p->title()) ?></a></h1>
  	<h2 class="responsive" data-min="14px" data-max="24px">
  		<?php echo html($p->subtext) ?></h2>

</div>
 <?php endforeach ?>
 </div>
<?php snippet('footer') ?>