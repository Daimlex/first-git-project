<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML</title>
  </head>
  <body>
    <h1>PHP<h1>
      <p>Grundlage<p>
				<?php
					$vorname = 'Damian';
					$nachname = 'Schönmann';
					$alter = 17;
					$hobby = 'Fussball spielen und Zocken';
					$wohnort ="Romanshorn";
          $doppelt = false;
          $einfach = true;
          $kollegen[] = 'test';
          $kollegen[] = 'Marco';
          $kollegen[] = 'Njo';
          print_r($kollegen[2]);


          echo '<br>';

          $array = array('name' => 'Michael', 'vorname' => ' Kunz ' , 'alter' => 20 );

          var_dump($array);
					//echo 'Hallo ich heisse ' . "\"$vorname\"" . ' ' . $nachname . ' und bin ' . $alter . ' Jahre alt! </br> Ich wohne in ' . $wohnort . 'und meine Hobbys sind ' . $hobby . '!';

          echo '<br>';

          $counter = 0;

          for ($counter; $counter <= 10 ; $counter++) {
              if ($counter == 5) {
                echo '<p>' . $counter . '</p>';
              }
            else if ($counter == 6) {


              echo '<p>' . $counter . '</p>';
            }
          }




          //phpinfo();
				 ?>
  </body>
</html>
