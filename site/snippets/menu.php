<div class="menu">
<div class="container">
<div class="navbar inner">
<button type="button" class="btn btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
 </button>
<div class="nav-collapse collapse" style="height: 0px;">
  <ul  class="nav"style="display: inline-block;">
    <li><a class="nav" href="<?php echo url() ?>"><?php echo html($site->title()) ?></a></li>
     <?php foreach($pages->visible() AS $p): ?>
    <li><a href="<?php echo $p->url() ?>"><?php echo html($p->title()) ?></a></li>
    <?php endforeach ?>
  </ul>
</div>
</div>
</div>
</div>