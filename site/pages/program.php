program

<?php
$id = $_GET['id'];
setcookie("id", $id, time() + 500);

?>