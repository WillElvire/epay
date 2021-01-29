@extends('administrator/template/index')
@section('container')



<!-- Modal -->
<div>
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Information  du rétrait</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
          <p>Nom : <b class="badge badge-primary">{{$profil->firstname}}</b></p>
          <p>Prenom : <b class="badge badge-primary">{{$profil->lastname}}</b></p>
          <p>Opérateur choisi : <b class="badge badge-primary">{{$retrait->payement_type}} </b> </p>
          <p>Numéro sur lequel effectué la transaction : <b class="badge badge-primary">{{$retrait->number_of_payment}}</b></p>
          <p>Date de demande : <b class="badge badge-primary">{{$retrait->created_at}}</b></p>
          <p>Montant à recevoir :  <b class="badge badge-primary">{{$retrait->money*500}} francs cfa</b></p>
          <p>Pay du receveur : <b class="badge badge-primary">{{$profil->country}}</b></p>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Supprimer la demande</button>
        <button type="button" class="btn btn-success">Confirmer la demande</button>
      </div>
    </div>
  </div>
</div>

@stop