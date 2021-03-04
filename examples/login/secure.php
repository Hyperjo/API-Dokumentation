<?php
session_start();

if(!isset($_SESSION['key'])) {
  require 'login.php';
  return;
}
?>

<html lang="de">
<head>
  <title>Login-Test V.1</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Hallo</h1>
<p>Diese Seite kann nur nach erfolgreicher Anmeldung geöffnet werden.</p>
</body>
</html>