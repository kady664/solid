<?php

$id = $_GET["id"];

$conn = mysqli_connect('localhost','root','','solidwears');

$sql = "DELETE FROM category WHERE id = '$id'";
mysqli_query($conn , $sql);

header("Location: category.php")

?>
