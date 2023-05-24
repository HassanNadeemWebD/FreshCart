<?php


session_start();
session_unset();
session_destroy();
echo "<script>alert('Your are Logged Out !')</script>";
echo "<script>window.location.href = 'adminlogin.php'</script>";

?>