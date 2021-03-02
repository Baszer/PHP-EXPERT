<?php
require "db.php";
error_reporting(0);
$uid = $_GET['ID'];
//haalt specifieke ID van gedrukte knop op
?>

<!doctype html>
<html lang="en">

<head>


</head>

<body class="text-center">



  <main class="form-signin">
    <form method="post" action=" ">
      <a href='superheroes_index.php' class='btn btn-primary'>Ga Terug</a>
      <?php

      $stmttasks = $db_conn->prepare("SELECT * FROM superheroes WHERE ID = '$uid'");
      //kiest en showt naam op nieuwe pagina in een form waar je kan veranderen
      $stmttasks->execute();
      foreach ($stmttasks as $rows) {
        $titel = $rows['Title'];
        $AL = $rows['Alignment'];
        echo '<h1 class="h3 mb-3 fw-normal">plan a task</h1>';
        echo "<input type='text' class='form-control' name='subject' id='subject' value='$titel'>";
        echo "<input type='text' class='form-control' name='subject1' id='subject1' value='$AL'>";
        echo '<button class="w-100 btn btn-lg btn-primary" name="form_update" type="submit">Update</button>';
      }

      $TitleV = $_POST['subject'];
      $Ali = $_POST['subject1'];
      //pakt de info van de vorige zodat je het kan veranderen

      $stmt0 = $db_conn->prepare("UPDATE superheroes SET Title = '$TitleV' , Alignment = '$Ali' WHERE ID = '$uid'");


      $stmt0->execute();
      //zodat hij alles update en de verandere info pakt
      //update het alleen door de knop
      ?>


    </form>
  </main>

</body>

</html>