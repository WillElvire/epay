<div>

    <style>

        .card {
            border-radius: 50px;
           
        }

        .card .card-body h2{
            color:red;
            font-weight: bold;
            font-size: 38px;
        }

        .card p{
            color:black;
            font-size: 20px;
        }

        .card .jours{
            font-size: 100px;
            font-weight: bold;
            color:red;
        }
        .error p{
            color:red;
            
            font-size: 30px;
        }
    </style>

    <div class="container">
        @if($money!=null && $user->status!=0)
        <div class="row">
            <div class="card  col-md-4 ">
                <div class="card-body">
                     <div class="row">
                        <div class="col-md-6">
                            <img src="/assets\images\courses\style2\1.png" class="img-fluid">
                        </div>
                        <div class="col-md-6">
                            <p style="font-weight:bold">Mon solde</p>
                            <h2>{{$money->money_actual ?? 0}} $</h2>
                        </div>
                     </div>
                </div>
            </div>
            <div class="card col-md-4">
                 <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="/assets\images\courses\style2\3.png" class="img-fluid">
                        </div>
                        <div class="col-md-6">
                            <p style="font-weight:bold">Montant investit</p>
                            <h2>{{$money->money_investit/540 ?? 0}} $</h2>
                        </div>
                     </div>
                 </div>
            </div>
            <div class="card col-md-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="/assets\images\courses\style2\2.png" class="img-fluid">
                        </div>
                        <div class="col-md-6">
                            <p style="font-weight:bold">Montant à recevoir</p>
                            <h2>{{$money->montant_a_recevoir/500 ?? 0}} $</h2>
                        </div>
                     </div>
                </div>
            </div>
        </div>

        <hr>

        <div class="container">

                <p style="font-family:sans-serif;font-size:18px">Information sur le temps</p>

                <div class="row">
                    <div class="card col-md-6">
                        <div class="card-body">
                            <div style="width:auto;">
                                {!! $chartjs->render() !!}
                            </div>
                        </div>
                    </div>
                    
                    <div class=" card col-md-6">
                       
                        <div class="card-body">
                            <div  style="width:auto;">
                                <h1 class="row justify-content-center jours">{{$restant}}</h1>
                                <p class="row justify-content-center"> jours restant</p>
                            </div>
                        </div>
                    </div>
               </div>
               <hr>
               <div class="card">
                    <div class="card-body">
                        <div style="width:auto;">
                            {!! $chartjs->render() !!}
                        </div>
                    </div>
               </div>
        </div>

        @else
                <div class="card col-md-12 error">
                    <div class="card-body">

                            <div class="row">
                                <div class="col-md-4 ">
                                    <img src="/assets\images\banner\bnr3-top.png" class=" row justify-content-center img-fluid">
                                </div>
                                <div class="col-md-6 row justify-content-center">
                                        <p>vous devez effectuer votre investissement</p> 
                                </div>

                            </div>
                            
                            <a class="btn btn-outline-primary btn-lg justify-content-center" href="/utilisateur/transaction">Faire son investissement</a>
                    </div>
                </div>

        @endif

</div>


</div>