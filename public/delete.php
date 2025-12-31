<?php
include '../config/database.php';

if (!isset($_GET['id'])) {
    header("Location: index.php");
    exit;
}

$id = $_GET['id'];

mysqli_query($koneksi, "DELETE FROM contacts WHERE id = $id");

header("Location: index.php");
exit;
?>
