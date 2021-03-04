## Geld

Mit dieser Funktion kann abgefragt werden, die viel Geld ein Spieler insgesamt zur Verfügung hat. Es werden Kontostand und Bargeld zusammengerechnet.

### Anfrage

| Parameter | Beschreibung |
| --- | --- |
| key | Benutzer-Key mit Recht `money` benötigt. |
| version | `1` |
| request | `money` |

### Beispiel

`https://api.hyperjo.de/?version=1&request=money&key=[KEY]`

### Rückgabe

```json
{
  "characterId": 2,
  "money": 3695439
}
```

### Changelog

- Seit Version 1 verfügbar.