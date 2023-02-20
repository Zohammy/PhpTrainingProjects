<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>

<body>
   <?php

   $json = array();

   $servername = 'localhost:3306';
   $db = 'test';

   $conn = mysqli_connect($servername, 'root', 'root', $db);
   if (!$conn) {
      die("Couldn't connect to" . mysqli_connect_error());
   }


   $sql = "INSERT INTO `user`(`name`, `password`) VALUES ($name,$password)";

   if (mysqli_query($conn, $sql)) {
      echo "Таблица успешно создана.";
   } else {
      echo "ERROR: Не удалось выполнить $sql. " . mysqli_error($conn);
   }

   mysqli_close($conn);
   ?>



   <form method="POST">
      <p>Введите имя</p><br>
      <input type="text" name="name"><br>
      <p>Введите пароль</p><br>
      <input type="text" name="password"><br>
      <br>
      <input type="submit">
   </form>


</body>

</html>