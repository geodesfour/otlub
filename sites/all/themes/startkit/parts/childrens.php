
<?php 
if ($node) {
$field = field_get_items('node', $node, 'body');
}
?>
<?php if ($field): ?>

<?php else: ?>

<ul class="row list-unstyled list-childrens">  
    
  <?php          
  // Set $path to the internal Drupal path of the parent or
  // to NULL for the current path 
  $path = 'node/'.$node->nid;
  $parent = menu_link_get_preferred($path);
  $parameters = array(
      'active_trail' => array($parent['plid']),
      'only_active_trail' => FALSE,
      'min_depth' => $parent['depth']+1,
      'max_depth' => $parent['depth']+1,
      'conditions' => array('plid' => $parent['mlid']),
    );

  $childrens = menu_build_tree($parent['menu_name'], $parameters);

  foreach($childrens as $children) { 

    echo '<li class="col-md-4">';
    
    
    $path = $children["link"]["link_path"];
    $alias = drupal_get_path_alias($path); 
                    
    echo '<a href="/drupal7/'.$alias.'">'.$children["link"]["link_title"].'</a>';

     
    echo '</li>';
    
  }
  ?>

</ul>
<?php endif; ?>




