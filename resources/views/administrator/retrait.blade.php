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
                        <th>Nom & Prénoms</th>
                       
                      
                        <th>Montant</th>
                        
                        <th>Numéro du receveur</th>
                        <th>Option</th>
                        <th>Date de demande</th>
                    </tr>
                </thead>
                
                <tbody>

                  @foreach($retraits as $retrait)
                    <tr>
                       
                        <td>{{$retrait->user->user_code}}</td>
                        <td>{{$retrait->user->firstname}} {{$retrait->user->lastname}}</td>
                        <td>{{$retrait->money*500}} F CFA</td>
                        <td>{{$retrait->number_of_payment}}</td>
                        <td>{{$retrait->created_at->diffForHumans()}}</td>

                        <td>
                            <div class="btn btn-group">
                                <a class="btn btn-success"  href="/administrateur/demande/retraits/{{$retrait->id}}">voir +
                                 </a>
                                <a class="btn btn-danger">
                                   x
                                </a>
                                
                            </div>
                        </td>
                    </tr>
                    @endforeach

                   

                    

                   
                    
                
                    
                    
                </tbody>
            </table>
        </div>
    </div>
</div>


</div>






@endsection