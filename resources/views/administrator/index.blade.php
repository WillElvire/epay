@extends('administrator/template/index')
@section('container')
    
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>

<!-- Content Row -->
<div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                           Nombres d'inscrits</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$inscrit->count()}}</div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Demande d'inscription</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$demande->count()}}</div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Demande de retrait
                        </div>
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">4</div>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            Révenu nette</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$revenu}} Fcfa</div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<hr>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <a class="btn btn-primary" href="{{config('app.url')}}/administrateur/utilisateur/inscrits" style="width: 18rem;">
               
                <div class="card-body">
                  <p class="card-text">Voir les inscrits</p>
                </div>
            </a>
              
        </div>

        <div class="col-md-4">
            <a class="btn btn-primary" href="{{config('app.url')}}/administrateur/demande" style="width: 18rem;">
               
                <div class="card-body">
                  <p class="card-text">Demande d'inscription</p>
                </div>
            </a>
              
        </div>

        <div class="col-md-4">
            <a class="btn btn-primary" href="{{config('app.url')}}/administrateur/demande/retraits" style="width: 18rem;">
               
                <div class="card-body">
                  <p class="card-text">Demande de retrait</p>
                </div>
            </a>
              
        </div>
    </div>
</div>
<hr>
</div>
@endsection