
<div class="layout-menu">
  <ul class="flexy-menu orange vertical">
  <div class="logo">        
    <?php if (!empty($logo)): ?>
      <?php if(drupal_is_front_page()): ?>
        <h1>
      <?php else: ?>
        <a href="<?=url('<front>'); ?>">
      <?php endif; ?>
        <img class="logo-normal img-responsive animated fadeIn" src="<?php print $logo; ?>" alt="Mitry Mory">
      <?php if(drupal_is_front_page()): ?>
        </h1>
      <?php else: ?>
        </a>
      <?php endif; ?>
    <?php endif; ?>
  </div>
              
    <li class="active" style="display: block;"><a href="#"><i class="icon-heart"></i>Accueil</a></li>
    
    <?php 
      $menu=menu_tree_all_data("menu-principal"); 
      foreach($menu as $item) { 

            $path = $item["link"]["link_path"];

            $parent = menu_link_get_preferred($path);

            $parameters = array(

                'active_trail' => array($parent['plid']),

                'only_active_trail' => FALSE,

                'min_depth' => $parent['depth']+1,

                'max_depth' => $parent['depth']+1,

                'conditions' => array('plid' => $parent['mlid']),

              );

            $childrens = menu_build_tree($parent['menu_name'], $parameters);

            echo '<li class="nb'.$item["link"]["mlid"].'">'; 

            $nbChildrens = count($childrens); 

            if ($nbChildrens > 0) {

            $alias = drupal_get_path_alias($path);
            echo '<a href="/'.$alias.'">'.$item["link"]["title"].'</a>';            

            

            echo '<ul class="level2">';            

            foreach($childrens as $children) {              

              $path = $children["link"]["link_path"];

              $parent = menu_link_get_preferred($path);

              $parameters = array(

                  'active_trail' => array($parent['plid']),

                  'only_active_trail' => FALSE,

                  'min_depth' => $parent['depth']+1,

                  'max_depth' => $parent['depth']+1,

                  'conditions' => array('plid' => $parent['mlid']),

                );

              $childrens2 = menu_build_tree($parent['menu_name'], $parameters);

              echo '<li class="nb'.$children["link"]["mlid"].'">'; 

              $nbChildrens = count($childrens2);

                if ($nbChildrens > 0) {  

                  $alias = drupal_get_path_alias($path);
                  echo '<a href="/'.$alias.'">'.$children["link"]["title"].'</a>';                

                  echo '<ul class="level3">';

                  foreach($childrens2 as $children2) {

                    $path = $children2["link"]["link_path"];

                    $parent = menu_link_get_preferred($path);

                    $parameters = array(

                        'active_trail' => array($parent['plid']),

                        'only_active_trail' => FALSE,

                        'min_depth' => $parent['depth']+1,

                        'max_depth' => $parent['depth']+1,

                        'conditions' => array('plid' => $parent['mlid']),

                      );

                    $childrens3 = menu_build_tree($parent['menu_name'], $parameters);

                    echo '<li class="nb'.$children2["link"]["mlid"].'">';  

                    $nbChildrens = count($childrens3); 
                    

                    if ($nbChildrens > 0) {
                      $alias = drupal_get_path_alias($path);
                      echo '<a href="/'.$alias.'">'.$children2["link"]["title"].'</a>';

                      
                      echo '<ul class="level4">';

                      foreach($childrens3 as $children3) {

                        $path = $children3["link"]["link_path"];

                        $parent = menu_link_get_preferred($path);

                        $parameters = array(

                            'active_trail' => array($parent['plid']),

                            'only_active_trail' => FALSE,

                            'min_depth' => $parent['depth']+1,

                            'max_depth' => $parent['depth']+1,

                            'conditions' => array('plid' => $parent['mlid']),

                        );

                        echo '<li class="nb'.$children3["link"]["mlid"].'">'; 

                        $alias = drupal_get_path_alias($path);                        
                        echo '<a href="/'.$alias.'">'.$children3["link"]["title"].'</a>';
                        
                        echo '</li>'; 
                      }

                      echo '</ul>';            

                     
                        
                    }

                    else {

                      $alias = drupal_get_path_alias($path);
                      echo '<a href="/'.$alias.'">'.$children2["link"]["title"].'</a>';
                    }                     

                  }

                  echo '</ul>';

                 

                } 

                else {                  

                  $alias = drupal_get_path_alias($path);
                  echo '<a href="/'.$alias.'">'.$children["link"]["title"].'</a>'; 

                }

              echo '</li>';

            }

            echo '</ul>';            

            

            echo '</li>';

            }

            else {

              $alias = drupal_get_path_alias($path);
              echo '<a href="/'.$alias.'">'.$item["link"]["title"].'</a>';

            }

          }        

        ?>
  </ul>
</div>

