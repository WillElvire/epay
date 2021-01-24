<div>
        <div class="container">
        	   @if(session()->has('success'))
		           <div class="alert alert-success text-center">
		              {{session()->get('success')}}
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
