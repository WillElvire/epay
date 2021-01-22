@extends('user/template/index')


@section('container')

      <div class="card">

        <div class="card-header">
         <h1 class="card-title"> <b> Demande de rétrait </b></h1>
        </div>
        <div class="card-body">

        @livewire('create-retrait')


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
