# Hyperjo-API Dokumentation

Die Hyperjo-API wurde entwickelt, um interessierten Spielern von unserem Server eine Möglichkeit bereitzustellen, 
selbst neue Inhalte für Spieler bereitzustellen. Du hast bereits Vorkenntnisse mit Websprachen und weißt, 
wie man eine dynamische Website zur Verfügung stellt? Perfekt, dann ist diese API genau für dich gedacht.

### Empfohlene Voraussetzungen für den sicheren Umgang
- Ein Grundverständnis von Webseiten und deren Kommunikation im Internet.
- Kentnisse in einer Programmiersprache, die für dynamische Webseiten geignet ist (PHP, Javascript, ...).
- Unsere API liefert Daten im JSON-Format. Wie dieses Format aufgebaut ist, findest du auch in unserer Dokumentation.

### Wofür ist die API gedacht?
Da wir niemanden in seiner Kreativität einschränken wollen, darfst du unsere API nutzen, wie du möchtest. 
Einige grundlegende Einschränken findest du jedoch weiter unten beschrieben. Zum einen bietet die API eine öffentliche
Schnittstelle, die jeder nutzen kann. Damit können Spieler-Unabhängige Daten wie beispielsweise Farming-Preise 
oder die Anzahl der Online-Spieler abgefragt werden. Auf der anderen Seite bieten wir ein eigenes Login-System,
mit dem wir einen eingeschränkten Zugriff auf Charakter-Daten erlauben. 

Für den Einstieg in unsere API empfehlen wir dir zuerst kleinere Projekte, wie zum Beispiel einen Farmingrechner 
oder eine Farmingpreis-Historie. Wenn du zudem mit unserem Login-System arbeitet möchtest, kannst du von einem Aktiensystem
bis zu einer eigenen Handelsplattform alles umsetzen. 

## API
Eine Übersicht aller Funktionen unserer API findest du in [diesem Ordner](https://github.com/Hyperjo/Dokumentation/tree/main/documentation). Du musst jedoch beachten, dass einige Funktionen 
einen Schlüssel (im folgenden als "Key" bezeichnet) benötigen. Dabei unterscheiden wir zwischen mehreren Arten von Keys:

| Key | Beschreibung |
| --- | --- |
| Kein Key | Einige Funktionen stehen ohne Key zur Verfügung und können von jedem genutzt werden. Da diese Methode auschließlich zum testen gedacht ist, restriktieren wir die Zugriffe ohne Key auf 100 Anfragen/Tag pro IP-Adresse. |
| Entwickler-Key | Ein Entwickler-Key wird von dem Hyperjo-Management an Personen vergeben, die ein eigenes Projekt umsetzen wollen und dafür ein erweitertes Anfragen-Kontigent (3600 Anfragen/Stunde) benötigten. |
| Benutzer-Key | Benutzer-Keys können dynamisch durch unser Login-System generiert werden. Dieser kann verwendet werden, um Charakter-spezifische Daten abzufragen.  |

Solltest du eine Idee haben, mit welchen Funktionen wir unsere API noch erweitern sollten, teile uns diese doch über
ein neues "Issue" hier im GitHub-Projekt mit.

## Login
Die Motivation hinter unserem Login-Service ist es, zum einen ein einheitliches Login-System für unsere 
Spieler anzubieten, aber auch um Anfängern der Webentwicklung ein eigenes Login-System zu ersparen. Ein einfaches
Beispiel für ein System, welches den Hyperjo-Login implementiert, findest du [hier](https://github.com/Hyperjo/Dokumentation/tree/main/examples/login). Wenn du unseren 
Login-Service nutzen möchtest, melde dich bitte zuvor bei einem Entwickler.
