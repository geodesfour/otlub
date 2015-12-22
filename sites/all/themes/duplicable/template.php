<?php
function duplicable_preprocess_page(&$vars, $hook) {
  if (isset($vars['node']->type)) {
    $vars['theme_hook_suggestions'][] = 'page__' . $vars['node']->type;
  }
}

$conf['admin_menu_cache_client'] = FALSE;

function duplicable_bootstrap_search_form_wrapper($variables) {
  $output = '<div class="input-group">';
  $output .= $variables['element']['#children'];
  $output .= '<span class="input-group-btn">';
  $output .= '<button class="btn btn-alert" type="submit"><i class="visible-sm visible-xs fa fa-search"></i><span class="visible-lg visible-md">Rechercher</span></button>';
  $output .= '</span>';
  $output .= '</div>';
  return $output;
}
/**
 * Implements hook_wysiwyg_editor_settings_alter().
 */
function ckeditor_settings_alter(&$settings, $context) {
  if ($context['profile']->editor == 'ckeditor') {
    $settings['allowedContent'] = TRUE;
  }
}
/*
if ($form_id == 'views_exposed_form') {
$form['field_district']['#type'] = 'checkbox';
}
*/
/**
 * Implementation of hook_nodeapi().
 */
/*function duplicable_nodeapi(&$node, $op, $a3 = NULL, $a4 = NULL) {
  if ($node->type == "fiche_aliment" && $a4 == TRUE) {
    switch ($op) {
      case 'view' :
        $breadcrumb = sandbox_custom_breadcrumb();
        if($breadcrumb){
          drupal_set_breadcrumb($breadcrumb);
        }
        break;
    }
  }
}*/

/*function duplicable_custom_breadcrumb(){
  $ret = array(
    l(t('Home'), NULL),
    l(t('Example'), 'example'),
    l($node->field1, 'example/' . $node->field1),
  );
  return $ret;
}*/

/**
 * Implements hook_page_delivery_callback_alter().
 */
/*function duplicable_page_delivery_callback_alter(&$callback) {
  $current_path = current_path();
  // Only work on normal pages, not ajax nor admin pages.
  if ($callback != 'drupal_deliver_html_page' || path_is_admin($current_path)) {
    return;
  }
  $parent_path = NULL;
  // Set the nearest parent given certain conditions.
  $item = menu_get_item();
  if ($item['path'] == 'node/%') {
    $node = $item['map'][1];
    if ($node->type == 'evenement') {
      $parent_path = 'evenements';
    }
    elseif ($node->type == 'dossier') {
      $parent_path = 'dossiers';
    }
    elseif ($node->type == 'produit') {
      $parent_path = 'produits';
    }
  }
  elseif ($item['path'] == 'taxonomy/term/%') {
    $term = $item['map'][2];
    if ($term->vocabulary_machine_name == 'lexique') {
      $parent_path = 'lexique';
    }
  }
  // If parent found, set it for menu tree trail future build.
  if ($parent_path) {
    menu_tree_set_path('menu-principal', $parent_path);
    menu_link_get_preferred($parent_path);
    // Fool drupal so that it take the correct link to build the breadcrumb.
    $preferred_links = &drupal_static('menu_link_get_preferred');
    $preferred_links[$current_path] = $preferred_links[$parent_path];
  }
}
/**
 * Implements hook_menu_breadcrumb_alter().
 */
/*  // Add the current page to the breadcrumb, if not already done.
  $end = end($active_trail);
  if (current_path() != $end['href']) {
    $active_trail[] = $item;
  }
}*/

?>

