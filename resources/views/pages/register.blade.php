
<!DOCTYPE html>
<html lang="en">


@include('pages/partials/inclusion')

<body style="background-image: url(/assets/images/bg/footer-bg.png);background-repeat:no-repeat;background-position:bottom">
    

<section class="register-section pt-20 pb-100" >
    <div class="container">
        <div class="register-box">
            <a class="readon register-btn col-md-2 col-xs-2" href="{{config('app.url')}}/"> Accueil </a>
            <hr>
            <div class="sec-title text-center mb-30">
                <h2 class="title mb-10">Inscription</h2>
            </div>
            
           
            <div class="styled-form">
                <div id="form-messages"></div>
                <form id="contact-form" method="post"> 
                    @csrf()                              
                    <div class="row clearfix">                                    
                        <!-- Form Group -->
   

                        <div class="form-group col-lg-12 mb-25">
                            <input type="text" id="fname" name="fname" value="" placeholder="Parrain *" >
                        </div>

                        <div class="form-group col-lg-12 mb-25">
                            <input type="text" id="fname" name="fname" value="" placeholder="Nom" required>
                        </div>
                        
                        <!-- Form Group -->
                        <div class="form-group col-lg-12">
                            <input type="text" id="lname" name="lname" value="" placeholder="Prenom" required>
                        </div>
                        
                        <!-- Form Group -->
                        <div class="form-group col-lg-12">
                            <input type="email" id="email" name="email" value="" placeholder="Email" required>
                        </div>
                        
                        <!-- Form Group -->

                        <div class="form-group col-lg-12">
                            <select  class="form-control-lg col-md-12">
                                <option value="M">Masculin</option>
                                <option value="F">Féminin</option>
                            </select>
                        </div>
       
                        <!-- Form Group -->
                        <div class="form-group col-lg-12">
                            <input type="text" id="Username" name="Password" value="" placeholder="Mot de passe" required>
                        </div>    
                        <!-- Form Group -->
                        <div class="form-group col-lg-12">
                            <input type="text" id="Username" name="Confirm Password" value="" placeholder="Confirmer Mot de passe" required>
                        </div>
                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                            <div class="row clearfix">
                                <!-- Column -->
                                <div class="column col-lg-3 col-md-4 col-sm-12">
                                    <div class="radio-box">
                                        <input type="radio" name="remember-password" id="type-1"> 
                                    </div>
                                </div>
                                <!-- Column -->
                                <div class="column col-lg-3 col-md-4 col-sm-12">
                                    <div class="radio-box">
                                        <input type="radio" name="remember-password" id="type-2"> 
                                    </div>
                                </div>
                                <!-- Column -->
                                <div class="column col-lg-3 col-md-4 col-sm-12">
                                    <div class="radio-box">
                                        <input type="radio" name="remember-password" id="type-3"> 
                                    </div>
                                </div>
                                <!-- Column -->
                                <div class="column col-lg-12 col-md-12 col-sm-12">
                                    <div class="check-box">
                                        <input type="checkbox" name="remember-password" id="type-4"> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group col-lg-12 col-md-12 col-sm-12 text-center">
                            <button type="submit" class="readon register-btn"><span class="txt">S'inscrire</span></button>
                        </div>
                        
                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                            <div class="users">Avez vous deja un compte ? <a href="{{config('app.url')}}/auth">S'authentifier</a></div>
                        </div>
                        
                    </div>
                    
                </form>
            </div>
            
        </div>
    </div>
</section>
<!-- End Login Section --> 

</body>
</html>