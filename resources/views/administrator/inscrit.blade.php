@extends('administrator/template/index')
@section('container')
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Liste de tout les inscrits</h6>
        @if(session()->has('success'))
            <div class="alert alert-success text-center">
                {{session()->get('success')}}
            </div>
        @endif
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

                    @foreach($users as $user)
                    <tr>
                        <td>{{$user->user_code}}</td>
                        <td>{{$user->firstname}}</td>
                        <td>{{$user->lastname}}</td>
                        <td>{{$user->email}}</td>
                        <td>0</td>
                        <td>{{$user->created_at->diffForHumans()}}</td>
                        <td>
                            <div class="btn btn-group">
                                <a class="btn btn-primary" href="{{ route('admin.user',$user->user_code) }}">
                                    profil
                                 </a>
                                <a class="btn btn-danger" href="{{ route('admin.delete.user',$user->user_code) }}">
                                   x
                                </a>
                                
                            </div>
                        </td>
                    </tr>
                    @endforeach

                    
                    
                
                    
                    
                </tbody>
                <div class="container text-center">
                    {{$users->links()}}
                </div>
            </table>
        </div>
    </div>
</div>

</div>
@endsection