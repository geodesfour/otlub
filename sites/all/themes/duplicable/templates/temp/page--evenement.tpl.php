<?php

/**

 * @file

 * Default theme implementation to display a single Drupal page.

 *

 * The doctype, html, head and body tags are not in this template. Instead they

 * can be found in the html.tpl.php template in this directory.

 *

 * Available variables:

 *

 * General utility variables:

 * - $base_path: The base URL path of the Drupal installation. At the very

 *   least, this will always default to /.

 * - $directory: The directory the template is located in, e.g. modules/system

 *   or themes/bartik.

 * - $is_front: TRUE if the current page is the front page.

 * - $logged_in: TRUE if the user is registered and signed in.

 * - $is_admin: TRUE if the user has permission to access administration pages.

 *

 * Site identity:

 * - $front_page: The URL of the front page. Use this instead of $base_path,

 *   when linking to the front page. This includes the language domain or

 *   prefix.

 * - $logo: The path to the logo image, as defined in theme configuration.

 * - $site_name: The name of the site, empty when display has been disabled

 *   in theme settings.

 * - $site_slogan: The slogan of the site, empty when display has been disabled

 *   in theme settings.

 *

 * Navigation:

 * - $main_menu (array): An array containing the Main menu links for the

 *   site, if they have been configured.

 * - $secondary_menu (array): An array containing the Secondary menu links for

 *   the site, if they have been configured.

 * - $breadcrumb: The breadcrumb trail for the current page.

 *

 * Page content (in order of occurrence in the default page.tpl.php):

 * - $title_prefix (array): An array containing additional output populated by

 *   modules, intended to be displayed in front of the main title tag that

 *   appears in the template.

 * - $title: The page title, for use in the actual HTML content.

 * - $title_suffix (array): An array containing additional output populated by

 *   modules, intended to be displayed after the main title tag that appears in

 *   the template.

 * - $messages: HTML for status and error messages. Should be displayed

 *   prominently.

 * - $tabs (array): Tabs linking to any sub-pages beneath the current page

 *   (e.g., the view and edit tabs when displaying a node).

 * - $action_links (array): Actions local to the page, such as 'Add menu' on the

 *   menu administration interface.

 * - $feed_icons: A string of all feed icons for the current page.

 * - $node: The node object, if there is an automatically-loaded node

 *   associated with the page, and the node ID is the second argument

 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not

 *   comment/reply/12345).

 *

 * Regions:

 * - $page['help']: Dynamic help text, mostly for admin pages.

 * - $page['highlighted']: Items for the highlighted content region.

 * - $page['content']: The main content of the current page.

 * - $page['sidebar_first']: Items for the first sidebar.

 * - $page['sidebar_second']: Items for the second sidebar.

 * - $page['header']: Items for the header region.

 * - $page['footer']: Items for the footer region.

 *

 * @see bootstrap_preprocess_page()

 * @see template_preprocess()

 * @see template_preprocess_page()

 * @see bootstrap_process_page()

 * @see template_process()

 * @see html.tpl.php

 *

 * @ingroup themeable

 */

?>

<div class="layout-header">
  <div role="banner" id="page-header">
    <div class="container">
        
      <div class="row">
        <div class="col-lg-2 col-sm-3 col-xs-12 text-xs-center">
          <div class="logo">
            <?php if (!empty($logo)): ?>
              <a href="<?=url('<front>'); ?>"><img class="logo-normal img-responsive animated fadeIn" src="<?php print $logo; ?>" width="130" alt="Mitry Mory"></a>
            <?php endif; ?>
          </div>
        </div>

        <div class="col-lg-10 col-sm-9 col-xs-12">

          
            <div class="section-headinfo clearfix text-xs-center">
              <ul class="list-inline hidden-xs pull-xs-none pull-right">
          <li><i class="fa fa-phone fa-fw"></i> 01 60 21 61 10</li>
  
                      <li><a href="http://geoffrey-desfour.com/drupal7/nous-contacter/"><i class="fa fa-envelope fa-fw"></i> Nous contacter</a></li>
      
                      <li><a href="http://geoffrey-desfour.com/drupal7/accessibilite-numerique/">Accessibilité</a></li>
          </ul>             </div><!-- /.section-headinfo -->

          
          <div class="section-headtools text-xs-center">
            <ul class="section-headtools-networks">
                                                        <li><a href="http://geoffrey-desfour.com/drupal7/nous-contacter/" target="_blank" class="mail visible-xs visible-sm"><i class="fa fa-envelope-o fa-lg"></i></a></li>
                                      <li><a href="http://facebook.fr/villedemitrymory" target="_blank" class="facebook"><i class="fa fa-facebook fa-lg"></i></a></li>
                  <li><a href="https://youtube.com/channel/UCWpkinUzBIP3jIwinVuQvdQ" target="_blank" class="youtube"><i class="fa fa-youtube fa-lg"></i></a></li>
                  <li><a href="/actualite/feed/" target="_blank" class="rss"><i class="fa fa-rss fa-lg"></i></a></li>
            </ul>
            
            <div class="search-engine">
              <?php       
                $block = module_invoke('search', 'block_view', 'form');
                print render($block['content']);
              ?>
            </div>
            <div class="citoyen-account hidden-xs">
              <a href="/mon-compte-citoyen">
              <img src="http://geoffrey-desfour.com/drupal7/sites/all/themes/duplicable/img/espace-citoyen.png" width="206" height="76" alt="">
              </a>
            </div>
          </div>

        </div>

      </div>
    </div>
    <div class="layout-navigation">
      <div class="container">
        <?php if (!empty($site_slogan)): ?>
          <p class="lead"><?php print $site_slogan; ?></p>
        <?php endif; ?>
        <?php print render($page['header']); ?>
      </div>
    </div>
  </div> <!-- /#page-header -->
</div>
<div class="layout-main">
  <div class="section-breadcrumb mb-lg-3x hidden-sm hidden-xs">
    <div class="container">
      <div class="breadcrumbs">
        <?php if (!empty($breadcrumb)): print $breadcrumb; endif;?>
      </div>
    </div>
  </div>
  <div class="main-container container">

    <div class="row">

      <?php if (!empty($page['sidebar_first'])): ?>

      <aside class="col-lg-4 col-xs-12" role="complementary">

      <?php print render($page['sidebar_first']); ?>

      </aside>  <!-- /#sidebar-first -->

      <?php endif; ?>

      <div class="col-lg-12 col-xs-12 mb-md-2x">
        <div class="layout-content">
          <div class="article">

            <?php if (!empty($page['highlighted'])): ?>

            <div class="highlighted jumbotron"><?php print render($page['highlighted']); ?></div>

            <?php endif; ?>

            <a id="main-content"></a>

            <?php print render($title_prefix); ?>

            <?php if (!empty($title)): ?>

            <div class="article-header">
              <h1 class="article-title"><?php print $title; ?></h1>
            </div>

            <?php endif; ?>

            <?php print render($page['content']); ?>

          </div>
        </div>  
      </div>
      <?php if (!empty($page['sidebar_second'])): ?>

      <aside class="col-lg-4 col-xs-12" role="complementary">

        <?php print render($page['sidebar_second']); ?>

      </aside>  <!-- /#sidebar-second -->

      <?php endif; ?>
     </div>
  </div>
</div>
<div class="layout-footer">

      <div class="section-contactus">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-xs-12 mb-md-3x mb-sm-2x">
              <div class="section-header">
                <h2 class="section-title">Restons en contact</h2>
              </div>
              <div class="row">
                <div class="col-md-6 col-xs-12 mb-sm-2x">
                  <div class="section-contactus-newsletter">
                    <p>Inscrivez-vous à la lettre d'information pour être informé(e) en temps réel</p>
                                                                              <a href="http://geoffrey-desfour.com/drupal7/newsletter/" class="btn btn-red">S'abonner à l'e-volution</a>
                                            </div>
                </div>
                <div class="col-md-6 col-xs-12">
                  <div class="section-contactus-contact">
                    <p>Vous avez une question&nbsp;? Besoin d'un renseignement&nbsp;? N'hésitez pas à nous contacter</p>
                                                                              <a href="http://geoffrey-desfour.com/drupal7/nous-contacter/" class="btn btn-red">Nous contacter</a>
                                            </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-xs-12">
              <div class="section-contactus-networks">
                <div class="row">
                  <div class="col-lg-12 col-sm-6 col-xs-12">
                    <a href="https://facebook.com/villedemitrymory" id="section-contactus-networks-facebook" target="_blank" class="section-contactus-networks-facebook">
                      <!-- <i class="fa fa-facebook"></i> -->
                      <!-- <p>Retrouvez-nous sur <strong>Facebook</strong></p> -->
                      <img src="http://geoffrey-desfour.com/drupal7/sites/all/themes/duplicable/img/share-facebook.png" width="322" height="70" class="img-responsive" alt="Retrouvez-nous sur Facebook">
                    </a>
                  </div>

                  <div class="col-lg-12 col-sm-6 col-xs-12">
                    <a href="https://youtube.com/channel/UCWpkinUzBIP3jIwinVuQvdQ" id="section-contactus-networks-youtube" target="_blank" class="section-contactus-networks-youtube">
                      <!-- <i class="fa fa-youtube-play"></i> -->
                      <!-- <p>Suivez-nous sur <strong>Youtube</strong></p> -->
                      <img src="http://geoffrey-desfour.com/drupal7/sites/all/themes/duplicable/img/share-youtube.png" width="322" height="70" class="img-responsive" alt="Suivez-nous sur Youtube">
                    </a>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </div>

      <div class="section-contactinfo">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-xs-12 mb-md-4x mb-sm-2x">
              <div class="row">
                <div class="col-md-4 col-sm-3 mb-xs-2x">
                  <div class="section-contactinfo-logo">
                    <img src="http://geoffrey-desfour.com/drupal7/sites/all/themes/duplicable/img/logo-footer.png" class="img-responsive" width="195" height="205" alt="">
                  </div>
                </div>
                <div class="col-md-4 col-sm-5 col-xs-12 mb-xs-2x">
                  <div class="section-contactinfo-contact">
                    <h4 class="title">Pour nous contacter</h4>
                    <p>
                      <strong>Hôtel de Ville</strong><br>
                      11/13, rue Paul Vaillant-Couturier<br>
                      77297 MITRY-MORY Cedex
                    </p>

                    <p>
                      Tél&nbsp;: 01 60 21 61 10<br>
                      Fax&nbsp;: 01 60 21 61 48
                    </p>
                  </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                  <div class="section-contactinfo-schedule">

                    <h4 class="title">Horaires d'ouverture</h4>
                    <p>Du lundi au jeudi de 8h30 à 12h et de 13h30 à 17h15</p>

                    <p>Le vendredi de 8h30 à 12h et de 13h30 à 17h</p>

                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-lg-offset-0 col-md-6 col-md-offset-3 col-xs-12">

              
                            <div class="section-contactinfo-partenaires">
                <div class="section-header">
                  <h3 class="section-title">Partenaires</h3>
                </div>
                <?php
                  $partenaires = 'partenaires';
                  print views_embed_view($partenaires, $display_id = 'block');;
                ?>


            </div>
          </div>
        </div>
      </div>
</div>
     

 <div class="section-contentinfo" role="contentinfo">      
    <div class="container">          
      <div class="row">
        <div class="col-md-8 col-xs-12 text-sm-center links">             

          <?php print render($page['footer']); ?>

        </div>
      </div>
    </div>
  </div>
  
</div>