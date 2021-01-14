@extends('administrator/template/index')

@section('container')
    
<div class="container">

    <h4>Profil Koua Wilfried</h4>
    <hr>

    <div class="row">
    

                            <div class=" col-md-8 card shadow mb-4">
                              
                               
                                    <div class="card-header">
                                        Information  (Nom du client)
                                    </div>
                                    
                                <!-- Card Content - Collapse -->
                                <div class="collapse show" id="collapseCardExample">
                                    <div class="card-body">
                                     <b>  Nom : <b class="badge badge-primary">Koua</b> <br>
                                       Prenom : <b class="badge badge-primary">Wilfried</b><br>
                                       Email :<b class="badge badge-primary">elvirekoua2000@gmail.com</b> <br>
                                       Pays :<b class="badge badge-primary">cote d'ivoire</b> <br>
                                       Numero de telephone :<b class="badge badge-primary">+2256589520</b> <br>
                                       <hr>
                                       Tonneaux choisi : <b class="badge badge-primary">50 $</b> <br>
                                       Montant à recevoir : <b class="badge badge-primary">99.99 $</b> <br>
                                       Montant récu : <b class="badge badge-primary">2 $</b> <br>
                                       
                                       Date de validation du compte :<b class="badge badge-primary">22/10/11</b> <br>
                                       Personnes parrainer : <b class="badge badge-primary">8</b> <br>
                                       Etat du compte :<b class="badge badge-success">actif</b>
                                       <hr>
                                       Code investisseur : <b class="badge badge-primary">X1020</b> <br>
                                       Lien parrainage : <input type="text" value="{{config('app.url')}}/register/ref=1234" class="form-control">
                                       <hr> </b>
                                       <a class='btn btn-outline-danger'>Supprimer</a>
                                    </div>
                                </div>
                            </div>


                            <div class=" col-md-4 card shadow mb-4">
                                
                                <!-- Card Content - Collapse -->
                                <div class="collapse show" id="collapseCardExample">
                                    <div class="card-header">
                                       Liste des personnes parrainées <b class="badge badge-success">7</b>
                                    </div>
                                    <div class="card-body">
                                       <p>1- ISACC GNIALY  </p>
                                       <p>1- ISACC GNIALY </p>
                                       <p>1- ISACC GNIALY </p>
                                       <p>1- ISACC GNIALY </p>
                                       <p>1- ISACC GNIALY </p>
                                    </div>
                                </div>
                            </div>
    </div>
</div>
@endsection