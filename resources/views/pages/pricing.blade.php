@extends('welcome')

@section('container')

        <div class="main-content">
            
            <div class="rs-breadcrumbs breadcrumbs-overlay">
                <div class="breadcrumbs-img">
                    <img src="assets/images/new/first.jpg" alt="Breadcrumbs Image">
                </div>
                <div class="breadcrumbs-text white-color">
                    <h1 class="page-title">TABLE DES PRIX</h1>
                    <ul>
                        <li>
                            <a class="active" href="{{config('app.urk')}}">Accueil</a>
                        </li>
                        <li>Pricing</li>
                    </ul>
                </div>
            </div>
                
            
            <div class="container pt-70">

               
                <div class="card-deck mb-3 text-center">
                  <div class="card mb-4 box-shadow">
                    <div class="card-header readon register-btn">
                      <h4 class="my-0 font-weight-normal text-light">Particulier</h4>
                    </div>
                    <div class="card-body">
                      <h2 class="card-title pricing-card-title">50$ - 370 $</h2>
                      <ul class="list-unstyled mt-3 mb-4">
                       <br>
                       <br> 
                        
                      </ul>
                      <a type="button" class="readon register-btn" href="{{config('app.url')}}/register">Adherer</a>
                    </div>
                  </div>
                  <div class="card mb-4 box-shadow">
                    <div class="card-header">
                      <h4 class="my-0 font-weight-normal ">Investisseur</h4>
                    </div>
                    <div class="card-body">
                      <h2 class="card-title pricing-card-title">1000 $ - 4000 $</h2>
                      <ul class="list-unstyled mt-3 mb-4">
                        <br>
                        <br> 
                      </ul>
                      <a type="button" class="readon register-btn" href="{{config('app.url')}}/register">Adherer</a>
                    </div>
                  </div>
                  <div class="card mb-4 box-shadow">
                    <div class="card-header readon register-btn">
                      <h4 class="my-0 font-weight-normal text-light">Enterprise</h4>
                    </div>
                    <div class="card-body">
                      <h2 class="card-title pricing-card-title">10000$ </h2>
                      <ul class="list-unstyled mt-3 mb-4">
                        <br>
                       <br> 
                      </ul>
                      <a class="readon register-btn" href="{{config('app.url')}}/register"> Adherer</a>
                    </div>
                  </div>
                </div>
               
                
            </div>

          
@stop
            