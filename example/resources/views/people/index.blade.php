<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Laravel - ListPeople</title>
</head>
<body>
  @foreach($people as $p)
    <p>ID: {{$p->id}}</p> 
    <p>Nome: {{$p->nome}}</p>

  @foreach($p->showTelephonePeople as $tel)
    <p>(DDD): {{$tel->ddd}}</p>
    <p>Telefone: {{$tel->phone_number}}</p>
  @endforeach

  @endforeach

</body>
</html>