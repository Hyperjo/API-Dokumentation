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
  "characters": 4596, // Die Anzahl der erstellten Charaktere
  "vehicles": {
    "sum": 6784, // Die Summe aller Fahrzeuge, die auf dem Server existieren (inklusive zerstörte Fahrzeuge)
    "destroyed": 1303 // Die Summe aller Fahrzeuge, die zerstört wurden.
  },
  "messages": 26915, // Die Anzahl der SMS-Nachrichten, die verschickt wurden.
  "money": 240191635, // Das Gesamtvermögen aller Charaktere.
  "playtime": {
    "all": 253783052, // Die Gesamtspielzeit aller Charaktere in Sekunden.
    "police": 39931764, // Die Gesamtarbeitszeit aller Polizeimitarbeiter/innen.
    "medic": 28356662 // Die Gesamtarbeitszeit aller Feuerwehrmitarbeiter/innen.
  }
}
```

### Changelog

- Seit Version 1 verfügbar.