@extends('user/template/index')

@section('container')
 @livewire('create-transaction')

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