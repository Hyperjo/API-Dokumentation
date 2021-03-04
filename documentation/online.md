## Online Spieler

Mit dieser Funktion kann abgefragt werden, wie viele Spieler gerade auf dem Server online sind.

### Anfrage

| Parameter | Beschreibung |
| --- | --- |
| key | optional |
| version | `1` |
| request | `online` |

### Beispiel

`https://api.hyperjo.de/?version=1&request=online`

### Rückgabe

```json
{
  "onlinePlayers": 56
}
```

### Changelog

- Seit Version 1 verfügbar.