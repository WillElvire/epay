@include('pages/partials/inclusion')
<body style="background-image: url(/assets/images/bg/footer-bg.png);background-repeat:no-repeat;background-position:bottom">
<div class="rs-login pt-100 pb-100 md-pt-70 md-pb-70">
    <div class="container">
        <a class="readon register-btn col-md-2 col-xs-2" href="{{config('app.url')}}/"> Accueil </a>
        <hr>
        <div class="noticed">
            <div class="main-part">                           
                <div class="method-account">
                    
                    <h2 class="login">Se connecter</h2>
                    <form>
                        <input type="email mb-30" name="text" placeholder="Votre Email" required="">
                        <input type="text" name="text" placeholder="Votre mot de passe" required="">
                        <button type="submit" class="readon submit-btn">Se connecter</button>
                        <div class="last-password">
                            <p>Vous n'avez pas de compte? <a href="{{config('app.url')}}/register">Creer son compte</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>