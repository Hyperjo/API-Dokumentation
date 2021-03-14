## Globale Statistiken

Mit dieser Funktion stellen wir einige globale Statistiken zur Verfügung.

### Anfrage

| Parameter | Beschreibung |
| --- | --- |
| key | optional |
| version | `1` |
| request | `globalstats` |

### Beispiel

`https://api.hyperjo.de/?version=1&request=globalstats`

### Rückgabe

```json
{
  "characters": 4596,
  "vehicles": {
    "sum": 6784,
    "destroyed": 1303
  },
  "messages": 26915,
  "money": 240191635,
  "playtime": {
    "all": 253783052,
    "police": 39931764,
    "medic": 28356662
  }
}
```

#### Anzahl der Charaktere
In `characters` steht die Anzahl aller Charaktere, die auf dem Server erstellt wurden. 

#### Fahrzeuge
Die Anzahl aller gekauften Fahrzeuge steht in `vehicles.sum`, die davon zerstörten Fahrzeuge in `vehicles.destroyed`.

#### SMS-Nachrichten
Das Feld `messages` repräsentiert die versendeten SMS-Nachrichten auf dem Server. 

#### Spielzeit
In dem `playtime`-Objekt werden die Spielzeiten aller Charaktere, die Spielzeit der Polizei und Feuerwehr in Sekunden berechnet. 

### Changelog

- Seit Version 1 verfügbar.