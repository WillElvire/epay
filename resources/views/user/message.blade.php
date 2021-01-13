@extends('user/template/index')
@section('container')
    <div class="card">
        <div class="card-body">
            <h4>Messages <b class="badge badge-primary"> 2 </b></h4>
            <hr>
            <ul class="list-group">
                <li class="list-group-item active">Text</li>
                <li class="list-group-item disabled" aria-disabled="true">Disabled item</li>
            </ul>
            <hr>
            <div class="row">

                <a href="" class="btn btn-primary col-md-4 btn-lg"> Supprimer</a>

            </div>
        </div>
    </div>
@endsection