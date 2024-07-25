<?php
$name = $_POST['name'];
$fixedPassword = $_POST['passw'];

if ($fixedPassword === "svecw123") {
    echo "<script>window.location.assign('afteradminlogin.php');</script>";
} else {
    readfile('adminlogin2.html');
}
?>
