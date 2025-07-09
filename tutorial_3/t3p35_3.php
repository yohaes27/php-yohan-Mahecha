<?php
setcookie('tipo_titular', '', time() - 3600, "/");
header('Location: t3p35.php');
exit;