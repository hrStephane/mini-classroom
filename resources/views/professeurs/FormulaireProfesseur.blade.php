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
        <input type="text" name="NomProfesseur" id="">
        <label for="">Prenom</label>
        <input type="text" name="PrenomProfesseur" placeholder="Prenom">
        <label for="">Email</label>
        <input type="email" name="EmailProfesseur" placeholder="email">
        <input type="password" name="MotDePasseProfesseur" placeholder="mot de passe">
        <input type="submit" value="Enregitrer">
        <button type="submit"></button>


    </form>
</body>
</html>
