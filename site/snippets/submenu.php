<?php 

// find the open/active page on the first level
$open  = $pages->findOpen();
$items = ($open) ? $open->children()->visible() : false; 

?>
<div class="container-fluid">
<div class="row-fluid">
<div class="submenu">
  <div class="loading"><h3>Hey, just one second, I promise this is gonna be awesome. Maybe poke me if you're getting impatient.</h3></div>
<?php if($items && $items->count()): ?>
    <?php foreach($items AS $item): ?>
      <div class="span3" style="display:none;">
         <a href="<?php echo $item->url() ?>">
         <?php if($item->hasImages()): ?>
        <img src="<?php echo $item->images()->first()->thumb()->url() ?>" alt="" />
        <?php endif ?>
      <h2 class="responsive" data-min="18px" data-max="20px" style="line-height: 18px;"><?php echo html($item->title()) ?></h2></a>
      </a>
      </div>
    <?php endforeach ?>            
</div>
</div>
</div>
<?php endif ?>

<script type="text/javascript">
 $(document).ready(function(){
    $('.submenu').imagesLoaded(function(){
    $('.loading').fadeOut(1000);
    $(window).mousemove(function(){
    var $container = $('.submenu');
    var $itemSelector = $('.span3');
    $itemSelector.css( "display", "inline" );
    $container.isotope({
        itemSelector : '.span3',
        masonry: { columnWidth: $container.width() / $itemSelector.width()},
        animationOptions: {
            duration: 300,
            easing: 'linear',
            queue: false
        }
    });
    });
    });
});
</script>