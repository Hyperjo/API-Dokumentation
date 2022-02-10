## Charakter-Name

Kann verwendet werden, um einen Charakter-Namen zu einem Key abzufragen.

### Anfrage

| Parameter | Beschreibung |
| --- | --- |
| key | Benutzer-Key mit Recht `name` benötigt. |
| version | `1` |
| request | `name` |

### Beispiel

`https://api.hyperjo.de/?version=1&request=name&key=978ba661-9ea9-430b-b2e1-38930d735fd9`

### Rückgabe

```json
{
  "characterId": "D48F",
  "name": "Tim Lustig"
}
```

### Changelog

- Seit Version 1 verfügbar.
