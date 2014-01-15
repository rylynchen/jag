<div id="container">
  <div id="gallery" class="ad-gallery">
    <div class="ad-image-wrapper">
    </div>
    <div class="ad-controls">
    </div>
    <div class="ad-nav">
      <div class="ad-thumbs">
        <ul class="ad-thumb-list">
          <?php foreach($imgs as $img) : ?>
            <li>
            <?php
              $min = '<img title="'.$img['title'].'" alt="'.$img['alt'].'" src="'.$img['min_url'].'" />';
              echo l($min, $img['show_url'], array('html' => TRUE));
            ?>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </div>
</div>