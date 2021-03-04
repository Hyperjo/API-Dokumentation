# Login-Test

Diese Website ist ein minimales Beispiel für die Nutzung der HyperjoID. Im Beispiel wird PHP verwendet. Für die Nutzung ist also ein mit PHP eingerichteter
Webserver notwendig.

[Interaktive Beispielseite](https://login-test.hyperjo.de)

### Aufbau der Website

```
├── index.php   # Startseite mit geschützten Inhalten
├── login.php   # Login-Seite mit Link auf die login.hyperjo.de-Seite
├── secure.php  # geschützter Bereich der Website ohne Funktionen
├── script.js
└── style.css
```

## Anmeldeprozess

### 1) index.php

Zunächst wird hier überprüft, ob der Benutzer bereits angemeldet ist (eine aktive Session existiert). Da der Benutzer nicht angemeldet ist, wird er automatisch
zur login.php weitergeleitet.

### 2) login.php

Die Seite login.php wird benötigt, um die Anmeldung durchzuführen. Zunächst ist der Benutzer noch nicht angemeldet und ihm wird der Inhalt inklusive dem
Anmelde-Button angezeigt. Sobald der Benutzer auf diesen klickt, wird er zur Seite login.hyperjo.de weitergeleitet. Bei der Anfrage wird die URL der login.php (
hier: `https://login-test.hyperjo.de/login.php`) und die benötigten Rechte (hier: `name, money`) mitgegeben.

Im Beispiel wird folgender Link verwendet:

`https://login.hyperjo.de/?permissions=name,money&redirect=login-test.hyperjo.de/login.php`

### 3) login.hyperjo.de

Nachdem der Benutzer zur Seite login.hyperjo.de weitergeleitet wurde, muss er sich dort mit den vom Server bekannten Anmeldedaten authentifizieren. Zusätzlich
werden ihm dort die angefragten Rechte der Website zur Kenntnisnahme mit angezeigt.

Bei erfolgreicher Anmeldung wird der Benutzer zurück zur in der URL angegebenen redirect-Adresse geleitet. Dabei werden die grundlegenden Daten des Benutzers
mitgeschickt.

### 4) login.php

Die Seite login.php wird mit den vom Login-Service mitgeschickten Daten aufgerufen. Dabei speichert die Seite den `key` und die `characterId` in der aktuellen
Session. Danach wird der Benutzer zurück auf die Startseite index.php weitergeleitet.

### 5) index.php

Da der Benutzer nun angemeldet ist, wird nicht mehr auf die login.php weitergeleitet. Die Daten aus der Session können jetzt genutzt werden, um über die API
weitere Benutzer-Daten abzufragen. Eine ausführliche Dokumentation zur Nutzung der API gibt
es [hier](https://github.com/Hyperjo/Dokumentation/blob/main/README.md). Im Anschluss werden die abgefragten Daten noch im Quellcode ausgegeben.

Zum jetzigen Stand ist der Benutzer angemeldet und je nach Aufruf der Seite können weitere API-Abfragen durchgeführt werden. Sobald der Benutzer den
Abmelde-Button gedrückt hat, werden die Daten der aktuellen Session gelöscht und die Session zerstört. Dadurch ist der Benutzer abgemeldet und der
Anmeldeprozess würde neu beginnen. Die Abmeldung wird auch nach längerer Inaktivität durchgeführt.

## Gesicherter Bereich

Die Seite secure.php beinhaltet lediglich die Prüfung, ob ein Benutzer angemeldet ist. Sie kann als Grundlage für weitere Inhaltsseiten der Website genutzt
werden. Die Seite index.php basiert ebenfalls auf dieser Seite.

## Implementierung des Beispiels

Damit das Beispiel funktioniert, müssen ein paar wenige Anpassungen durchgeführt werden, wie auch auf der Website [login-test](https://login-test.hyperjo.de)
beschrieben. Hier am Beispiel einer Domain `test.example`. Die Dateien, die oben gelistet sind, müssen unter der URL `https://test.example/` erreichbar sein.

Zunächst muss im Hyperjo-Button der redirect-Link auf die tatsächliche absolute Adresse der login.php angepasst werden. Der Button sollte danach wie folgt
aussehen.

```
<style>@import url(https://fonts.googleapis.com/css?family=Roboto);#hyperjo-button{position:relative;height:45px;width:100%;max-width:300px;box-shadow:0 4px 15px rgba(0,0,0,.2);margin:0;border:0;border-radius:3px;padding:0 30px 0 0;background:#2195f2;font-family:Roboto,sans-serif;color:#fff;font-size:14px;text-align:center;letter-spacing:.0892857143em;text-decoration:none;white-space:nowrap;user-select:none;cursor:pointer;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;display:flex;align-items:center}#hyperjo-button img{height:100%}#hyperjo-button span{width:100%}#hyperjo-button:focus{background:#1f86e4;transform:scale(.98);outline-style:initial}</style>
<a id="hyperjo-button" href="https://login.hyperjo.de/?permissions=name,money&redirect=test.example/login.php">
  <img src="https://static.hyperjo.de/img/logo.svg" alt="Hyperjo Logo">
  <span>Mit HyperjoID anmelden</span>
</a>
```

Außerdem muss auf der Seite login.php der Header, der bei erfolgreicher Übermittlung der Daten vom Login-Service aufgerufen wird, angepasst werden. In der Zeile
würde in unserem Beispiel danach Folgendes stehen.

```
header('Location: https://test.example/');
```