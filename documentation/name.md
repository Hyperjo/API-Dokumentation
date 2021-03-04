## Charakter-Name

Kann verwendet werden, um einen Charakter-Namen zu einem Key abzufragen.

### Anfrage

| Parameter | Beschreibung |
| --- | --- |
| key | Benutzer-Key mit Recht `name` benötigt. |
| version | `1` |
| request | `name` |

### Beispiel

`https://api.hyperjo.de/?version=1&request=name&key=[KEY]`

### Rückgabe

```json
{
  "characterId": 2,
  "name": "Tim Lustig"
}
```

### Changelog

- Seit Version 1 verfügbar.
