<?php
   setcookie("login", '', time()-3600, '/');
   setcookie("hash", '', time()-3600, '/');
   header("Location: ../../index.php");
?>