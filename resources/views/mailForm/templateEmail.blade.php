@component('mail::message')

<h2>On vous remerci pour votre inscription</h2>
    <h2>Bienvenue sur Notre Site</h2>

@component('mail::button', ['url' => '/'])

<a>Cliquer ici pour accéder au site !</a>

@endcomponent

Copyright zainab, <br>
{{config('app.name')}}

<h2>On vous remerci pour votre inscription</h2>
<h2>Bienvenue sur Notre Site</h2>

<p>Voici vos informations</p>
<p>votre nom :{{$mailForm->name}}</p>
<p>votre nom :{{$mailForm->prenom}}</p>
<p>votre email:{{$mailForm->email}}</p>
<p>Dorénavant , vous pourrez vous connecter avec ses identifiant suivant:</p>
<p>Identifiant: {{$mailForm->email}}</p>
<p>Mot de passe: {{$mailForm->password}}</p>

@endcomponent



