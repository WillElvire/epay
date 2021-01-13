<!DOCTYPE html>
<html lang="zxx">  
     
    
    @include('pages/partials/inclusion')

    <body class="defult-home">
        
        <!--Preloader area start here-->
        <div id="loader" class="loader orange-color">
            <div class="loader-container">
                <div class='loader-icon'>
                    <img src="/assets/images/fav-orange.png" alt="">
                </div>
            </div>
        </div>
        <!--Preloader area End here--> 

@yield('container')
		<!-- Main content Start -->
        <div class="main-content">
            <!--Full width header Start-->
            <div class="full-width-header home8-style4 main-home">
                <!--Header Start-->
                <header id="rs-header" class="rs-header">
                    <!-- Menu Start -->
                     @include('pages/partials/navbar')
                    <!-- Menu End --> 

     
        </div> 
        <!-- Main content End -->
     
        <!-- Footer Start -->
      @include('pages/partials/footer')
        <!-- Footer End -->

        <!-- start scrollUp  -->
        <div id="scrollUp" class="orange-color">
            <i class="fa fa-angle-up"></i>
        </div>
        <!-- End scrollUp  -->

        <!-- Search Modal Start -->
        <div aria-hidden="true" class="modal fade search-modal" role="dialog" tabindex="-1">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span class="flaticon-cross"></span>
            </button>
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="search-block clearfix">
                        <form>
                            <div class="form-group">
                                <input class="form-control" placeholder="Search Here..." type="text">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Search Modal End -->

        <!-- modernizr js -->
          @livewireScripts
        <script src="/assets/js/modernizr-2.8.3.min.js"></script>
        <!-- jquery latest version -->
        <script src="/assets/js/jquery.min.js"></script>
        <!-- Bootstrap v4.4.1 js -->
        <script src="/assets/js/bootstrap.min.js"></script>
        <!-- Menu js -->
        <script src="/assets/js/rsmenu-main.js"></script> 
        <!-- op nav js -->
        <script src="/assets/js/jquery.nav.js"></script>
        <!-- owl.carousel js -->
        <script src="/assets/js/owl.carousel.min.js"></script>
        <!-- Slick js -->
        <script src="/assets/js/slick.min.js"></script>
        <!-- isotope.pkgd.min js -->
        <script src="/assets/js/isotope.pkgd.min.js"></script>
        <!-- imagesloaded.pkgd.min js -->
        <script src="/assets/js/imagesloaded.pkgd.min.js"></script>
        <!-- wow js -->
        <script src="/assets/js/wow.min.js"></script>
        <!-- Skill bar js -->
        <script src="/assets/js/skill.bars.jquery.js"></script>
        <script src="/assets/js/jquery.counterup.min.js"></script>        
         <!-- counter top js -->
        <script src="/assets/js/waypoints.min.js"></script>
        <!-- video js -->
        <script src="/assets/js/jquery.mb.YTPlayer.min.js"></script>
        <!-- magnific popup js -->
        <script src="/assets/js/jquery.magnific-popup.min.js"></script>      
        <!-- plugins js -->
        <script src="/assets/js/plugins.js"></script>
        <!-- contact form js -->
        <script src="/assets/js/contact.form.js"></script>
        <!-- main js -->
        <script src="/assets/js/main.js"></script>

       
      
 
    
        <script src="/assets/js/tilt.jquery.min.js"></script>      
      
    </body>

</html>

