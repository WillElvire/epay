<div class="topbar-area home8-topbar">
    <div class="container">
        <div class="row y-middle">
            <div class="col-md-7">
                <ul class="topbar-contact">
                    <li>
                        <i class="flaticon-email"></i>
                        <a href="mailto:support@rstheme.com">support@rstheme.com</a>
                    </li>
                    <li>
                        <i class="flaticon-location"></i>
                        374 William S Canning Blvd, MA 2721, USA
                    </li>
                </ul>
            </div>
            <div class="col-md-5 text-right">
                <ul class="topbar-right">
                    <li class="login-register">
                        <i class="fa fa-sign-in"></i>
                        <a href="/register">Inscription</a>/<a href="/auth">Connexion</a>
                    </li>
                    <li class="btn-part">
                        <a class="apply-btn" href="{{config('app.url')}}/pricing">Table des prix</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="menu-area menu-sticky">
    <div class="container">
        <div class="row y-middle">
            <div class="col-lg-2">
                <div class="logo-cat-wrap">
                    <div class="logo-part">
                        <a href="index-2.html">
                            <img class="normal-logo" src="assets/images/fav-orange.png" alt="">
                            <img class="sticky-logo" src="assets/images/fav-orange.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 text-right">
              <div class="rs-menu-area">
                  <div class="main-menu">
                      <div class="mobile-menu">
                          <a class="rs-menu-toggle">
                              <i class="fa fa-bars"></i>
                          </a>
                      </div>
                      <nav class="rs-menu">
                         <ul class="nav-menu">
                          <li class="menu-item">
                              <a href="/">Accueil</a>
                          </li>


                             <li class="menu-item-has-children">
                                 <a href="/pricing">Table des prix</a>
                                 
                             </li>


                             @if(isset(Auth()->user()->id)):

                                <li class="menu-item-has-children">
                                    <a href="/utilisateur">Back office</a>
                                    
                                </li>
                             @else

                                    <li class="menu-item-has-children">
                                        <a href="/auth">Back office</a>
                                        
                                    </li>


                             @endif;

                             <li class="menu-item-has-children">
                                 <a href="/register">Inscription</a>
                                 
                             </li>

                             <li class="menu-item-has-children">
                                 <a href="/contact">Contact</a>
                                 
                             </li>
                         </ul> <!-- //.nav-menu -->
                      </nav>                                        
                  </div> <!-- //.main-menu -->
                
              </div>
            </div>
            
        </div>
    </div>
</div>