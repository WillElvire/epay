<div>
   <div class="container ">
 
   @if($val==false)
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
                <b>nom: <b class="badge badge-primary">{{auth()->user()->firstname}}</b> <br>
                Prenom : <b class="badge badge-primary">{{auth()->user()->lastname}}</b><br>
                Email :<b class="badge badge-primary">{{auth()->user()->email}}</b> <br>
                Numero de télephone :<b class="badge badge-primary">(+225) {{auth()->user()->phone}}</b> <br> </b>

                <br>
                
                <h6 class="badge badge-dark">Informations relatives à l'investissement</h6> <br>

               
                <b>Tonneaux :  <b class="badge badge-primary">50$</b> <br>
 
                Validité :  <b class="badge badge-primary"> 1 Semaine </b> <br>

                <label>Lien de parrainage : </label>  <input type="text" class="col-md-8 form-control" value="/register/ref={{auth()->user()->user_code}}"/> 
                
                </b> 

            </div>

            <hr>

            <div class="row">

                <button class="btn btn-primary btn-lg col-md-4" wire:click.prevent="showComponent">Modifier mes informations</button>

                
                <a class="btn btn-outline-primary btn-lg col-md-4" href="{{config('app.url')}}/utilisateur/withdrawall">Faire un rétrait</a>


                <a class="btn btn-primary btn-lg col-md-4" href="{{config('app.url')}}/utilisateur/modify">Upgrader son pack</a>

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
