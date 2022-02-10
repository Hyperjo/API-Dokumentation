## Geld

Mit dieser Funktion kann abgefragt werden, wie viel Geld ein Spieler insgesamt zur Verfügung hat. Es werden Kontostand und Bargeld zusammengerechnet.

### Anfrage

| Parameter | Beschreibung |
| --- | --- |
| key | Benutzer-Key mit Recht `money` benötigt. |
| version | `1` |
| request | `money` |

### Beispiel

`https://api.hyperjo.de/?version=1&request=money&key=978ba661-9ea9-430b-b2e1-38930d735fd9`

### Rückgabe

```json
{
  "characterId": "D48F",
  "money": 3695439
}
```

### Changelog

- Seit Version 1 verfügbar.