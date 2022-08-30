<!-- SNACK 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa 
e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->
<?php 
$matches = [
    ['home_team'=>'Olimpia Milano',
    'away_team'=> 'Cantù',
    'score'=>'55-60',],
    ['home_team'=>'Virtus Bologna',
    'away_team'=> 'Vanoli Cremona',
    'score'=>'72-76',],
    ['home_team'=>'Napoli Basket',
    'away_team'=> 'Fortitudo Bologna',
    'score'=>'70-80',],
    ['home_team'=>'Pall. Varese',
    'away_team'=> 'Pall. Trieste',
    'score'=>'77-95',],
  ];
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <style>
    span{
        color:red
    }
 </style>
 <body>
    <?php for ($i=0; $i < count($matches); $i++) {  ?>
    <ul>
        <li><span>SQUADRA DI CASA: </span> <?php echo $matches[$i]['home_team'] ?></li>
        <li><span>SQUADRA OSPITE: </span> <?php echo $matches[$i]['away_team'] ?></li>
        <li><span>SCORE: </span> <?php echo $matches[$i]['score'] ?></li>
    </ul>
    <?php } ?>
 </body>

 </html>