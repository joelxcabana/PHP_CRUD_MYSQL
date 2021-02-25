<?php
   $conn = mysqli_connect(
       'localhost',
       'root',
       'root',
       'php_mysql_crud'
   );

   if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
  }

?>