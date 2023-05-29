<?php
session_start();
$_SESSION['login']="";
session_unset();
?>
<script languague="javascript">document.location="login.php";</script>
