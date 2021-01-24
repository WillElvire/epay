@component('mail::message')
# Confirmation de compte
Hello Mr/Mme {{$user->firstname}} {{$user->lastname}} votre compte sur Epay a été créer.<br>
Veuillez cliquer sur le lien bouton pour confirmer.

@component('mail::button', ['url' =>  route('confirm.user.account',$user->user_code),'color' => 'green'])
Confirmer
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
