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


     public function number2roman($num, $isUpper = true)
     {
          $n = intval($num);
          $res = '';

          /*** roman_numerals array ***/
          $roman_numerals = array(
               'M' => 1000,
               'CM' => 900,
               'D' => 500,
               'CD' => 400,
               'C' => 100,
               'XC' => 90,
               'L' => 50,
               'XL' => 40,
               'X' => 10,
               'IX' => 9,
               'V' => 5,
               'IV' => 4,
               'I' => 1
          );

          foreach ($roman_numerals as $roman => $number) {
               /*** divide to get matches ***/
               $matches = intval($n / $number);

               /*** assign the roman char * $matches ***/
               $res .= str_repeat($roman, $matches);

               /*** substract from the number ***/
               $n = $n % $number;
          }

          /*** return the res ***/
          if ($isUpper)
               return $res;
          else
               return strtolower($res);
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

     <div>
          <ul>
               <li>
                    <?php echo $movie_1->title; ?>
                    <ul>

                         <li>
                              <?php echo $movie_1->genre; ?>
                         </li>
                         <li>
                              <?php echo $movie_1->director; ?>
                         </li>
                         <li>
                              <?php echo $movie_1->number2roman($movie_1->year); ?>
                         </li>
                    </ul>
               </li>
               <li>
                    <?php echo $movie_2->title; ?>
                    <ul>

                         <li>
                              <?php echo $movie_2->genre; ?>
                         </li>
                         <li>
                              <?php echo $movie_2->director; ?>
                         </li>
                         <li>
                              <?php echo $movie_2->number2roman($movie_2->year); ?>
                         </li>
                    </ul>
               </li>
               <li>
                    <?php echo $movie_3->title; ?>
                    <ul>

                         <li>
                              <?php echo $movie_3->genre; ?>
                         </li>
                         <li>
                              <?php echo $movie_3->director; ?>
                         </li>
                         <li>
                              <?php echo $movie_3->number2roman($movie_3->year); ?>
                         </li>
                    </ul>
               </li>
               <li>
                    <?php echo $movie_4->title; ?>
                    <ul>

                         <li>
                              <?php echo $movie_4->genre; ?>
                         </li>
                         <li>
                              <?php echo $movie_4->director; ?>
                         </li>
                         <li>
                              <?php echo $movie_4->number2roman($movie_4->year); ?>
                         </li>
                    </ul>
               </li>
          </ul>

     </div>

</body>

</html>