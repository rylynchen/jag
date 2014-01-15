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
              $min_attr = array('path' => $img['uri'], 'style_name' => $min_style);
              if (isset($img['alt']) && !empty($img['alt'])) {
                $min_attr['alt'] = $img['alt'];
              }
              if (isset($img['title']) && !empty($img['title'])) {
                $min_attr['title'] = $img['title'];
              }
              $show_url = image_style_url($show_style, $img['uri']);
              $min = theme('image_style', $min_attr);
              echo l($min, $show_url, array('html' => TRUE));
            ?>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </div>
</div>
