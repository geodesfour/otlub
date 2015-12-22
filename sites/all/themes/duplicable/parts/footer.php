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
                <a href="http://drupal7.dev/newsletter/" class="btn btn-red">S'abonner à l'e-volution</a>
              </div>
            </div>
            <div class="col-md-6 col-xs-12">
              <div class="section-contactus-contact">
                <p>Vous avez une question&nbsp;? Besoin d'un renseignement&nbsp;? N'hésitez pas à nous contacter</p>
                <a href="http://drupal7.dev/nous-contacter/" class="btn btn-red">Nous contacter</a>
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
                  <img src="http://drupal7.dev/sites/all/themes/duplicable/img/share-facebook.png" width="322" height="70" class="img-responsive" alt="Retrouvez-nous sur Facebook">
                </a>
              </div>
              <div class="col-lg-12 col-sm-6 col-xs-12">
                <a href="https://youtube.com/channel/UCWpkinUzBIP3jIwinVuQvdQ" id="section-contactus-networks-youtube" target="_blank" class="section-contactus-networks-youtube">
                  <!-- <i class="fa fa-youtube-play"></i> -->
                  <!-- <p>Suivez-nous sur <strong>Youtube</strong></p> -->
                  <img src="http://drupal7.dev/sites/all/themes/duplicable/img/share-youtube.png" width="322" height="70" class="img-responsive" alt="Suivez-nous sur Youtube">
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
                <img src="http://drupal7.dev/sites/all/themes/duplicable/img/logo-footer.png" class="img-responsive" width="195" height="205" alt="">
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
            <div class="menu-footer-container">
              <ul class="list-inline">
                <li id="menu-item-2031" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2031">
                  <a href="/drupal7/plan-du-site/">Plan du site</a>
                </li>
                <li id="menu-item-2034" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2034">
                  <a href="/drupal7/mentions-legales/">Mentions légales</a>
                </li>
                <li id="menu-item-23240" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-23240">
                  <a href="/drupal7/credits/">Crédits</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>