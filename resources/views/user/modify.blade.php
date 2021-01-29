@extends('user/template/index')
@section('container')


<br>
<div class=" col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4>Modifier mes informations</h4>
        <hr>

        
       
        <form class="forms-sample">
         <b><div class="form-group">
            <label for="exampleInputName1">Nom :</label>
            <input type="text" class="form-control" id="exampleInputName1" placeholder="Name">
          </div>

          <div class="form-group">
            <label for="exampleInputName1">Prénom :</label>
            <input type="text" class="form-control" id="exampleInputName1" placeholder="Name">
          </div>

          <div class="form-group">
            <label for="exampleInputName1">Numéro de telephone :</label>
            <input type="text" class="form-control" id="exampleInputName1" placeholder="Name">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail3">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword4">Mot de passe</label>
            <input type="password" class="form-control" id="exampleInputPassword4" placeholder="Password">
          </div>

        </b> 
         
         
          
          <br>
          
          <button type="submit" class="btn btn-primary mr-5 btn-lg">Modifier mes informations</button>
          
        </form>
      </div>
    </div>
  </div>

@stop