<style>
    .card {
        border-radius: 50px;  
    }
    .card .card-body h2{
        color:red;
        font-weight: bold;
        font-size: 38px;
    }
    .card p{
        color:black;
        font-size: 20px;
    }
    .card .jours{
        font-size: 100px;
        font-weight: bold;
        color:red;
    }
    .error p{
        color:red;  
        font-size: 30px;
    }
    .form-control{
      height:50px;
      border-radius: 50px;
    }
    .btn {
      border-radius: 50px;
    }
    .alert-success{
      border-radius: 50px;
    }
  </style>
<div>

    
        <div class="container">
        	   @if(session()->has('success'))
		           <div class="alert alert-success text-center">
		              {{session()->get('success')}}
		           </div>
                @endif
                
                @if(session()->has('danger'))
		           <div class="alert alert-danger text-center">
		              {{session()->get('danger')}}  <b class="badge badge-danger"> Solde : {{$money_information->montant_a_recevoir/500}} $ </b>
		           </div>
                @endif
                
                

                <form method="post">

                    @csrf

                    <label style="font-weight:bold">Montant du retrait</label>

                    <input wire:model='money' class="form-control" id="montant" type="number">

                    <label style="font-weight:bold" >Moyen de paiement</label>

                    <select wire:model='payement_type' class="form-control">
                        <option value="moov">Moov Money</option>
                        <option value="orange">Orange Money</option>
                        <option value="wu">Western Union</option>
                        <option  value="wari">Wari</option>
                        <option value="mtn">MTN money</option>
                    </select>

                    <label style="font-weight:bold">Numéro de la transaction</label>

                    <input wire:model='number_of_payement' class="form-control"  type="number">

                    <span id="text"></span>
                    
                    
                    <br>
                    <div class="alert alert-danger mt-4">
                        NB:Veuillez  verifier le numéro saisi
                    </div>
                    <br>

                    <button type="submit" wire:click.prevent= 'storeRetrait()' class="btn btn-primary btn-lg">Faire son retrait</button>

                </form>

            </div>
</div>
