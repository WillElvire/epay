@extends('user/template/index')

@section('container')

<div class="container">

    <div class="card">

         

         <div class="card-body">


            <div class="container">


               
                <div class="row">
                <div class="col-md-8">
                <h6 class="badge badge-dark">Informations relatives à l'investissement</h6> <br>                
                <br>
                <b>nom: <b class="badge badge-primary">Koua</b> <br>
                Prenom : <b class="badge badge-primary">Wilfried</b><br>
                Email :<b class="badge badge-primary">elvirekoua2000@gmail.com</b> <br>
                Numero de télephone :<b class="badge badge-primary">+00222503659060</b> <br> 
                Pays :<b class="badge badge-primary"> Cote d'ivoire </b> <br> 
                Sexe :<b class="badge badge-primary"> Masculin </b> <br>
                Code Investisseur :<b class="badge badge-primary">X500</b> <br> </b>
                </b>
                <br>               
                <h6 class="badge badge-dark">Informations relatives à l'investissement</h6> <br>

               
                <b>Tonneaux :  <b class="badge badge-primary">50$</b> <br>
 
                Validité :  <b class="badge badge-primary"> 1 mois </b> <br>

                Date d'inscription : <b class="badge badge-primary">22/12/20</b> <br>

                <label>Lien de parrainage : </label>  <input type="text" class="col-md-8 form-control" value="{{config('app.url')}}/register/ref=1234"/> 
                
                </b> 

               </div>

               <div class="col-md-4">
                    <div class="card">
                         <div class="card-header">
                             <h4 class="badge badge-success">Liste des filleuls</h4>
                         </div>
                         <div class="card-body">
                             <p>1-IGNASS</p>
                             <p>1-IGNASS</p>
                             <p>1-IGNASS</p>
                             <p>1-IGNASS</p>
                             <p>1-IGNASS</p>
                             <p>1-IGNASS</p>
                             <p>1-IGNASS</p>
                         </div>
                    </div>
               </div>

             </div>

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