<?php
    mysql_connect('localhost','root','root');
    mysql_select_db('Flower'); 

    //$id = $_GET['id'];
    $sql = "SELECT * FROM myTable"; //WHERE id={$id}

    $query = mysql_query($sql);
    $result = mysql_fetch_assoc($query);

?>
<!doctype>
<html>
  <head>
    <title>POST</title>
  </head>

  <body>

    <pre>
   <?php 
   print$result['id']."<br>";
   print$result['type']."<br>";
   ?> 
    </pre>
  </body>
</html>