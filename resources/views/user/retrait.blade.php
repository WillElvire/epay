@extends('user/template/index')


@section('container')

      <div class="card">

        <div class="card-header">
         <h1 class="card-title"> <b> Demande de rétrait </b></h1>
        </div>
        <div class="card-body">

            <div class="container">

                <form method="post">

                    @csrf

                    <label style="font-weight:bold">Montant du retrait</label>

                    <input class="form-control" id="montant" type="number">

                    <label style="font-weight:bold" >Moyen de paiement</label>

                    <select class="form-control">
                        <option value="moov">Moov Money</option>
                        <option value="orange">Orange Money</option>
                        <option value="wu">Western Union</option>
                        <option  value="wari">Wari</option>
                        <option value="mtn">MTN money</option>
                    </select>

                    <label style="font-weight:bold">Numéro de la transaction</label>

                    <input class="form-control"  type="number">

                    <span id="text"></span>
                    
                    
                    <br>
                    <div class="alert alert-danger">
                        NB:Veuillez  verifier le numéro saisi
                    </div>
                    <br>

                    

                    <button type="submit" class="btn btn-primary btn-lg">Faire son retrait</button>

                </form>

            </div>


        </div>


      </div>

      
<script>

    var x= document.getElementById('montant');
    var y=document.getElementById('text');
    var getter=0;

    x.addEventListener('keyup',()=>{

         getter=x.value*500;
         y.innerHTML="<div class='alert alert-success'>Vous recevrez  <b class='badge badge-primary'> "+x.value+" $ = "+getter+"  francs cfa </b>  </div>";

         if(x.value==''){
             y.innerHTML="";
         }
    })

</script>

@endsection
