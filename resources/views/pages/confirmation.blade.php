<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name')}}</title>
    @include('pages/partials/inclusion')
</head>
<body >
    <section class="register-section pt-120 pb-100" >
        <div class="container">
            <div class="register-box">
                
               
                <div class="styled-form">
                    <div id="form-messages"></div>
                    
    
                          
                           
                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                <img  class="row justify-content-center" src="/assets/images/fav-orange.png">
                                <hr>
                                <div class="row clearfix">
                                  
                                  
                                        @if(session()->has('good'))
                                        <div class="alert alert-success">
                                            {{session()->get('good')}}
                                            <a href="/transaction" class="btn btn-dark"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:"><path d="M18 6H20V18H18zM4 13L12.586 13 8.293 17.293 9.707 18.707 16.414 12 9.707 5.293 8.293 6.707 12.586 11 4 11z"></path></svg></a>
                                        </div>
                                        @endif
                                  

                                    <hr>


                                  
                                  
                                   
                                </div>
                            </div>
                            
                            
                            
</body>
</html>