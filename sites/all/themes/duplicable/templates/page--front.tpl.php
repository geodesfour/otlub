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
    <!-- Header -->
    <?php include_once DRUPAL_ROOT . '/sites/all/themes/duplicable/parts/header.php'; ?>
    <!-- Menu -->
    <?php include_once DRUPAL_ROOT . '/sites/all/themes/duplicable/parts/menu.php'; ?>
  </div> <!-- /#page-header -->
</div>

<div id="layout-main" class="layout-main pt-lg-4x pt-sm-2x pb-lg-4x pb-sm-2x">

  <div class="container mb-lg-2x">
    <div class="box-white">

        <div class="section-showcase mb-lg-4x mb-sm-3x">
            <?php
              $view_slider = 'a_la_une';
              print views_embed_view($view_slider);
            ?>
        </div>
        <div class="section-newscontent"> 
        <div class="row">
          <div class="col-lg-8 col-xs-12 mb-md-3x">
            <div class="section-news">
              <div class="section-header">
                <h2 class="section-title">L'actualité</h2>
              </div>
              <?php
                $view_news = 'derniers_article';                
                print views_embed_view($view_news, $display_id = 'block_1');
              ?>
            </div>
          </div>
          <div class="col-lg-4 col-xs-12">
            <div class="section-events">
            <div class="section-header">
              <h2 class="section-title">L'agenda</h2>
            </div>
              <?php
                $view_events = 'derniers_evenements';
                print views_embed_view($view_events, $display_id = 'block_1');
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container mb-lg-3x mb-sm-2x">  
    <div class="row">
      <div class="col-lg-12">
        <div class="section-access listicon listicon-block">

          <?php
            $blocklinks = 'block_links';
            print views_embed_view($blocklinks);
            ?>
        </div>
      </div>
    </div>
  </div> 
  
  <div class="container mb-lg-3x mb-sm-2x">
    <div class="row">

      <div class="col-lg-5 col-xs-12 mb-md-3x mb-sm-2x">
        <div class="section-kiosque">

          <div class="section-header">
            <h2 class="section-title"><a href="publications/">Le kiosque</a></h2>
          </div>
          <div id= "#js-publication-carousel">
          <?php
            $publications = 'publications';
            print views_embed_view($publications, $display_id = 'block_1');
          ?>  
          </div>                             
        </div>                                             
                                                        
      </div> 
      
      <div class="col-lg-7 col-xs-12">
        <div class="section-big-access">
            <div class="row">
              <div class="col-sm-6 col-xs-12 mb-xs-2x">
                                                        <a href="http://drupal7.dev/ma-mairie/les-documents-utiles/" class="big-access big-access-green">
                    <h3 class="big-access-title">Les documents utiles</h3>
                    <img width="360" height="315" src="http://drupal7.dev/sites/all/themes/duplicable/img/docutheque-360x315.jpg" class="img-responsive wp-post-image" alt="docutheque">                   </a>

                                </div>
              <div class="col-sm-6 col-xs-12">
                                                        <a href="http://drupal7.dev/ma-mairie/la-phototheque/" class="big-access big-access-purple">
                    <h3 class="big-access-title">La photothèque</h3>
                    <img width="360" height="315" src="http://drupal7.dev/sites/all/themes/duplicable/img/phototheque.jpg" class="img-responsive wp-post-image" alt="Un été à Mitry-Mory (48)">                   </a>
                                </div>
            </div>
          </div><!-- /.section-websites -->
        </div>
      
      </div>    
  </div>
</div>
  <!-- Footer -->
<?php include_once DRUPAL_ROOT . '/sites/all/themes/duplicable/parts/footer.php'; ?>
  
<?php /*
  <div class="row">



    <?php if (!empty($page['sidebar_first'])): ?>

      <aside class="col-sm-3" role="complementary">

        <?php print render($page['sidebar_first']); ?>

      </aside>  <!-- /#sidebar-first -->

    <?php endif; ?>



    <section<?php print $content_column_class; ?>>

      <?php if (!empty($page['highlighted'])): ?>

        <div class="highlighted jumbotron"><?php print render($page['highlighted']); ?></div>

      <?php endif; ?>

      <?php if (!empty($breadcrumb)): print $breadcrumb; endif;?>

      <a id="main-content"></a>

      <?php print render($title_prefix); ?>

      <?php if (!empty($title)): ?>

        <h1 class="page-header"><?php print $title; ?></h1>

      <?php endif; ?>

      <?php print render($title_suffix); ?>

      <?php print $messages; ?>

      <?php if (!empty($tabs)): ?>

        <?php print render($tabs); ?>

      <?php endif; ?>

      <?php if (!empty($page['help'])): ?>

        <?php print render($page['help']); ?>

      <?php endif; ?>

      <?php if (!empty($action_links)): ?>

        <ul class="action-links"><?php print render($action_links); ?></ul>

      <?php endif; ?>

      <?php print render($page['content']); ?>

    </section>



    <?php if (!empty($page['sidebar_second'])): ?>

      <aside class="col-sm-3" role="complementary">

        <?php print render($page['sidebar_second']); ?>

      </aside>  <!-- /#sidebar-second -->

    <?php endif; ?>





  </div>

 </div>

*/ ?>



