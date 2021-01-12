@extends('user/template/index')

@section('container')

<div class="container">

    <div class="card">

         <div class="card-header">

                       <h2 class="card-title ">
                           <b class="badge badge-primary">Informations personnelle</b>
                       </h2>
         </div>

         <div class="card-body">


            <div class="container">

                <img src="/assets/images/fav-orange.png" class="row justify-content-center">

                <br>
                <b>nom: <b class="badge badge-primary">Koua</b> <br>
                Prenom : <b class="badge badge-primary">Wilfried</b><br>
                Email :<b class="badge badge-primary">elvirekoua2000@gmail.com</b> <br>
                Numero de télephone :<b class="badge badge-primary">+00222503659060</b> <br> </b>

                <br>
                
                <h6 class="badge badge-dark">Informations relatives à l'investissement</h6> <br>

               
                <b>Tonneaux :  <b class="badge badge-primary">50$</b> <br>
 
                Validité :  <b class="badge badge-primary"> 1 mois </b> <br>

                <label>Lien de parrainage : </label>  <input type="text" class="col-md-8 form-control" value="{{config('app.url')}}/register/ref=1234"/> 
                
                </b> 

            </div>

            <hr>

            <div class="row">

                <a class="btn btn-primary btn-lg col-md-4" href="{{config('app.url')}}/utilisateur/modify">Modifier mes informations</a>

                
                <a class="btn btn-outline-primary btn-lg col-md-4" href="{{config('app.url')}}/utilisateur/withdrawall">Faire un rétrait</a>


                <a class="btn btn-primary btn-lg col-md-4" href="{{config('app.url')}}/utilisateur/modify">Upgrader son pack</a>

            </div>

        
                

         </div>


    </div>


</div>

@stop