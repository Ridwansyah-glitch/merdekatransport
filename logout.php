<?php
session_start();
unset($_SESSION['username']);
?>
<script> alert ('Anda berhasil logout')
location.replace('index.php')</script>