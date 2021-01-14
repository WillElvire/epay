@extends('user/template/index')

@section('container')
    
   <div class="card">
       <div class="card-body">

           <b class="row justify-content-center">Message de confirmation</b>
           <hr>
           <p class="row justify-content-center" style="font-weight: bold">Votre demande de rétrait à été pise en compte vous recevrez d'ici peu un message dans votre boite mail <br>
           
           <hr>
           <div class="container">

              <a class="btn btn-outline-primary btn-lg" href="{{config('app.url')}}/utilisateur/profil">Voir mon profil</a>

           </div>
        </p>
       </div>
   </div>
@endsection