@extends('administrator/template/index')

@section('container')
    
<div class="container">

    <h4>Profil {{$user->firstname ?? ''}} {{$user->lastname ?? ''}}</h4>
    <hr>


    

    <div class="row">
    

                            <div class=" col-md-8 card shadow mb-4">
                              
                               
                                    <div class="card-header">
                                        Information  {{$user->firstname ?? ''}}
                                    </div>

                                    
                                    
                                <!-- Card Content - Collapse -->
                                <div class="collapse show" id="collapseCardExample">
                                    <div class="card-body">
                                     <b>  Nom : <b class="badge badge-primary">{{$user->firstname ?? ''}}</b> <br>
                                       Prenom : <b class="badge badge-primary">{{$user->lastname ?? ''}}</b><br>
                                       Email :<b class="badge badge-primary">{{$user->email ?? ''}}</b> <br>
                                       Pays :<b class="badge badge-primary">{{$user->country ?? ''}}</b> <br>
                                       Numero de telephone :<b class="badge badge-primary">{{$user->phone ?? ''}}</b> <br>
                                       <hr>
                                       Tonneaux choisi : <b class="badge badge-primary">{{$user->money[0]->pack ?? ''}} $</b> <br>
                                       
                                       Montant à recevoir : <b class="badge badge-primary">{{$user->money[0]->motant_a_recevoir/500 ?? ''}} $</b> <br>
                                       Montant récu : <b class="badge badge-primary">{{$user->money[0]->money/500 ?? ''}} $</b> <br>
                                       
                                       Date de validation du compte :<b class="badge badge-primary">{{$user->created_at->diffForHumans() ?? ''}}</b> <br>
                                       Personnes parrainer : <b class="badge badge-primary">0</b> <br>
                                       Etat du compte :<b class="badge badge-success">actif</b>
                                       <hr>
                                       Code investisseur : <b class="badge badge-primary">{{$user->user_code ?? ''}}</b> <br>
                                       Lien parrainage : <input type="text" value="{{config('app.url')}}/register/ref={{$user->user_code ?? ''}}}" class="form-control">
                                       <hr> </b>
                                       <a class='btn btn-outline-danger' href="{{ route('admin.delete.user',$user->user_code) ?? '' }}">Supprimer</a>
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
                                       @if(!empty($filleules->toArray()))
                                          @foreach($filleules as $user)
                                         <p>{{$user->firstname}} {{$user->lastname}} </p>
                                         @endforeach
                                         @else
                                           <div style="display: block; width: 100%;" class="btn btn-danger">0 filleule</div>
                                       @endif
                                    </div>
                                </div>
                            </div>
    </div>
</div>
@endsection