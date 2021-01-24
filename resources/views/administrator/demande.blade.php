@extends('administrator/template/index')
@section('container')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Demande d'inscription</h6>
        @if(session()->has('success'))
           <div class="alert alert-success">
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
                      
                        <th>date d'ouverture de compte</th>
                        <th>Option</th>
                    </tr>
                </thead>
                
                <tbody>

                    @foreach($users as $user)
                    <tr>
                        <td>{{$user->user_code}}</td>
                        <td><a href="{{config('app.url')}}/admin/profil/5">{{$user->fisrtname}}</a></td>
                        <td>{{$user->lastname}}</td>
                        <td>{{$user->email}}</td>
                      
                        <td>{{$user->created_at->diffForHumans()}}</td>
                        <td>
                            <div class="btn btn-group">
                                <a href="{{ route('demande',['type' => 'allow','id' => $user->user_code]) }}" class="btn btn-success">
                                    confirmer
                                 </a>
                                <a class="btn btn-danger" href="{{ route('demande',['type' => 'delete','id' => $user->user_code]) }}">
                                   x
                                </a>
                                
                            </div>
                        </td>
                    </tr>
                    @endforeach
                    <div class="container">
                        {{$users->links()}}
                    </div>

                 
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
@endsection