<?php
session_start();

if(!isset($_SESSION['key'])) {
  require 'login.php';
  return;
}

if ($_POST['action'] === "logout") {
  session_destroy();
  header("Refresh:0");
}

// Daten aus der Session
$key = $_SESSION['key'];
$characterId = $_SESSION['characterId'];

// API-Abfrage
$json = file_get_contents('https://api.hyperjo.de/?key=' . $key . '&version=1&request=name');
// JSON -> Objekt
$obj = json_decode($json);
// Zugriff auf Attribut
$name = $obj->name;
?>

<html lang="de">
<head>
  <title>Login-Test V.1</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Hey, <?php echo $name ?>!</h1>
<p>Deine Anmeldung war erfolgreich. Dein Passwort wurde dabei nicht an diese Website weitergeleitet. Die grundlegenden Daten werden als POST-Parameter übergeben und können beispielsweise mit PHP verarbeitet werden.</p>
<pre><code class="language-php">$key = $_POST['key'];
/* Wert: <?php echo $key ?> */
$characterId = $_POST['characterId'];
/* Wert: <?php echo $characterId ?> */
</code></pre>
<p>In diesem Fall wurden zusätzlich die Rechte <mark>name</mark> und <mark>money</mark> abgefragt und der Spieler wurde darüber informiert. Mit dem folgenden Zugriff auf die API kann der <mark>name</mark> des aktuellen Spielers ausgelesen werden. Im Beispiel muss <mark>key</mark> durch den übergebenen Key ersetzt werden.</p>
<pre><code class="language-php">$json = file_get_contents('https://api.hyperjo.de/?key=' . $key . '&version=1&request=name');
/* Wert: <?php echo $json = file_get_contents('https://api.hyperjo.de/?key=' . $key . '&version=1&request=name'); ?> */
</code></pre>
<p>Diesen JSON-String können wir nun unter PHP mit Hilfe der Funktion json_decode zu einem Objekt umwandeln. Dann können wir auf das übergebene Attribut <mark>name</mark> zugreifen.</p>
<pre><code class="language-php">$obj = json_decode($json);
$name = $obj->name;
/* Wert: <?php echo $name ?> */
</code></pre>
<p>Damit du unsere HyperjoID nutzen kannst, musst du dich lediglich im Support melden und mit einem &lt;Entwickler&gt; sprechen. Wir helfen dir auch gerne bei der Umsetzung. Um die Anmeldung wieder zu erreichen, musst du dich abmelden.</p>
<form method="post" action=""><input type="hidden" name="action" value="logout"><input class="logout-button" type="submit" value="Abmelden"></form>
<link rel="stylesheet" href="https://unpkg.com/@highlightjs/cdn-assets@10.6.0/styles/atom-one-light.min.css">
<script src="https://unpkg.com/@highlightjs/cdn-assets@10.6.0/highlight.min.js"></script>
<script src="script.js"></script>
<script>
  let pre = document.querySelectorAll('.language-php')
  for (let el of pre) {
    el.innerHTML = escapeHtml(el.innerHTML)
    hljs.highlightBlock(el)
  }
</script>
</body>
</html>
