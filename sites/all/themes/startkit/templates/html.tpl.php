<?php
/**
 * @file
 * Default theme implementation to display the basic html structure of a single
 * Drupal page.
 *
 * Variables:
 * - $css: An array of CSS files for the current page.
 * - $language: (object) The language the site is being displayed in.
 *   $language->language contains its textual representation.
 *   $language->dir contains the language direction. It will either be 'ltr' or
 *   'rtl'.
 * - $rdf_namespaces: All the RDF namespace prefixes used in the HTML document.
 * - $grddl_profile: A GRDDL profile allowing agents to extract the RDF data.
 * - $head_title: A modified version of the page title, for use in the TITLE
 *   tag.
 * - $head_title_array: (array) An associative array containing the string parts
 *   that were used to generate the $head_title variable, already prepared to be
 *   output as TITLE tag. The key/value pairs may contain one or more of the
 *   following, depending on conditions:
 *   - title: The title of the current page, if any.
 *   - name: The name of the site.
 *   - slogan: The slogan of the site, if any, and if there is no title.
 * - $head: Markup for the HEAD section (including meta tags, keyword tags, and
 *   so on).
 * - $styles: Style tags necessary to import all CSS files for the page.
 * - $scripts: Script tags necessary to load the JavaScript files and settings
 *   for the page.
 * - $page_top: Initial markup from any modules that have altered the
 *   page. This variable should always be output first, before all other dynamic
 *   content.
 * - $page: The rendered page content.
 * - $page_bottom: Final closing markup from any modules that have altered the
 *   page. This variable should always be output last, after all other dynamic
 *   content.
 * - $classes String of classes that can be used to style contextually through
 *   CSS.
 *
 * @see bootstrap_preprocess_html()
 * @see template_preprocess()
 * @see template_preprocess_html()
 * @see template_process()
 *
 * @ingroup themeable
 */
?>

<!DOCTYPE html>
<html class="no-js" prefix="og: http://ogp.me/ns#" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php /* print $rdf_namespaces; */ ?>>
<head profile="<?php print $grddl_profile; ?>">
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script>document.cookie = 'resolution=' + Math.max(screen.width, screen.height) + ("devicePixelRatio" in window ? "," + devicePixelRatio : ",1") + '; path=/';</script>
  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  
  <script>window.Trads = {"cart_add_to_cart":"Ajout\u00e9 au panier","la_login_info":"Information(s) de connexion\/inscription","menu_close":"Fermer","publi_mobile_account":"Mon compte","publi_mobile_catalogue":"Catalogue","publi_mobile_form":"Rechercher une publication","publi_mobile_publish":"Publier \u00e0 l'ined","publi_mobile_select":"S\u00e9lectionnez un onglet \u00e0 afficher"};function t(s){return window.Trads[s]?window.Trads[s]:s;}</script>
  <?php print $styles; ?>
  <!-- HTML5 element support for IE6-8 -->
  <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <?php print $scripts; ?>

</head>

<body class="no-ms <?php if(drupal_is_front_page()): ?> home  <?php endif; ?> <?php print $classes; ?>" <?php print $attributes;?>>

  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
  <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
  <script src="/sites/all/themes/startkit/js/menu-vertical.js"></script>
<div class="fm-overlay"></div>
</body>
</html>
