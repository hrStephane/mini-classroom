<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajout Prof</title>
</head>
<body>
    <form action="{{route('SauvegarderProfesseur')}}" method="post">
    @csrf
        <label for="NomProfesseur">Nom</label>
        <input type="text" name="NomProfesseur" id="" value="{{$prof->NomProfesseur}}">
        <label for="">Prenom</label>
        <input type="text" name="PrenomProfesseur" placeholder="Prenom" value="{{$prof->PrenomProfesseur}}">
        <label for="">Email</label>
        <input type="email" name="EmailProfesseur" placeholder="email" value="{{$prof->EmailProfesseur}}">
        <label for="">Mot de passe</label>
        <input type="password" name="MotDePasseProfesseur" placeholder="mot de passe" value="{{$prof->MotDePasseProfesseur}}">

        <button type="submit" class="btn btn-primary" value="Enregistrer"></button>

    </form>

</body>
</html>
