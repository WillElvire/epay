<div>
 <div class="card">
      <div class="card-body">
          
          <form method="post">

            <h1>Investir</h1>
              @if(session()->has('success'))
		           <div class="alert alert-success text-center">
		              {{session()->get('success')}}
		           </div>
		           @endif
            <hr>

         <b> <label>choisissez votre pack</label>
          <select wire:model.lazy='money' class="form-control" id="scroll">
              <option value="" selected>choisissez votre pack</option>
              <option value="50">50 $</option>
              <option value="100">100 $</option>
              <option value="150">150 $</option>
              <option value="200">200 $</option>
              <option value="370">370 $</option>
              <option value="1000">1000 $</option>
              <option value="2000">2000 $</option>
              <option value="4000">4000 $</option>
              <option value="10000">10000 $</option>
          </select>
          
          <label>Moyen de paiement</label>
          <select wire:model.lazy='type_of_transaction' class="form-control">
            <option value="" selected>choisissez votre moyen de payement</option>
            <option>Orange Money</option>
            <option>Moov Money</option>
            <option>MTN Money</option> 
        </select>

        </b>
        <span id="text"></span>
        <hr>

        <button class="btn btn-primary btn-lg" wire:click.prevent='storeTransaction()'> Valider ma transaction</button>
        </form>
      </div>
  </div> 
</div>
