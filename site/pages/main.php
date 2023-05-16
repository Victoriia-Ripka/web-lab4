<form action="" method="POST">
<p>Input your name</p>
<input type="text" name="name">
</br>
</br>
<input type="submit" name="button" value="Submit">
</br>
</br>
</form>

<?php
  if(!empty($_POST['name'])){
    $name = trim(htmlspecialchars($_POST['name']));
    echo 'Hello, ' . $name;
  }
?>
