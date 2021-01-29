@extends('user/template/index')
@section('container')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Historiques d'investissements</h6>
        
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Numéro de compte</th>
                        <th>Moyen de paiement</th>
                        <th>Pack</th>
                        <th>Montant à recevoir</th>
                        <th>date de reception de fond</th>
                        <th>date d'ouverture de compte</th>
                    </tr>
                </thead>
                
                <tbody>

                    @foreach($transaction as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td ><b class="badge badge-primary">{{$user->payment_type}} </b></td>
                        <td>{{$user->pack}} $</td>
                       
                        <td>{{$user->retour_sur_investissement}} $</td>
                        <td>{{$user->date_de_reception_de_fond}}</td>

                        <td>{{$user->created_at}}</td> </b>
                        
                    </tr>
                    @endforeach

                    
                    
                
                    
                    
                </tbody>
                <div class="container text-center">
                    {{$transaction->links()}}
                </div>
            </table>
        </div>
    </div>
</div>

</div>


@stop