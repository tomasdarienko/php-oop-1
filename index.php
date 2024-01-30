<!-- - è definita una classe ‘Movie’
    => all'interno della classe sono dichiarate delle variabili d'istanza
    => all'interno della classe è definito un costruttore
    => all'interno della classe è definito almeno un metodo
    - vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->

<?php


     class movie
     {
          public $title;
          public $genre;
          public $director;
          public $year;

          function __construct($title, $genre, $director, $year)
          {
               $this->title = $title;
               $this->genre = $genre;
               $this->director = $director;
               $this->year = $year;
          }


     }
     $movie_1 = new movie("La maledizione della prima luna", " Avventura", "Gore Verbinski", "2003");
     $movie_2 = new movie("Fast & Furious 7", " Azione", " James Wan", "2015");
     $movie_3 = new movie("The Hateful Eight", " Western", " Quentin Tarantino", "2015");
     $movie_4 = new movie("Babylon ", "Drammatico", "Damien Chazelle", "2022");
?>

<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>

<body>



</body>

</html>