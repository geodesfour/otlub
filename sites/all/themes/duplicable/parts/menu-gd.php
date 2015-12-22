<div class="layout-navigation affix-top"> 

    <?php if (!empty($site_slogan)): ?>

      <p class="lead"><?php print $site_slogan; ?></p>

    <?php endif; ?>

    <?php /*print render($page['header']);*/ ?>

    <nav id="mainnav" >

      <div id="menu">

        <?php

          $menu=menu_tree_all_data("menu-principal");   

          // Création du tableau que l'on enverra au moteur de template

          echo '<ul class="level1">';

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

            echo '<a href="#r'.$item["link"]["mlid"].'">'.$item["link"]["title"].'</a>';             

            echo '<div class="menu row" id="r'.$item["link"]["mlid"].'">';

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

                  echo '<a href="#r'.$children["link"]["mlid"].'">'.$children["link"]["title"].'<i class="pull-right fa fa-angle-right"></i></a>';

                  echo '<div class="menu row" id="r'.$children["link"]["mlid"].'">';

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
                      echo '<a href="#r'.$children2["link"]["mlid"].'">'.$children2["link"]["title"].'</a>';

                      echo '<div class="menu row" id="r'.$children2["link"]["mlid"].'">';

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
                        echo '<a href="/drupal7/'.$alias.'">'.$children3["link"]["title"].'</a>';
                        
                        echo '</li>'; 
                      }

                      echo '</ul>';            

                      echo '</div>';
                        
                    }

                    else {

                      $alias = drupal_get_path_alias($path);
                      echo '<a href="/drupal7/'.$alias.'">'.$children2["link"]["title"].'</a>';
                    }                     

                  }

                  echo '</ul>';

                  echo '</div>';

                } 

                else {                  

                  $alias = drupal_get_path_alias($path);
                  echo '<a href="/drupal7/'.$alias.'">'.$children["link"]["title"].'</a>'; 

                }

              echo '</li>';

            }

            echo '</ul>';            

            echo '</div>';

            echo '</li>';

            }

            else {

              $alias = drupal_get_path_alias($path);
              echo '<a href="/drupal7/'.$alias.'">'.$item["link"]["title"].'</a>';

            }

          }        

        ?>

       </ul>

    </nav>

    <nav id="mobilemainnav">

        <div id="dl-menu" class="dl-menuwrapper"></div>

    </nav>

    <section id="road">

        <div id="road-wrapper">

          <div class="container">

            <ul id="roadul" class='clearfix sixteen columns'>

                <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb" class="home">

                </li>

            </ul>

          </div>

        </div>

    </section>

    

    </div>

  </div>

</div>