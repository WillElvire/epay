@extends('welcome')

@section('container')


<!-- Canvas Menu start -->
<nav class="right_menu_togle hidden-md">
    <div class="close-btn">
        <span id="nav-close">
            <div class="line">
                <span class="line1"></span><span class="line2"></span>
            </div>
        </span>
    </div>
    <div class="canvas-logo">
        <a href="index-2.html"><img src="/assets/images/fav-orange.png" alt="logo"></a>
    </div>
    <div class="offcanvas-text">
        <p>We denounce with righteous indige nationality and dislike men who are so beguiled and demo  by the charms of pleasure of the moment data com so blinded by desire.</p>
    </div>
    <div class="offcanvas-gallery">
        <div class="gallery-img">
            <a class="image-popup" href="/assets/images/gallery/1.jpg"><img src="/assets/images/gallery/1.jpg" alt=""></a>
        </div>
        <div class="gallery-img">
            <a class="image-popup" href="/assets/images/gallery/2.jpg"><img src="/assets/images/gallery/2.jpg" alt=""></a>
        </div>
        <div class="gallery-img">
            <a class="image-popup" href="/assets/images/gallery/3.jpg"><img src="/assets/images/gallery/3.jpg" alt=""></a>
        </div>
        <div class="gallery-img">
            <a class="image-popup" href="/assets/images/gallery/4.jpg"><img src="/assets/images/gallery/4.jpg" alt=""></a>
        </div>
        <div class="gallery-img">
            <a class="image-popup" href="/assets/images/gallery/5.jpg"><img src="/assets/images/gallery/5.jpg" alt=""></a>
        </div>
        <div class="gallery-img">
            <a class="image-popup" href="/assets/images/gallery/6.jpg"><img src="/assets/images/gallery/6.jpg" alt=""></a>
        </div>
    </div>
    <div class="map-img">
        <img src="/assets/images/map.jpg" alt="">
    </div>
    <div class="canvas-contact">
        <ul class="social">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
        </ul>
    </div>
</nav>
<!-- Canvas Menu end -->
</header>
<!--Header End-->
</div>
<!--Full width header End-->

<!-- Slider Section Start -->
<div class="rs-slider main-home">
<div class="rs-carousel owl-carousel" data-loop="true" data-items="1" data-margin="0" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="1" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="1" data-md-device-nav="true" data-md-device-dots="false">
<div class="slider-content slide1">
    <div class="container">
        <div class="content-part">
            <div class="sl-sub-title wow bounceInLeft" data-wow-delay="300ms" data-wow-duration="2000ms">EPAY FIRM</div>
            <h1 class="sl-title wow fadeInRight" data-wow-delay="600ms" data-wow-duration="2000ms">Devenez membre d'EPAY</h1>
            <div class="sl-btn wow fadeInUp" data-wow-delay="900ms" data-wow-duration="2000ms">
                <a class="readon orange-btn main-home" href="{{config('app.url')}}/register">Inscription</a>
            </div>
        </div>
    </div>
</div>
<div class="slider-content slide2">
    <div class="container">
        <div class="content-part">
            <div class="sl-sub-title wow bounceInLeft" data-wow-delay="300ms" data-wow-duration="2000ms">Start to learning today</div>
            <h1 class="sl-title wow fadeInRight" data-wow-delay="600ms" data-wow-duration="2000ms">Explore Interests and Career With Courses</h1>
            <div class="sl-btn wow fadeInUp" data-wow-delay="900ms" data-wow-duration="2000ms">
                <a class="readon orange-btn main-home" href="#">Find Courses</a>
            </div>
        </div>
    </div>
</div>

</div>

<!-- Features Section start -->
<div id="rs-features" class="rs-features main-home">
<div class="container">
   <div class="row">
        <div class="col-lg-4 col-md-12 md-mb-30">
            <div class="features-wrap">
                <div class="icon-part">
                   <img src="/assets/images/features/style3/icons/3.png" alt="">
                </div>
                <div class="content-part">
                    <h4 class="title">
                        <span class="watermark">5,320 online courses</span>
                    </h4>
                    <p class="dese">
                       Enjoy a variety of fresh topics
                    </p>
                </div>
            </div>
        </div> 
        <div class="col-lg-4 col-md-12 md-mb-30">
            <div class="features-wrap">
                <div class="icon-part">
                   <img src="/assets/images/features/style3/icons/3.png" alt="">
                </div>
                <div class="content-part">
                  <h4 class="title">
                      <span class="watermark">Expert instruction</span>
                  </h4>
                    <p class="dese">
                        Find the right instructor
                    </p>
                </div>
            </div>
        </div> 
        <div class="col-lg-4 col-md-12">
            <div class="features-wrap">
                <div class="icon-part">
                   <img src="/assets/images/features/style3/icons/3.png" alt="">
                </div>
                <div class="content-part">
                    <h4 class="title">
                        <span class="watermark">Lifetime access</span>
                    </h4>
                    <p class="dese">
                       Learn on your schedule
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Features Section End -->
</div>
<!-- Slider Section End -->                    

<!-- Categories Section Start -->


<div id="rs-about" class="rs-about style1 pt-100 pb-100 md-pt-70 md-pb-70">
<div class="container">
<div class="row align-items-center">
    <div class="col-lg-7 pl-60 order-last md-pl-15 md-mb-60">
        <div class="img-part js-tilt">
            <img class="" src="assets/images/new/banner2.jpeg" alt="">
           
        </div>
    </div>
    <div class="col-lg-5">
        <div class="sec-title mb-26 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
            <div class="sub-title dark">QUI SOMMES-NOUS ?</div>
            
            <div class="desc pr-30">

                <b>EPAY </b> est une  plateforme est spécialisée dans l’investissement immobilier à long terme et pétrolier à court terme qui offre à nos clients une satisfaction absolue. 

L’immobilier et le pétrole, sont des investissements rentables et facile à comprendre, puisque vous savez où est injecté vos fonds. Il vous permet d’agioter sur le prix du baril de pétrole et sur les offres immobilières. 

Epay est une société Israélienne ( dont le siège principal est en Israël ) qui avec sa renommée, vous rassure et vous permet d’injecter votre investissement en toute sécurité dans la représentation du pays de votre sous région. 

<br>




            </div>
        </div>
        <div class="btn-part wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
            <a class="readon register-btn col-md-6" href="#">Inscription</a>
            <a href="#" class="btn btn-primary btn-lg col-md-4" data-toggle="modal" data-target="#exampleModalLong">Lire plus</a>
        </div>
    </div>
</div>
</div>
</div>


<!-- Categories Section End -->

<div id="rs-about" class="rs-about style4 pt-100 pb-100 md-pt-80 md-pb-80">
<div class="container">
<div class="row">                        
    <div class="col-lg-5 md-mb-50">
        <div class="img-part">
            
           
            <img class="about-main pt-70"  src="assets/images/bg/footer-bg.png" alt="About Image">

        </div>
    </div>
    <div class="offset-lg-1"></div>
    <div class="col-lg-6">
        <div class="about-content">
            <div class="sec-title mb-46 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                <h2 class="title mb-15 sm-mb-5">Localisation</h2>
               
                <p class="desc">Lorem ipsum dolor sit amet, consectetur adipisic ing elit, sed eius to mod tempors incididunt ut labore et dolore magna this aliqua  enims ad minimn the other hand denounce. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled</p>
                <p class="desc">When nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business</p>
            </div>
            <ul class="contact-part wow fadeInUp" data-wow-delay="500ms" data-wow-duration="2000ms">
                <li>
                    <div class="img-part">
                        <img src="assets/images/about/icon/1.png" alt="">
                    </div>
                    <div class="desc">
                        <span>Phone Number</span> 
                        <span><a href="tel:(123)-456-7890">(123)-456-7890</a></span>
                    </div>
                </li>
                <li>
                    <div class="img-part">
                        <img src="assets/images/about/icon/2.png" alt="">
                    </div>
                    <div class="desc">
                        <span>Email Address</span> 
                        <span><a href="mailto:info@mail.com">info@mail.com</a></span>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
</div>
</div>


    
<!-- Categories Section End -->

<!-- CTA Section Start -->
<div class="rs-cta main-home">
<div class="partition-bg-wrap">
<div class="container">
    <div class="row">
        <div class="offset-lg-6"></div>
        <div class="col-lg-6 pl-70 md-pl-15">
            <div class="sec-title3 mb-40">
                <h2 class="title white-color mb-16">Nos offres</h2>
                <div class="desc white-color pr-100 md-pr-0">

                    ⛽️ Tonneau 50$ ⛽️
                    Vous recevrez 91 $ fin de semaine <br>
                    
                    ⛽️Tonneau 100 $⛽️
                    Vous recevrez 181 $ fin de semaine <br>
                    
                    ⛽️Tonneau 150 $⛽️
                    Vous recevrez 275 $ fin de semaine <br>
                    
                    ⛽️Tonneau 200 $⛽️
                    Vous recevrez 362 $ fin de semaine <br>
                    
                    ⛽️Tonneau 370 $⛽️
                    Vous recevrez 650 $ fin de semaine <br>
                    
                    ⛽️Tonneau 1000 $⛽️
                    Vous recevrez 1540 $ fin de semaine  <br>
                    
                    🏘⛽️Tonneau 2000 $⛽️🏘
                    Vous recevrez 3270 $ fin des 02 semaines <br>
                    
                    🏘⛽️Tonneau 4000 $🏘⛽️
                    Vous recevrez 5851 $ fin des 02 semaines <br>
                    
                    🏘⛽️Tonneau 10000 $🏘⛽️
                    Vous recevrez 13501 $ fin des 02 semaine <br>
</div>
</div>
            <div class="btn-part">
                <a class="readon orange-btn transparent" href="{{config('app.url')}}/pricing">Voir notre  table des prix</a>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<!-- CTA Section End --> 

<div class="container pt-70">
  
    <h2 class="row justify-content-center">TABLE DES PRIX</h2>
                
    <div class="card-deck mb-3 text-center">
        <div class="card mb-4 box-shadow">
          <div class="card-header readon register-btn">
            <h4 class="my-0 font-weight-normal text-light">Particulier</h4>
          </div>
          <div class="card-body">
            <h2 class="card-title pricing-card-title">50$ - 370 $</h2>
            <ul class="list-unstyled mt-3 mb-4">
             <br>
             <br> 
              
            </ul>
            <a type="button" class="readon register-btn" href="{{config('app.url')}}/register">Adherer</a>
          </div>
        </div>
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal ">Investisseur</h4>
          </div>
          <div class="card-body">
            <h2 class="card-title pricing-card-title">1000 $ - 4000 $</h2>
            <ul class="list-unstyled mt-3 mb-4">
              <br>
              <br> 
            </ul>
            <a type="button" class="readon register-btn" href="{{config('app.url')}}/register">Adherer</a>
          </div>
        </div>
        <div class="card mb-4 box-shadow">
          <div class="card-header readon register-btn">
            <h4 class="my-0 font-weight-normal text-light">Enterprise</h4>
          </div>
          <div class="card-body">
            <h2 class="card-title pricing-card-title">10000$ </h2>
            <ul class="list-unstyled mt-3 mb-4">
              <br>
             <br> 
            </ul>
            <a class="readon register-btn" href="{{config('app.url')}}/register"> Adherer</a>
          </div>
        </div>
      </div>
     
      
  </div>
</div>

<!-- Faq Section Start -->
<div class="rs-faq-part style1 orange-color pt-100 pb-100 md-pt-70 md-pb-70">
<div class="container">
<div class="row">
    <div class="col-lg-6 padding-0">
      <div class=" main-part">
        <div class="title mb-40 md-mb-15">
            <h2 class="text-part">Frequently Asked Questions</h2>
        </div>
          <div class="faq-content">
              <div id="accordion" class="accordion">
                 <div class="card">
                     <div class="card-header">
                         <a class="card-link" data-toggle="collapse" href="#collapseOne">What are the requirements ?</a>
                     </div>
                     <div id="collapseOne" class="collapse show" data-parent="#accordion">
                         <div class="card-body">
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.
                         </div>
                     </div>
                 </div>
                  <div class="card">
                      <div class="card-header">
                         
                          <a class="card-link collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false">Does Educavo offer free courses?</a>
                      </div>
                      <div id="collapseTwo" class="collapse" data-parent="#accordion" style="">
                          <div class="card-body">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.
                          </div>
                      </div>
                  </div>
                  <div class="card">
                      <div class="card-header">
                         
                          <a class="card-link collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false">What is the transfer application process?</a>
                      </div>
                      <div id="collapseThree" class="collapse" data-parent="#accordion" style="">
                          <div class="card-body">
                             Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.
                          </div>
                      </div>
                  </div>     
                  <div class="card">
                      <div class="card-header">
                         
                          <a class="card-link collapsed" data-toggle="collapse" href="#collapsefour" aria-expanded="false">What is distance education?</a>
                      </div>
                      <div id="collapsefour" class="collapse" data-parent="#accordion" style="">
                          <div class="card-body">
                             Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </div>
    <div class="col-lg-6 padding-0">
        <div class="img-part media-icon orange-color">
            <a class="popup-videos" href="#">
                <i class="fa fa-play"></i>
            </a>
        </div>
    </div>
</div>
</div>
</div>
<!-- faq Section Start -->






<!-- Newsletter section start -->
<div class="rs-newsletter style1  pt-70 orange-color mb--90 sm-mb-0 sm-pb-70">
<div class="container">
<div class="newsletter-wrap">
    <div class="row y-middle">
        <div class="col-lg-6 col-md-12 md-mb-30">
           <div class="content-part">
               <div class="sec-title">
                   <div class="title-icon md-mb-15">
                       <img src="/assets/images/newsletter.png" alt="images">
                   </div>
                   <h2 class="title mb-0 white-color">Subscribe to Newsletter</h2>
               </div>
           </div>
        </div>
        <div class="col-lg-6 col-md-12">
            <form class="newsletter-form">
                <input type="email" name="email" placeholder="Enter Your Email" required="">
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
</div>
</div>
</div>
<!-- Newsletter section end -->



<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <h4 >Qui sommes-nous ?</h4>
         Epay   est une  plateforme est spécialisée dans l’investissement immobilier à long terme et pétrolier à court terme qui offre à nos clients une satisfaction absolue. 

L’immobilier et le pétrole, sont des investissements rentables et facile à comprendre, puisque vous savez où est injecté vos fonds. Il vous permet d’agioter sur le prix du baril de pétrole et sur les offres immobilières. 

Epay est une société Israélienne ( dont le siège principal est en Israël ) qui avec sa renommée, vous rassure et vous permet d’injecter votre investissement en toute sécurité dans la représentation du pays de votre sous région. 

<hr>
<h4>Notre vision</h4>

            Notre objectif est de permettre à toutes les classes sociales d’investir un montant selon le choix personnel en vue d’évoluer de façon simple, éduquée et régulée avec le partenariat que vous signez avec Epay 

            L’immobilier et le pétrole, sont des atouts d’avenir qui ne peuvent être infaillibles puisque vous avez l’aide une grande société experte comme Epay. 
            
            Pourquoi investir dans l’immobilier et le pétrole, 
            Ces deux modules d’investissements sont très prisés et à 100% fiables. Ce qui permet de spéculer sur le marché financier avec des prix très intéressant et fluide, la plus facile des manières de cogiter sur les opportunités de rentabilité de l’investissement en Immobilier et pétrole, c’est en ligne.
        </div>
       
      </div>
    </div>
  </div>

@stop