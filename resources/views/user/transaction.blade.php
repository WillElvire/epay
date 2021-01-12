@extends('user/template/index')

@section('container')
  <div class="card">
      <div class="card-body">
          
        <form method="post">

            <h1>Investir</h1>
            <hr>

         <b> <label>choisissez votre pack</label>
          <select class="form-control" id="scroll">
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
          <select class="form-control">
            <option>Orange Money</option>
            <option>Moov Money</option>
            <option>MTN Money</option> 
        </select>

        </b>
        <span id="text"></span>
        <hr>

        <button class="btn btn-primary btn-lg"> Valider ma transaction</button>


        </form>
      </div>
  </div> 

  <script>
      var x=document.getElementById('scroll');
      var y=document.getElementById('text');
      var render=0;
      x.addEventListener('click',()=>{
          render=x.value*540;
          y.innerHTML="<div class='alert alert-success'><b>Vous devez faire la transaction de "+render+" Francs cfa </b></div>"
      })    
  </script>
@endsection