@include('pages/partials/inclusion')
<body style="background-image: url(/assets/images/bg/footer-bg.png);background-repeat:no-repeat;background-position:bottom">
<div class="rs-login pt-100 pb-100 md-pt-70 md-pb-70">
    <div class="container">
        <a class="readon register-btn col-md-2 col-xs-2" href="/"> Accueil </a>
        <hr>
        <div class="noticed">
            <div class="main-part">                           
                <div class="method-account">
                    
                    <h2 class="login">Se connecter</h2>
                     @if(session()->has('success'))
                    <div class="alert alert-success text-center">
                        {{session()->get('success')}}
                        </div>
                    @endif
                    @if(session()->has('good'))
                    <div class="alert alert-success text-center">
                        {{session()->get('good')}}
                    </div>
                    @endif
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <input type="email mb-30" name="email" placeholder="Votre Email" required="">
                        <input type="password" name="password" placeholder="Votre mot de passe" required="">
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