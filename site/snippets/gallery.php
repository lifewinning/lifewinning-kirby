<?php if($page->hasImages()): ?>
  <?php foreach($page->images() as $image): ?>
  <div class="span8 gallery">
    <a href="<?php echo $image->url() ?>"><img src="<?php echo $image->url() ?>"  alt="<?php echo $image->name() ?>" / ></a>
  </div>
  <?php endforeach ?>

<?php endif ?>