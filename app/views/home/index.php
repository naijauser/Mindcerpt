
<!-- Main jumbotron for a primary marketing message or call to action -->


<?php App::widget('jumbotron'); ?>

<div class="container" style="margin-top: 0px">
  <!-- Example row of columns -->
  <div class="row">
    <?php foreach($posts as $post) : ?>
      <div class="col-md-4">
        <h2><?= $post->title ?></h2>
        <p><?= substr($post->body, 0, 100) ?></p>
        <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
      </div>
      <?php //die(); ?>
    <?php endforeach; ?>
    <div class="col-md-4">
      <h2>Heading</h2>
      <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
      <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
    </div>
    <div class="col-md-4">
      <h2>Heading</h2>
      <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
      <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
    </div>
  </div>

  <hr>

</div> <!-- /container -->
