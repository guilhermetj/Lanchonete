<?php 
session_start();
session_destroy();
$msg = "Sessão finalizada";
$alert = 'success';
header("Location: /index.php?msg=$msg&alert=$alert");
?>