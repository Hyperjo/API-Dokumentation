# Hyperjo-API

In diesem Ordner wird jede Funktion der API in einer eigenen Datei beschrieben. Hier folgt, wie man im Allgemeinen eine Anfrage an die API stellt und wie das
Ergebnis verwendet werden kann.

## Die erste Anfrage an die API

In unserer ersten Anfrage an die API wollen wir die aktuellen Farming-Preise auslesen und in einer formatieren Liste ausgeben.

### Parameter

Jede Anfrage an die API ist im Grunde gleich aufgebaut und besteht zum einen aus der Domain und Parametern. Mithilfe dieser Parameter können wir beschreiben,
was die API zurückgeben soll.

```
https://api.hyperjo.de/?version=1&request=farming
<--     Domain     -->  <--     Parameter     -->
```

Die Reihenfolge der Parameter ist egal. Die folgende Abfrage würde exakt das gleiche Ergebnis erzeugen.

```
https://api.hyperjo.de/?request=farming&version=1
```

Die folgenden Parameter müssen bei jeder Anfrage an die API gesetzt werden.

| Parameter | Beschreibung | Beispielwerte |
| --- | --- | --- |
| version | Damit wir durch Änderungen an einzelnen Funktionen keine vorhandenen Systeme funktionsunfähig machen, muss eine Versionsnummer als Parameter übergeben werden. Wie sich die Versionen für die einzelnen Funktionen unterscheiden, wird in den jeweiligen Dokumentationen beschrieben. | `1` |
| request | Hiermit wird spezifiziert, welche Art der Anfrage wir an die API machen wollen. Jede Art der Anfrage besitzt in der Dokumentation eine eigene Datei, in der weitere Informationen nachgelesen werden können. | `farming`, `online` |

### Anfrage im Browser ausführen

Um die aktuellen Farmingpreise auszulesen, kann die Domain https://api.hyperjo.de mit den Parametern `version=1` und `request=farming` wie folgt aufgerufen
werden:

https://api.hyperjo.de/?version=1&request=farming

Als Ergebnis wird im Browser ein JSON-Objekt angezeigt. Dieses Objekt enthält ein Attribut `farming`, welches wiederum eine Liste von Objekten beinhaltet. Jedes
Farminggut besteht aus einem Namen, einem Symbol, welches über die angegebene URL aufrufbar ist, und dem aktuellen Preis.

```json
{
  "farming": [
    {
      "itemName": "Mehl",
      "symbol": "https://static.hyperjo.de/img/items/farming/flour.png",
      "currentPrice": 168
    },
    {
      "itemName": "Tiefgekühlte Pommes",
      "symbol": "https://static.hyperjo.de/img/items/farming/frozenfries.png",
      "currentPrice": 132
    },
    {
      "itemName": "Glas",
      "symbol": "https://static.hyperjo.de/img/items/farming/glas.png",
      "currentPrice": 182
    }
  ]
}
```

### Anfrage in Programmiersprachen implementieren

Jetzt wird es spannend. Nachfolgend wird in zwei Programmiersprachen gezeigt, wie die oben ausgeführte Anfrage umgesetzt werden kann.

#### PHP

```php
$json = file_get_contents('https://api.hyperjo.de/?version=1&request=farming');
$obj = json_decode($json);
foreach ($obj->farming as $entry) {
    echo $entry->itemName . " is at " . $entry->currentPrice . "<br>";
}
```

#### JavaScript (NodeJS mit https module)

```javascript
const https = require("https");
https.get("https://api.hyperjo.de/?version=1&request=farming", function (res) {
  let json = "";

  res.on("data", function (chunk) {
    json += chunk;
  })
  res.on("end", function () {
    let obj = JSON.parse(json);
    for (let entry of obj["farming"]) {
      console.log(entry["itemName"] + " is at " + entry["currentPrice"]);
    }
  })
})
```

#### Ausgabe

```
Mehl is at 168
Tiefgekühlte Pommes is at 132
Glas is at 182
...
```
