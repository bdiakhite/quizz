<?php
  require_once('./createForm.php');
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./style.css">
    <link rel="icon" href="./basketball.png">
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
    <title>Mon Questionnaire</title>
  </head>
  <body>
    <?php
    /*
      echo openForm('./monScript.php');
      echo createSelect("country", "chousissez un pays", [
        [
          "value" => "es",
          "content" => "Espagne",
        ],
        [
          "value" => "jp",
          "content" => "japon",
        ],
      ]);
      echo createInput("text", "myText", "", "Mon premier input");
      echo createInput("number", "myNumber", "", "Mon second input");
      echo createInput("radio", "myradio", "", "Ma radio");
      echo createInput("checkbox", "mycheckbox", "", "Ma checkbox");
      echo createSubmit("Envoyer");
      echo closeTag("form");
    */?>
    <header>
    <h1>Bonjour et bienvenue sur mon quizz sur le theme du Basket-Ball</h1>
  </header>
    <?php
      echo openForm('./script.php');
      echo "<span>1</span>";
      echo "<p>En quelle année a été inventé le basket-ball ? <em>1 point</em> </p>";
      echo createInput("radio", "q1", "false", "52 av. JC ");
      echo createInput("radio", "q1", "false", "1758");
      echo createInput("radio", "q1", "true", "1891");
      echo createInput("radio", "q1", "false", "1925");
      echo "<span>2</span>";
      echo "<p>Qui a été élu MVP de la saison régulière ? (2005-2006) <em>1 point</em></p>";
      echo createInput("radio", "q2", "true", "Steve Nash");
      echo createInput("radio", "q2", "false", "Tony Parker");
      echo createInput("radio", "q2", "false", "Kobe Bryant");
      echo createInput("radio", "q2", "false", "Dwayne Wade");
      echo "<span>3</span>";
      echo "<p>Qui a été élu MVP de la finale des Playoffs ? (2006-2007) <em>1 point</em></p>";
      echo createInput("radio", "q3", "false", "Lebron james");
      echo createInput("radio", "q3", "true", "Tony Parker");
      echo createInput("radio", "q3", "false", "Tim Duncan");
      echo createInput("radio", "q3", "false", "Manu Ginobili");
      echo "<span>4</span>";
      echo "<p>Qui a inventé le basket ? <em>1 point</em></p>";
      echo createInput("radio", "q4", "false", "Numero bis");
      echo createInput("radio", "q4", "false", "Mr.basket-ball");
      echo createInput("radio", "q4", "false", "Lebron James");
      echo createInput("radio", "q4", "true", "James Naismith");
      echo "<span>5</span>";
      echo "<p>Combien de temps a-t-on le droit de rester dans la raquette ? <em>1 point</em></p>";
      echo createInput("radio", "q5", "false", "2s");
      echo createInput("radio", "q5", "true", "3s");
      echo createInput("radio", "q5", "false", "4s");
      echo createInput("radio", "q5", "false", "5s");
      echo "<span>6</span>";
      echo createSelect("q6", "Combien y a-t-il de joueurs sur un terrain ? ", [
        [
          "value" => "false",
          "content" => "4",
        ],
        [
          "value" => "false",
          "content" => "5",
        ],
        [
          "value" => "true",
          "content" => "10",
        ],
        [
          "value" => "false",
          "content" => "20",
        ],
      ]);
      echo "<span>7</span>";
      echo createSelect("q7", "Quel joueur n'est pas un joueur de basket-ball ? <em>1 point</em>", [
        [
          "value" => "false",
          "content" => "Ben Wallace",
        ],
        [
          "value" => "true",
          "content" => "Phile Mickelson",
        ],
        [
          "value" => "false",
          "content" => "Sebastien Lafargue",
        ],
        [
          "value" => "false",
          "content" => "Ricardo Greer",
        ],
      ]);
      echo "<span>8</span>";
      echo createSelect("q8", "Quel a été le score en Playoff entre Phoenix et les Lakers ? <em>1 point</em>", [
        [
          "value" => "false",
          "content" => "4-1 pour les Lakers",
        ],
        [
          "value" => "true",
          "content" => "4-1 pour Phoenix",
        ],
        [
          "value" => "false",
          "content" => "3-2 pour Phoenix",
        ],
        [
          "value" => "false",
          "content" => "3-2 pour les Lakers",
        ],
      ]);
      echo "<span>9</span>";
      echo createSelect("q9", "En quelle année fut introduite la ligne des tirs à 3 points ? <em>1 point</em>", [
        [
          "value" => "false",
          "content" => "1758",
        ],
        [
          "value" => "false",
          "content" => "1891",
        ],
        [
          "value" => "false",
          "content" => "1947",
        ],
        [
          "value" => "true",
          "content" => "1984",
        ],
      ]);
      echo "<span>10</span>";
      echo createSelect("q10", "Qui est arrivé premier de la saison régulière Française ? ", [
        [
          "value" => "false",
          "content" => "ASVEL",
        ],
        [
          "value" => "false",
          "content" => "Le Mans",
        ],
        [
          "value" => "false",
          "content" => "Pau-Orthez",
        ],
        [
          "value" => "true",
          "content" => "Nancy",
        ],
      ]);
      echo "<span>11</span>";
      echo "<p>Comment s'apelle le club de basket LYONNAIS ?? <em>10 point</em></p>";
      echo "<small>ATTENTION !! indiquez le club en majuscule</small><br>";
      echo createInput("text", "club", "", "");
      echo createSubmit("resultat");
      echo closeTag("form");
     ?>
  </body>
</html>
