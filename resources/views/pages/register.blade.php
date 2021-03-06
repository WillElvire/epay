
<!DOCTYPE html>
<html lang="en">


@include('pages/partials/inclusion')

<body style="background-image: url(/assets/images/bg/footer-bg.png);background-repeat:no-repeat;background-position:bottom">
    

<section class="register-section pt-20 pb-100" >
    <div class="container">
        <div class="register-box">
            <a class="readon register-btn col-md-2 col-xs-2" href="{{config('app.url')}}/"> Accueil </a>
            <hr>
            <div class="sec-title text-center mb-30">
                <h2 class="title mb-10">Inscription</h2>
            </div>
            
           
            <div class="styled-form">
                <div id="form-messages"></div>
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
<form action="{{ route('register') }}" id="contact-form" method="POST"> 
@csrf
<div class="alert alert-primary text-center">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(224, 37, 37, 1);transform:;-ms-filter:"><path d="M12 22c1.311 0 2.407-.834 2.818-2H9.182C9.593 21.166 10.689 22 12 22zM19 14.586V10c0-3.217-2.185-5.927-5.145-6.742C13.562 2.52 12.846 2 12 2s-1.562.52-1.855 1.258C7.185 4.074 5 6.783 5 10v4.586l-1.707 1.707C3.105 16.48 3 16.734 3 17v1c0 .553.447 1 1 1h16c.553 0 1-.447 1-1v-1c0-.266-.105-.52-.293-.707L19 14.586z"></path></svg>
<b> Si vous disposer d'un code parrain veuillez le renseigner dans le champ parrain
</b>
</div>
<div class="row clearfix">                                    
<div class="form-group col-lg-12 mb-25">
    <input type="text" id="fname" name='parrain_code' value="{{old('parrain_code')}}" placeholder="Code parrain*" >
@error('parrain_code')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

</div>

<div class="form-group col-lg-12 mb-25">
    <input type="text" id="fname" name="firstname" value="{{old('firstname')}}" placeholder="Votre nom" >
 @error('firstname')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

</div>
<div class="form-group col-lg-12 mb-25">
    <input value="{{old('lastname')}}" type="text" id="fname" name="lastname" value="" placeholder="Vore prénom" required>
 @error('lastname')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
</div>

<div class="form-group col-lg-12 mb-25">
    <input type="text" id="fname" name="phone" value="{{old('phone')}}" placeholder="Contact" >
 @error('phone')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

</div>

<div class="form-group col-lg-12 mb-25" >
  <select required name='country' class="form-control-lg col-md-12" name="country" >
<option value="Pays" selected="selected">Votre pays </option>
<option value="France">France </option>
<option value="Afghanistan">Afghanistan </option>
<option value="Afrique_Centrale">Afrique_Centrale </option>
<option value="Afrique_du_sud">Afrique_du_Sud </option>
<option value="Albanie">Albanie </option>
<option value="Algerie">Algerie </option>
<option value="Allemagne">Allemagne </option>
<option value="Andorre">Andorre </option>
<option value="Angola">Angola </option>
<option value="Anguilla">Anguilla </option>
<option value="Arabie_Saoudite">Arabie_Saoudite </option>
<option value="Argentine">Argentine </option>
<option value="Armenie">Armenie </option>
<option value="Australie">Australie </option>
<option value="Autriche">Autriche </option>
<option value="Azerbaidjan">Azerbaidjan </option>

<option value="Bahamas">Bahamas </option>
<option value="Bangladesh">Bangladesh </option>
<option value="Barbade">Barbade </option>
<option value="Bahrein">Bahrein </option>
<option value="Belgique">Belgique </option>
<option value="Belize">Belize </option>
<option value="Benin">Benin </option>
<option value="Bermudes">Bermudes </option>
<option value="Bielorussie">Bielorussie </option>
<option value="Bolivie">Bolivie </option>
<option value="Botswana">Botswana </option>
<option value="Bhoutan">Bhoutan </option>
<option value="Boznie_Herzegovine">Boznie_Herzegovine </option>
<option value="Bresil">Bresil </option>
<option value="Brunei">Brunei </option>
<option value="Bulgarie">Bulgarie </option>
<option value="Burkina_Faso">Burkina_Faso </option>
<option value="Burundi">Burundi </option>

<option value="Caiman">Caiman </option>
<option value="Cambodge">Cambodge </option>
<option value="Cameroun">Cameroun </option>
<option value="Canada">Canada </option>
<option value="Canaries">Canaries </option>
<option value="Cap_vert">Cap_Vert </option>
<option value="Chili">Chili </option>
<option value="Chine">Chine </option>
<option value="Chypre">Chypre </option>
<option value="Colombie">Colombie </option>
<option value="Comores">Colombie </option>
<option value="Congo">Congo </option>
<option value="Congo_democratique">Congo_democratique </option>
<option value="Cook">Cook </option>
<option value="Coree_du_Nord">Coree_du_Nord </option>
<option value="Coree_du_Sud">Coree_du_Sud </option>
<option value="Costa_Rica">Costa_Rica </option>
<option value="Cote_d_Ivoire">Côte_d_Ivoire </option>
<option value="Croatie">Croatie </option>
<option value="Cuba">Cuba </option>

<option value="Danemark">Danemark </option>
<option value="Djibouti">Djibouti </option>
<option value="Dominique">Dominique </option>

<option value="Egypte">Egypte </option>
<option value="Emirats_Arabes_Unis">Emirats_Arabes_Unis </option>
<option value="Equateur">Equateur </option>
<option value="Erythree">Erythree </option>
<option value="Espagne">Espagne </option>
<option value="Estonie">Estonie </option>
<option value="Etats_Unis">Etats_Unis </option>
<option value="Ethiopie">Ethiopie </option>

<option value="Falkland">Falkland </option>
<option value="Feroe">Feroe </option>
<option value="Fidji">Fidji </option>
<option value="Finlande">Finlande </option>
<option value="France">France </option>

<option value="Gabon">Gabon </option>
<option value="Gambie">Gambie </option>
<option value="Georgie">Georgie </option>
<option value="Ghana">Ghana </option>
<option value="Gibraltar">Gibraltar </option>
<option value="Grece">Grece </option>
<option value="Grenade">Grenade </option>
<option value="Groenland">Groenland </option>
<option value="Guadeloupe">Guadeloupe </option>
<option value="Guam">Guam </option>
<option value="Guatemala">Guatemala</option>
<option value="Guernesey">Guernesey </option>
<option value="Guinee">Guinee </option>
<option value="Guinee_Bissau">Guinee_Bissau </option>
<option value="Guinee equatoriale">Guinee_Equatoriale </option>
<option value="Guyana">Guyana </option>
<option value="Guyane_Francaise ">Guyane_Francaise </option>

<option value="Haiti">Haiti </option>
<option value="Hawaii">Hawaii </option>
<option value="Honduras">Honduras </option>
<option value="Hong_Kong">Hong_Kong </option>
<option value="Hongrie">Hongrie </option>

<option value="Inde">Inde </option>
<option value="Indonesie">Indonesie </option>
<option value="Iran">Iran </option>
<option value="Iraq">Iraq </option>
<option value="Irlande">Irlande </option>
<option value="Islande">Islande </option>
<option value="Israel">Israel </option>
<option value="Italie">italie </option>

<option value="Jamaique">Jamaique </option>
<option value="Jan Mayen">Jan Mayen </option>
<option value="Japon">Japon </option>
<option value="Jersey">Jersey </option>
<option value="Jordanie">Jordanie </option>

<option value="Kazakhstan">Kazakhstan </option>
<option value="Kenya">Kenya </option>
<option value="Kirghizstan">Kirghizistan </option>
<option value="Kiribati">Kiribati </option>
<option value="Koweit">Koweit </option>

<option value="Laos">Laos </option>
<option value="Lesotho">Lesotho </option>
<option value="Lettonie">Lettonie </option>
<option value="Liban">Liban </option>
<option value="Liberia">Liberia </option>
<option value="Liechtenstein">Liechtenstein </option>
<option value="Lituanie">Lituanie </option>
<option value="Luxembourg">Luxembourg </option>
<option value="Lybie">Lybie </option>

<option value="Macao">Macao </option>
<option value="Macedoine">Macedoine </option>
<option value="Madagascar">Madagascar </option>
<option value="Madère">Madère </option>
<option value="Malaisie">Malaisie </option>
<option value="Malawi">Malawi </option>
<option value="Maldives">Maldives </option>
<option value="Mali">Mali </option>
<option value="Malte">Malte </option>
<option value="Man">Man </option>
<option value="Mariannes du Nord">Mariannes du Nord </option>
<option value="Maroc">Maroc </option>
<option value="Marshall">Marshall </option>
<option value="Martinique">Martinique </option>
<option value="Maurice">Maurice </option>
<option value="Mauritanie">Mauritanie </option>
<option value="Mayotte">Mayotte </option>
<option value="Mexique">Mexique </option>
<option value="Micronesie">Micronesie </option>
<option value="Midway">Midway </option>
<option value="Moldavie">Moldavie </option>
<option value="Monaco">Monaco </option>
<option value="Mongolie">Mongolie </option>
<option value="Montserrat">Montserrat </option>
<option value="Mozambique">Mozambique </option>

<option value="Namibie">Namibie </option>
<option value="Nauru">Nauru </option>
<option value="Nepal">Nepal </option>
<option value="Nicaragua">Nicaragua </option>
<option value="Niger">Niger </option>
<option value="Nigeria">Nigeria </option>
<option value="Niue">Niue </option>
<option value="Norfolk">Norfolk </option>
<option value="Norvege">Norvege </option>
<option value="Nouvelle_Caledonie">Nouvelle_Caledonie </option>
<option value="Nouvelle_Zelande">Nouvelle_Zelande </option>

<option value="Oman">Oman </option>
<option value="Ouganda">Ouganda </option>
<option value="Ouzbekistan">Ouzbekistan </option>

<option value="Pakistan">Pakistan </option>
<option value="Palau">Palau </option>
<option value="Palestine">Palestine </option>
<option value="Panama">Panama </option>
<option value="Papouasie_Nouvelle_Guinee">Papouasie_Nouvelle_Guinee </option>
<option value="Paraguay">Paraguay </option>
<option value="Pays_Bas">Pays_Bas </option>
<option value="Perou">Perou </option>
<option value="Philippines">Philippines </option>
<option value="Pologne">Pologne </option>
<option value="Polynesie">Polynesie </option>
<option value="Porto_Rico">Porto_Rico </option>
<option value="Portugal">Portugal </option>

<option value="Qatar">Qatar </option>

<option value="Republique_Dominicaine">Republique_Dominicaine </option>
<option value="Republique_Tcheque">Republique_Tcheque </option>
<option value="Reunion">Reunion </option>
<option value="Roumanie">Roumanie </option>
<option value="Royaume_Uni">Royaume_Uni </option>
<option value="Russie">Russie </option>
<option value="Rwanda">Rwanda </option>

<option value="Sahara Occidental">Sahara Occidental </option>
<option value="Sainte_Lucie">Sainte_Lucie </option>
<option value="Saint_Marin">Saint_Marin </option>
<option value="Salomon">Salomon </option>
<option value="Salvador">Salvador </option>
<option value="Samoa_Occidentales">Samoa_Occidentales</option>
<option value="Samoa_Americaine">Samoa_Americaine </option>
<option value="Sao_Tome_et_Principe">Sao_Tome_et_Principe </option>
<option value="Senegal">Senegal </option>
<option value="Seychelles">Seychelles </option>
<option value="Sierra Leone">Sierra Leone </option>
<option value="Singapour">Singapour </option>
<option value="Slovaquie">Slovaquie </option>
<option value="Slovenie">Slovenie</option>
<option value="Somalie">Somalie </option>
<option value="Soudan">Soudan </option>
<option value="Sri_Lanka">Sri_Lanka </option>
<option value="Suede">Suede </option>
<option value="Suisse">Suisse </option>
<option value="Surinam">Surinam </option>
<option value="Swaziland">Swaziland </option>
<option value="Syrie">Syrie </option>

<option value="Tadjikistan">Tadjikistan </option>
<option value="Taiwan">Taiwan </option>
<option value="Tonga">Tonga </option>
<option value="Tanzanie">Tanzanie </option>
<option value="Tchad">Tchad </option>
<option value="Thailande">Thailande </option>
<option value="Tibet">Tibet </option>
<option value="Timor_Oriental">Timor_Oriental </option>
<option value="Togo">Togo </option>
<option value="Trinite_et_Tobago">Trinite_et_Tobago </option>
<option value="Tristan da cunha">Tristan de cuncha </option>
<option value="Tunisie">Tunisie </option>
<option value="Turkmenistan">Turmenistan </option>
<option value="Turquie">Turquie </option>

<option value="Ukraine">Ukraine </option>
<option value="Uruguay">Uruguay </option>

<option value="Vanuatu">Vanuatu </option>
<option value="Vatican">Vatican </option>
<option value="Venezuela">Venezuela </option>
<option value="Vierges_Americaines">Vierges_Americaines </option>
<option value="Vierges_Britanniques">Vierges_Britanniques </option>
<option value="Vietnam">Vietnam </option>

<option value="Wake">Wake </option>
<option value="Wallis et Futuma">Wallis et Futuma </option>

<option value="Yemen">Yemen </option>
<option value="Yougoslavie">Yougoslavie </option>

<option value="Zambie">Zambie </option>
<option value="Zimbabwe">Zimbabwe </option>

</select>
@error('country')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

</div>
                        
                        <!-- Form Group -->
                     
                        
                        <!-- Form Group -->
                        <div class="form-group col-lg-12">
                            <input type="email" id="email" name="email" value="{{old('email')}}" placeholder="Email" required>
                            @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                        </div>
                        
                        <!-- Form Group -->

                        <div class="form-group col-lg-12">
                            <select name='sexe'  class="form-control-lg col-md-12">
                                <option value="">Genre</option>
                                <option value="M">Masculin</option>
                                <option value="F">Féminin</option>
                            </select>
                             @error('sexe')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
       
                        <!-- Form Group -->
                        <div class="form-group col-lg-12">
                            <input name='password' type="password" id="Username" name="password" value="" placeholder="Mot de passe" required>
                             @error('password')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>    
                        <!-- Form Group -->
                        <div class="form-group col-lg-12">
                            <input type="password" id="Username" name="password_confirmation" value="" placeholder="Confirmer Mot de passe" required>
                             @error('password_confirmation')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                            <div class="row clearfix">
                                <!-- Column -->
                                <div class="column col-lg-3 col-md-4 col-sm-12">
                                    <div class="radio-box">
                                        <input type="radio" name="remember-password" id="type-1"> 
                                    </div>
                                </div>
                                <!-- Column -->
                                <div class="column col-lg-3 col-md-4 col-sm-12">
                                    <div class="radio-box">
                                        <input type="radio" name="remember-password" id="type-2"> 
                                    </div>
                                </div>
                                <!-- Column -->
                                <div class="column col-lg-3 col-md-4 col-sm-12">
                                    <div class="radio-box">
                                        <input type="radio" name="remember-password" id="type-3"> 
                                    </div>
                                </div>
                                <!-- Column -->
                                <div class="column col-lg-12 col-md-12 col-sm-12">
                                    <div class="check-box">
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group col-lg-12 col-md-12 col-sm-12 text-center">
                            <button type="submit" class="readon register-btn"><span class="txt">S'inscrire</span></button>
                        </div>
                        
                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                            <div class="users">Avez vous deja un compte ? <a href="{{config('app.url')}}/auth">S'authentifier</a></div>
                        </div>
                        
                    </div>
                    
                </form>
            </div>
            
        </div>
    </div>
</section>

</body>
</html>