<?php
  if(isset($_POST['submitted'])) {
      mysql_connect('localhost','root','root');
      mysql_select_db('Flower'); 

      $sql = "INSERT INTO myTable (type, petal,color,leaf) VALUES ('$_POST[type]','$_POST[petal]','$_POST[color]','$_POST[leaf]')";
      mysql_query($sql);
  }
?>
<html>
  <head>
    <title>Upload</title>
  </head>

  <body>
  <h1>changed!</h1>
    <pre>
      <?php print_r($_POST);?>
    </pre>

    <form method="post" action="index.php">

    <h3>Type</h3>
    <select name="type">
    <option value="Brassicaceae" >Brassicaceae</option>
    <option value="Asteraceae">Asteraceae</option>
    <option value="Apiaceae"> Apiaceae</option>
   </select>

    <h3>Petal</h3>
    <select name="petal" >
    <option value="petal1" >petal1</option>
    <option value="petal2">petal2</option>
    <option value="petal3">petal3</option>
    <option value="petal4">petal4</option>
    <option value="petal5">petal5</option>
    <option value="petal6">petal6</option>
   </select>


  <h3>Color</h3>
   <select name="color">
    <option name="color" value="purple">purple</option>
    <option name="color" value="red">red</option>
    <option name="color" value="yellow">yellow</option>
    <option name="color" value="blue">blue</option>
    <option name="color" value="yellow">yellow</option>
    <option name="color" value="orange">orange</option>
   </select>

   <h3>Leaf</h3>
   <select name="leaf">
    <option name="leaf" value="leaf1">leaf1</option>
    <option name="leaf" value="leaf2">leaf2</option>
    <option name="leaf" value="leaf3">leaf3</option>
    <option name="leaf" value="leaf4">leaf4</option>
    <option name="leaf" value="leaf5">leaf5</option>
    <option name="leaf" value="leaf6">leaf6</option>
   </select>
    

    <input type="hidden" name="submitted" value="true" /><br><br>

      <input type="submit" />
    </form>
  </body>
</html>
