<?php
session_start();

// Wenn die Anmeldung erfolgreich war, schickt Login-Seite Daten zurück
if (isset($_POST['key'])) {
  $_SESSION['key'] = $_POST['key'];
  $_SESSION['characterId'] = $_POST['characterId'];

  header('Location: https://login-test.hyperjo.de/');
}
?>

<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <title>Login-Test V.1</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Login-Test V.1</h1>
<p>Willkommen bei unserem kleinen Beispiel-Login. Hier erklären wir, wie man Nutzer über die HyperjoID authentifizieren kann.</p>
<p>Damit die HyperjoID genutzt werden kann, muss lediglich auf der Anmeldeseite der folgende Code eingefügt werden. Dabei muss das Attribut <mark>redirect</mark> an die Anmeldeseite angepasst werden.</p>
<pre><code class="language-html"><style>@import url(https://fonts.googleapis.com/css?family=Roboto);#hyperjo-button{position:relative;height:45px;width:100%;max-width:300px;box-shadow:0 4px 15px rgba(0,0,0,.2);margin:0;border:0;border-radius:3px;padding:0 30px 0 0;background:#2195f2;font-family:Roboto,sans-serif;color:#fff;font-size:14px;text-align:center;letter-spacing:.0892857143em;text-decoration:none;white-space:nowrap;user-select:none;cursor:pointer;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;display:flex;align-items:center}#hyperjo-button img{height:100%}#hyperjo-button span{width:100%}#hyperjo-button:focus{background:#1f86e4;transform:scale(.98);outline-style:initial}</style>
<a id="hyperjo-button" href="https://login.hyperjo.de/?permissions=name,money&redirect=login-test.hyperjo.de/login.php">
  <img src="https://static.hyperjo.de/img/logo.svg" alt="Hyperjo Logo">
  <span>Mit HyperjoID anmelden</span>
</a>
</code></pre>
<p>Auf der Website erscheint dann ein Button in dieser Form. Dieser leitet alle Anmeldungen automatisch an die Login-Seite für die HyperjoID weiter. Dort muss sich der Spieler mit Hilfe seiner Anmeldedaten authentifizieren und bei erfolgreicher Anmeldung wird er zurück zur Website geleitet.</p>
<style>@import url(https://fonts.googleapis.com/css?family=Roboto);#hyperjo-button{position:relative;height:45px;width:100%;max-width:300px;box-shadow:0 4px 15px rgba(0,0,0,.2);margin:0;border:0;border-radius:3px;padding:0 30px 0 0;background:#2195f2;font-family:Roboto,sans-serif;color:#fff;font-size:14px;text-align:center;letter-spacing:.0892857143em;text-decoration:none;white-space:nowrap;user-select:none;cursor:pointer;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;display:flex;align-items:center}#hyperjo-button img{height:100%}#hyperjo-button span{width:100%}#hyperjo-button:focus{background:#1f86e4;transform:scale(.98);outline-style:initial}</style>
<a id="hyperjo-button" href="https://login.hyperjo.de/?permissions=name,money&redirect=login-test.hyperjo.de/login.php">
  <img src="https://static.hyperjo.de/img/logo.svg" alt="Hyperjo Logo">
  <span>Mit HyperjoID anmelden</span>
</a>
<link rel="stylesheet" href="https://unpkg.com/@highlightjs/cdn-assets@10.6.0/styles/atom-one-light.min.css">
<script src="https://unpkg.com/@highlightjs/cdn-assets@10.6.0/highlight.min.js"></script>
<script src="script.js"></script>
<script>
  let pre = document.querySelector('.language-html')
  pre.innerHTML = escapeHtml(pre.innerHTML)
  hljs.highlightBlock(pre)
</script>
</body>
</html>