<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
  <link rel="stylesheet" href="{{asset("css/app.css")}}">
</head>
<body style="background: white;">
    <div class='container mx-auto' style="background: #bdc3c7;  /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #2c3e50, #bdc3c7);  /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, #2c3e50, #bdc3c7); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    ">
    <div style="color: white">
    <h2>On vous remerci pour votre inscription</h2>
    <h2>Bienvenue sur Notre Site</h2>
    <a href="{{route('welcome')}}">Cliquer ici pour accéder au site !</a>
    <p>Voici vos informations</p>
    <p>votre nom :{{$mailForm->name}}</p>
    <p>votre nom :{{$mailForm->prenom}}</p>
    <p>votre email:{{$mailForm->email}}</p>
    <p>Dorénavant , vous pourrez vous connecter avec ses identifiant suivant:</p>
    <p>Identifiant: {{$mailForm->email}}</p>
    <p>Mot de passe: {{$mailForm->password}}</p>
    <h3>A trés bientôt sur notre site !</h3>
    <p>Nos salutions les plus sincére</p>
</div>
</div>



<script src="{{asset('js/app.js')}}"></script>


</body>
</html>