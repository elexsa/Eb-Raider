<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>

<?php
  $servername = "localhost";
  $username = "debian-sys-maint";
  $password = "gvF3lvQR4HtvMV10";
  $dbname = "myDB";

  // Створюю підключення до сервера
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Перевіряю підключення
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  echo "Connected successfully";

  // sql to create table
  $sql = "CREATE TABLE MyGuests (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  firstname VARCHAR(30) NOT NULL,
  lastname VARCHAR(30) NOT NULL,
  email VARCHAR(50),
  reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  )";

  if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  };

  $conn->close();
?> 

</body>
</html>