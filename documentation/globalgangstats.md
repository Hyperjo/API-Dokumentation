## Globale Gang-Statistiken

Mit dieser Funktion stellen wir einige globale Gang-Statistiken zur Verfügung.

### Anfrage

| Parameter | Beschreibung |
| --- | --- |
| key | optional |
| version | `1` |
| request | `globalgangstats` |

### Beispiel

`https://api.hyperjo.de/?version=1&request=globalgangstats`

### Rückgabe

```json
{
  "gangs": 121,
  "gangMoney": 9903671,
  "gangMembers": 244,
  "gangProperties": 26,
  "gangVehicles": 137
}
```

### Changelog

- Seit Version 1 verfügbar.