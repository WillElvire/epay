@extends('administrator/template/index')

@section('container')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Demande de retrait</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Numéro de compte</th>
                        <th>Nom</th>
                       
                      
                        <th>Montant</th>
                        <th>Option</th>
                    </tr>
                </thead>
                
                <tbody>
                    <tr>
                        <td>X50020</td>
                        <td><a href="{{config('app.url')}}/admin/profil/5">Tiger Nixon</a></td>
                        <td>50 $</td>
                        <td>
                            <div class="btn btn-group">
                                <a class="btn btn-success"  data-toggle="modal" data-target="#exampleModal">
                                    +
                                 </a>
                                <a class="btn btn-danger">
                                   x
                                </a>
                                
                            </div>
                        </td>
                    </tr>

                   

                    

                   
                    
                
                    
                    
                </tbody>
            </table>
        </div>
    </div>
</div>


</div>





<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Information  du rétrait</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <p>Nom : <b class="badge badge-primary">Koua</b></p>
          <p>Prenom : <b class="badge badge-primary">Prenom</b></p>
          <p>Opérateur choisi : <b class="badge badge-primary">Orange </b> </p>
          <p>Numéro sur lequel effectué la transaction : <b class="badge badge-primary">+22685985112</b></p>
          <p>Date de demande : <b class="badge badge-primary">25/04/12</b></p>
          <p>Montant à recevoir :  <b class="badge badge-primary">50000 francs cfa</b></p>
          <p>Pay du receveur : <b class="badge badge-primary">Burkina fasso</b></p>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Supprimer la demande</button>
        <button type="button" class="btn btn-success">Confirmer la demande</button>
      </div>
    </div>
  </div>
</div>

@endsection