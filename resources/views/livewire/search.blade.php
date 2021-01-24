<div>
   <form wire:model="query"class="form-group"> 
   	 <input type="text" wire:model='query' class="form-control" placeholder="entrez les informations de la personne recherchée">
   </form>
     <hr>
	@if(strlen($query) >=2)
	@if(count($q) > 0)
	@foreach($q as $item)
    <div class="card"  tabindex="-1"   aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Information  du relative à (client)</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <p>Nom : <b class="badge badge-primary">{{$item->firstname}}</b></p>
            <p>Prenom : <b class="badge badge-primary">{{$item->lastname}}</b></p>
            <p>Numéro : <b class="badge badge-primary">{{$item->phone}}</b></p>
        
           
            <p>Pay  : <b class="badge badge-primary">{{$item->country}}</b></p>
  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Supprimer le profil</button>
          <a type="button" class="btn btn-success"  href="{{ route('admin.user',$item->user_code) }}">Voir plus</a>
        </div>
      </div>
    </div>
  </div> 
  @endforeach
    @else
       <div style="width: 100%; display: block;" class="alert alert-danger">O resultat pour "{{ $query }}"</div>
  @endif
  @endif
</div>
