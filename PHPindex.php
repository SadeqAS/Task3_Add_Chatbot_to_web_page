<?php


  $host = 'localhost';
  $user = 'root';
  $password = '';
  $db = 'motors_db';
  $port = 3306;

  
  $Connect = mysqli_connect($host, $user, $password, $db );

 
  if(mysqli_connect_errno()):
    printf("Connect failed: %s\n", mysqli_connect_errno());
    exit();
  endif;
  

$M1 = $_POST['M1'];
$M2 = $_POST['M2'];
$M3 = $_POST['M3'];
$M4 = $_POST['M4'];
$M5 = $_POST['M5'];
$M6 = $_POST['M6'];


if(isset($_POST['Save'])){

    echo "<br>";

    $my_query = "";

    $my_query = "select * from motors_values WHERE 1 ";
    $result = mysqli_query($Connect, $my_query);

    $my_query = "INSERT INTO motors_values (M1, M2, M3, M4, M5, M6) VALUES ('$M1', '$M2', '$M3', '$M4', '$M5', $M6)";
    $result = mysqli_query($Connect, $my_query);
    if($result)
    {
        echo "Values Add successfuly";
    }
    else{
        echo "Error not add any values  <br>";
    }

}


?>