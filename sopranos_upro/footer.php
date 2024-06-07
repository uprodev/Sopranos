</main>

<footer>
  <div class="container">
    <div class="row">

      <?php if ($field = get_field('cta_f', 'option')): ?>
        <div class="footer-top d-flex justify-content-between col-lg-7">

          <?php if ($field['image_left']): ?>
            <figure>
              <?= wp_get_attachment_image($field['ID'], 'full') ?>
            </figure>
          <?php endif ?>
          
          <div class="text">

            <?php if ($field['image_top']): ?>
              <div class="logo">

                <?php if (pathinfo($field['image_top']['url'])['extension'] == 'svg'): ?>
                  <img src="<?= $field['image_top']['url'] ?>" alt="<?= $field['image_top']['alt'] ?>">
                <?php else: ?>
                  <?= wp_get_attachment_image($field['image_top']['ID'], 'full') ?>
                <?php endif ?>

              </div>
            <?php endif ?>

            <?= $field['content'] ?>

            <?php if ($field['button']): ?>
              <div class="btn-wrap">
                <a href="<?= $field['button']['url'] ?>" class="btn-arrow"<?php if($field['button']['target']) echo ' target="_blank"' ?>><?= $field['button']['title'] ?><i class="far fa-long-arrow-right"></i></a>
              </div>
            <?php endif ?>

          </div>
        </div>
      <?php endif ?>

      <div class="content d-flex flex-wrap justify-content-between">

        <?php if ($field = get_field('left_column_f', 'option')): ?>
          <div class="left col-lg-4 col-md-6 col-12">

            <?php if ($field['logo']): ?>
              <div class="logo-wrap">
                <a href="<?= get_home_url() ?>">

                  <?php if (pathinfo($field['logo']['url'])['extension'] == 'svg'): ?>
                    <img src="<?= $field['logo']['url'] ?>" alt="<?= $field['logo']['alt'] ?>">
                  <?php else: ?>
                    <?= wp_get_attachment_image($field['logo']['ID'], 'full') ?>
                  <?php endif ?>

                </a>
              </div>
            <?php endif ?>

            <?= $field['content'] ?>

            <?php if ($field['link']): ?>
              <p>
                <a href="<?= $field['link']['url'] ?>"<?php if($field['link']['target']) echo ' target="_blank"' ?>><?= $field['link']['title'] ?></a>
              </p>
            <?php endif ?>

            <?php if ($field['contact_links']): ?>
              <ul>

                <?php foreach ($field['contact_links'] as $item): ?>
                  <?php if ($item['link']): ?>
                    <li>
                      <a href="<?= $item['link']['url'] ?>"<?php if($item['link']['target']) echo ' target="_blank"' ?>>

                        <?php if ($item['icon']): ?>
                          <i class="<?= $item['icon'] ?>"></i>
                        <?php endif ?>

                        <?= $item['link']['title'] ?>
                      </a>
                    </li>
                  <?php endif ?>
                <?php endforeach ?>

              </ul>
            <?php endif ?>

          </div>
        <?php endif ?>

        <?php if ($field = get_field('right_column', 'option')): ?>
          <div class="right col-lg-7 col-md-6 col-12 d-flex flex-wrap justify-content-between">

            <?php if ($field['socials']): ?>
              <div class="item item-1">

                <?php if ($field['socials']['column_title']): ?>
                  <h5><?= $field['socials']['column_title'] ?> <span></span></h5>
                <?php endif ?>

                <?php if ($field['socials']['links']): ?>
                  <ul>

                    <?php foreach ($field['socials']['links'] as $item): ?>

                      <?php if ($item['link']): ?>
                        <li>
                          <a href="<?= $item['link']['url'] ?>"<?php if($item['link']['target']) echo ' target="_blank"' ?>>

                            <?php if ($item['icon']): ?>
                              <i class="<?= $item['icon'] ?>"></i>
                            <?php endif ?>

                            <?= $item['link']['title'] ?>
                          </a>
                        </li>
                      <?php endif ?>

                    <?php endforeach ?>

                  </ul>
                <?php endif ?>

              </div>
            <?php endif ?>

            <?php if ($field['navigation']): ?>
              <div class="item item-2">

                <?php if ($field['navigation']['column_title']): ?>
                  <h5><?= $field['navigation']['column_title'] ?> <span></span></h5>
                <?php endif ?>

                <?php if ($field['navigation']['links']): ?>
                  <ul>

                    <?php foreach ($field['navigation']['links'] as $item): ?>

                      <?php if ($item['link']): ?>
                        <li>
                          <a href="<?= $item['link']['url'] ?>"<?php if($item['link']['target']) echo ' target="_blank"' ?>>
                            <?= $item['link']['title'] ?>
                          </a>
                        </li>
                      <?php endif ?>

                    <?php endforeach ?>

                  </ul>
                <?php endif ?>

              </div>
            <?php endif ?>

            <?php if ($field['opening_times']): ?>
              <div class="item item-3">

                <?php if ($field['opening_times']['column_title']): ?>
                  <h5><?= $field['opening_times']['column_title'] ?> <span></span></h5>
                <?php endif ?>

                <?php if ($field['opening_times']['items']): ?>
                  <ul>

                    <?php foreach ($field['opening_times']['items'] as $index => $item): ?>

                      <?php if ($item['day'] || $item['time']): ?>
                        <li<?php if(date('w') - 1 == $index || (date('w') == 0 && $index == 6)) echo ' class="current"' ?>>

                          <?php if ($item['day']): ?>
                            <p><?= $item['day'] ?></p>
                          <?php endif ?>

                          <?php if ($item['time']): ?>
                            <p><?= $item['time'] ?></p>
                          <?php endif ?>

                        </li>
                      <?php endif ?>

                    <?php endforeach ?>

                  </ul>
                <?php endif ?>

              </div>
            <?php endif ?>

          </div>
        <?php endif ?>

      </div>
    </div>
  </div>

  <?php if ($field = get_field('footer_bottom_f', 'option')): ?>
    <div class="bottom">
      <div class="container">
        <div class="row align-items-center">

          <?php if ($field['left_column_text']): ?>
            <div class="left-bottom col-lg-4 col-12"><?= $field['left_column_text'] ?></div>
          <?php endif ?>

          <?php if ($field['right_column_links']): ?>
            <div class="right-bottom col-lg-8 col-12">
              <ul class="d-flex justify-content-lg-end justify-content-center flex-wrap">

                <?php foreach ($field['right_column_links'] as $item): ?>
                  <?php if ($item['link']): ?>
                    <li>
                      <a href="<?= $item['link']['url'] ?>"<?php if($item['link']['target']) echo ' target="_blank"' ?>><?= $item['link']['title'] ?></a>
                    </li>
                  <?php endif ?>
                <?php endforeach ?>

              </ul>
            </div>
          <?php endif ?>

        </div>
      </div>
    </div>
  <?php endif ?>

</footer>

<?php if ($field = get_field('fixed_block_f', 'option')): ?>
  <?php if ($field['link']): ?>
    <div class="fix-block">
      <a href="<?= $field['link']['url'] ?>" class="btn-reserve"<?php if($field['link']['target']) echo ' target="_blank"' ?>>

        <?php if ($field['icon']): ?>
          <span class="img">
            <?php if (pathinfo($field['icon']['url'])['extension'] == 'svg'): ?>
              <img src="<?= $field['icon']['url'] ?>" alt="<?= $field['icon']['alt'] ?>">
            <?php else: ?>
              <?= wp_get_attachment_image($field['icon']['ID'], 'full') ?>
            <?php endif ?>
          </span>
        <?php endif ?>
        
        <span><?= $field['link']['title'] ?></span>
      </a>
    </div>
  <?php endif ?>
<?php endif ?>

<div id="popup" class="popup-default" style="display: none;">
  <div class="content">
    <h3 id="popup_title"></h3>
    <p id="popup_text"></p>
    <div class="from-wrap">
      <?= do_shortcode('[contact-form-7 id="95b3e4f" html_class="default-form"]') ?>
    </div>
  </div>
</div>

<?php wp_footer(); ?>
</body>
</html>