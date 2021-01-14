@extends('administrator/template/index')
@section('container')
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Liste de tout les inscrits</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Numéro de compte</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Email</th>
                        <th>Nombre de filleul</th>
                        <th>date d'ouverture de compte</th>
                        <th>Option</th>
                    </tr>
                </thead>
                
                <tbody>
                    <tr>
                        <td>X50020</td>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td>
                            <div class="btn btn-group">
                                <a class="btn btn-primary" href="{{config('app.url')}}/admin/profil/2">
                                    profil
                                 </a>
                                <a class="btn btn-danger">
                                   x
                                </a>
                                
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>X50020</td>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td>
                            <div class="btn btn-group">
                                <a class="btn btn-primary" href="{{config('app.url')}}/admin/profil/2">
                                    profil
                                 </a>
                                <a class="btn btn-danger">
                                   x
                                </a>
                                
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>X50020</td>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td>
                            <div class="btn btn-group">
                                <a class="btn btn-primary" href="{{config('app.url')}}/admin/profil/2">
                                    profil
                                 </a>
                                <a class="btn btn-danger">
                                   x
                                </a>
                                
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>X50020</td>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td>
                            <div class="btn btn-group">
                                <a class="btn btn-primary" href="{{config('app.url')}}/admin/profil/2">
                                    profil
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
@endsection