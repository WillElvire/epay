@extends('administrator/template/index')

@section('container')
    
<input type="text" class="form-control" placeholder="entrez les informations de la personne recherchée">
<hr>
<div class="card" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Information  du relative à (client)</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <p>Nom : <b class="badge badge-primary">Koua</b></p>
          <p>Prenom : <b class="badge badge-primary">Prenom</b></p>
          <p>Tonneaux : <b class="badge badge-primary">50$ </b> </p>
          <p>Numéro : <b class="badge badge-primary">+22685985112</b></p>
      
         
          <p>Pay  : <b class="badge badge-primary">Burkina fasso</b></p>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Supprimer le profil</button>
        <a type="button" class="btn btn-success"  href="{{config('app.url')}}/admin/profil/4">Voir plus</a>
      </div>
    </div>
  </div>
</div> 

<div class="card" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Information  du relative à (client)</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <p>Nom : <b class="badge badge-primary">Koua</b></p>
            <p>Prenom : <b class="badge badge-primary">Prenom</b></p>
            <p>Tonneaux : <b class="badge badge-primary">50$ </b> </p>
            <p>Numéro : <b class="badge badge-primary">+22685985112</b></p>
        
           
            <p>Pay  : <b class="badge badge-primary">Burkina fasso</b></p>
  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Supprimer le profil</button>
          <a type="button" class="btn btn-success"  href="{{config('app.url')}}/admin/profil/4">Voir plus</a>
        </div>
      </div>
    </div>
  </div> 
       
@endsection