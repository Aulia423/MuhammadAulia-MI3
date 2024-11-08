<?php
include "koneksi.php";

$query = "DELETE FROM barabg1 WHERE id='$_GET[id]'";
$mysqli->query($query);

header('Location: index.php');
exit();
?>
