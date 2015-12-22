<div class="container">
        
  <div class="row">
    <div class="col-lg-2 col-sm-3 col-xs-12 text-xs-center">
      <div class="logo">        
        <?php if (!empty($logo)): ?>
          <?php if(drupal_is_front_page()): ?>
            <h1>
          <?php else: ?>
            <a href="<?=url('<front>'); ?>">
          <?php endif; ?>
            <img class="logo-normal img-responsive animated fadeIn" src="<?php print $logo; ?>" width="130" alt="Mitry Mory">
          <?php if(drupal_is_front_page()): ?>
            </h1>
          <?php else: ?>
            </a>
          <?php endif; ?>
        <?php endif; ?>
      </div>
    </div>

    <div class="col-lg-10 col-sm-9 col-xs-12">

      <?php
        $block = module_invoke('block', 'block_view', '7');
        print render($block['content']);
      ?>
      
      <div class="section-headtools text-xs-center">
         <?php
          /*$block = module_invoke('block', 'block_view', '5');
          print render($block['content']);*/
        ?>

        <ul class="section-headtools-networks">
                                                          <li><a href="/drupal7/nous-contacter/" target="_blank" class="mail visible-xs visible-sm"><i class="fa fa-envelope-o fa-lg"></i></a></li>
                                        <li><a href="http://www.facebook.fr/" target="_blank" class="facebook"><i class="fa fa-facebook fa-lg"></i></a></li>
                    <li><a href="https://www.youtube.com" target="_blank" class="youtube"><i class="fa fa-youtube fa-lg"></i></a></li>
                    <li><a href="" target="_blank" class="rss"><i class="fa fa-rss fa-lg"></i></a></li>
              </ul>
          
        <div class="search-engine">
          <?php       
            $block = module_invoke('search', 'block_view', 'form');
            print render($block['content']);
          ?>
        </div>
        <div class="citoyen-account hidden-xs">
          <a href="/drupal7/mon-compte-citoyen">
          <img src="http://drupal7.dev/sites/all/themes/duplicable/img/espace-citoyen.png" width="206" height="76" alt="">
          </a>
        </div>
        <?php print render($page['header']); ?>
      </div>

    </div>

  </div>
</div>