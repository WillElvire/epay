<div>
   <div class="container ">
 
   @if($val==false)
    <div class="card">

         <div class="card-header">

                       <h2 class="card-title ">
                           <b class="badge badge-primary">Informations personnelle</b>
                       </h2>
         </div>

         @if(session()->has('success'))
         <div class="alert alert-success text-center">
            {{session()->get('success')}}
         </div>
          @endif

         <div class="card-body">



            <div class="container"> 

              <h3>{{auth()->user()->firstname}}  {{auth()->user()->lastname}} </h3>

              <div class="card">

                 
                  <div class="card-body">
                        nom: <b class="badge badge-primary">{{auth()->user()->firstname ?? ''}}</b> <br>
                        Prenom : <b class="badge badge-primary">{{auth()->user()->lastname ?? ''}}</b><br>
                        Email :<b class="badge badge-primary">{{auth()->user()->email ?? ''}}</b> <br>
                        Pays :<b class="badge badge-primary">{{auth()->user()->country ?? ''}}</b> <br>
                        date de creation du compte  : <b class="badge badge-primary">{{auth()->user()->created_at}}</b> <br>
                        Numero de télephone :<b class="badge badge-primary">(+225) {{auth()->user()->phone}}</b> <br> 
                        <h4 class="badge badge-dark">Informations relatives à l'investissement</h4> <br>
                        Tonneaux :  <b class="badge badge-primary">{{$money->money_investit/540 ?? 0}} $</b> <br>
                        Validité :  <b class="badge badge-primary"> {{$money->date_de_retour ?? 0}} </b> <br>
                        Montant à recevoir :  <b class="badge badge-primary"> {{$money->montant_a_recevoir/500 ?? 0}} $ </b> <br>
                        Status du compte : @if(auth()->user()->status==0) <b class="badge badge-danger"> Compte non confirmé</b>    @else  <b class="badge badge-success"> Compte  confirmé</b>  @endif <br>
                        <label>Lien de parrainage : </label>  <input type="text" class="col-md-8 form-control" value="/register/ref={{auth()->user()->user_code ?? ''}}"/> 
                        

                  </div>
              </div>

            </div>

            <hr>

            <div class="row">

                <button class="btn btn-primary btn-lg col-md-4" wire:click.prevent="showComponent">Modifier mes informations</button>

                
                <a class="btn btn-outline-primary btn-lg col-md-4" href="{{config('app.url')}}/utilisateur/withdrawall">Faire un rétrait</a>


                <a class="btn btn-primary btn-lg col-md-4" href="{{config('app.url')}}/utilisateur/history">Voir ses historiques</a>

            </div>



            


        
                

         </div>


    </div>
    @endif


</div>

@if($val==true)
<div class=" col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4>Modifier mes informations</h4>
        <hr>
        <form class="forms-sample">
         <b><div class="form-group">
            <label for="exampleInputName1">Nom :</label>
            <input wire:model='firstname' type="text" class="form-control" id="exampleInputName1" value="$firstname">
          </div>

          <div class="form-group">
            <label for="exampleInputName1">Prénom :</label>
            <input wire:model='lastname' type="text" class="form-control" value="{{$lastname}}" id="exampleInputName1" placeholder="Name">
          </div>

          <div class="form-group">
            <label for="exampleInputName1">Numéro de telephone :</label>
            <input value="{{$phone}}" type="text" class="form-control" id="exampleInputName1" wire:model='phone' placeholder="Name">
          </div>

          <div class="form-group">
            <label  for="exampleInputEmail3">Email</label>
            <input wire:model='email' value="{{$email}}" type="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword4">Nouveau mot de passe</label>
            <input wire:model='password' type="password" class="form-control" id="exampleInputPassword4" placeholder="Password">
          </div>
           <div class="form-group">
            <label for="exampleInputPassword4">Retaper le mot de passe</label>
            <input  wire:model='password_confirmation' type="password" class="form-control" id="exampleInputPassword4" placeholder="Password confirmation">
          </div>

        </b> 
         
        
        
          

          <br>
          
          <button wire:click.prevent='editUserInformation()' type="submit" class="btn btn-primary mr-5 btn-lg">Modifier mes informations</button>
          
        </form>
      </div>
    </div>
  </div>
  @endif
</div>
